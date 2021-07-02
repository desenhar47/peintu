<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2016 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

require_once _PS_MODULE_DIR_.'tm_cms1block/classes/Cms1Block.php';

class Tm_Cms1block extends Module implements WidgetInterface
{
    // Equivalent module on PrestaShop 1.6, sharing the same data
    const MODULE_16 = 'blockcmsinfo';

    private $templateFile;

    public function __construct()
    {
        $this->name = 'tm_cms1block';
        $this->tab = 'front_office_features';
		$this->author = 'TemplateMela';
        $this->version = '4.1.0';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        Shop::addTableAssociation('tmcms1blockinfo', array('type' => 'shop'));


        $this->displayName = $this->trans('TM - CMS1 Block', array(), 'Modules.Cms1Block.Admin');
        $this->description = $this->trans('Adds custom information block in your store.', array(), 'Modules.Cms1Block.Admin');

        $this->ps_versions_compliancy = array('min' => '1.7.4.0', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:tm_cms1block/views/templates/hook/tm_cms1block.tpl';
    }

    public function install()
    {
         // Remove 1.6 equivalent module to avoid DB issues
        if (Module::isInstalled(self::MODULE_16)) {
            return $this->installFrom16Version();
        }

        return $this->runInstallSteps()
            && $this->installFixtures();
    }

    public function runInstallSteps()
    {
        return parent::install()
            && $this->installDB()
            && $this->registerHook('displayHome')
            && $this->registerHook('actionShopDataDuplication');
    }

    public function installFrom16Version()
    {
        require_once _PS_MODULE_DIR_.$this->name.'/classes/MigrateData.php';
        $migration = new MigrateData();
        $migration->retrieveOldData();

        $oldModule = Module::getInstanceByName(self::MODULE_16);
        if ($oldModule) {
            $oldModule->uninstall();
        }
        return $this->uninstallDB()
            && $this->runInstallSteps()
            && $migration->insertData();
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->uninstallDB();
    }

    public function installDB()
    {
        $return = true;
        $return &= Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'tmcms1blockinfo` (
                `id_tmcms1blockinfo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                PRIMARY KEY (`id_tmcms1blockinfo`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;'
        );

        $return &= Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'tmcms1blockinfo_shop` (
                `id_tmcms1blockinfo` INT(10) UNSIGNED NOT NULL,
                `id_shop` INT(10) UNSIGNED NOT NULL,
                PRIMARY KEY (`id_tmcms1blockinfo`, `id_shop`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8 ;'
        );

        $return &= Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'tmcms1blockinfo_lang` (
                `id_tmcms1blockinfo` INT UNSIGNED NOT NULL,
                `id_shop` INT(10) UNSIGNED NOT NULL,
                `id_lang` INT(10) UNSIGNED NOT NULL ,
                `text` text NOT NULL,
                PRIMARY KEY (`id_tmcms1blockinfo`, `id_lang`, `id_shop`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;'
        );

        return $return;
    }

    public function uninstallDB($drop_table = true)
    {
        $ret = true;
        if ($drop_table) {
            $ret &= Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tmcms1blockinfo`')
                && Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tmcms1blockinfo_shop`')
                && Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'tmcms1blockinfo_lang`');
        }

        return $ret;
    }

    public function getContent()
    {
        $output = '';

        if (Tools::isSubmit('savetm_cms1block')) {
            if (!Tools::getValue('text_'.(int)Configuration::get('PS_LANG_DEFAULT'), false)) {
                $output = $this->displayError($this->trans('Please fill out all fields.', array(), 'Admin.Notifications.Error')) . $this->renderForm();
            } else {
                $update = $this->processSaveCms1Block();

                if (!$update) {
                    $output = '<div class="alert alert-danger conf error">'
                        .$this->trans('An error occurred on saving.', array(), 'Admin.Notifications.Error')
                        .'</div>';
                }

                $this->_clearCache($this->templateFile);
            }
        }

        return $output.$this->renderForm();
    }

   public function processSaveCms1Block()
    {
        $shops = Tools::getValue('checkBoxShopAsso_configuration', array($this->context->shop->id));
        $text = array();
        $languages = Language::getLanguages(false);

        foreach ($languages as $lang) {
            $text[$lang['id_lang']] = Tools::getValue('text_'.$lang['id_lang']);
        }

        $saved = true;
        foreach ($shops as $shop) {
            Shop::setContext(Shop::CONTEXT_SHOP, $shop);
            $tmcms1blockinfo = new Cms1Block(Tools::getValue('id_tmcms1blockinfo', 1));
        $tmcms1blockinfo->text = $text;
            $saved &= $tmcms1blockinfo->save();
        }

        return $saved;
    }

    protected function renderForm()
    {
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        $fields_form = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->trans('CMS block', array(), 'Modules.Cms1Block.Admin'),
            ),
            'input' => array(
                'id_tmcms1blockinfo' => array(
                    'type' => 'hidden',
                    'name' => 'id_tmcms1blockinfo'
                ),
                'content' => array(
                    'type' => 'textarea',
                    'label' => $this->trans('Text block', array(), 'Modules.Cms1Block.Admin'),
                    'lang' => true,
                    'name' => 'text',
                    'cols' => 40,
                    'rows' => 10,
                    'class' => 'rte',
                    'autoload_rte' => true,
                ),
            ),
            'submit' => array(
                'title' => $this->trans('Save', array(), 'Admin.Actions'),
            ),
            'buttons' => array(
                array(
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
                    'title' => $this->trans('Back to list', array(), 'Admin.Actions'),
                    'icon' => 'process-icon-back'
                )
            )
        );

        if (Shop::isFeatureActive() && Tools::getValue('id_tmcms1blockinfo') == false) {
            $fields_form['input'][] = array(
                'type' => 'shop',
                'label' => $this->trans('Shop association', array(), 'Admin.Global'),
                'name' => 'checkBoxShopAsso_theme'
            );
        }


        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = 'tm_cms1block';
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = array(
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
            );
        }

        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->submit_action = 'savetm_cms1block';

        $helper->fields_value = $this->getFormValues();

        return $helper->generateForm(array(array('form' => $fields_form)));
    }

    public function getFormValues()
    {
        $fields_value = array();
        $idShop = $this->context->shop->id;
        $idInfo = Cms1Block::getCms1BlockIdByShop($idShop);

        Shop::setContext(Shop::CONTEXT_SHOP, $idShop);
        $tmcms1blockinfo = new Cms1Block((int)$idInfo);

        $fields_value['text'] = $tmcms1blockinfo->text;
        $fields_value['id_tmcms1blockinfo'] = $idInfo;

        return $fields_value;
    }

    public function renderWidget($hookName = null, array $configuration = [])
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId('tm_cms1block'))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        }

        return $this->fetch($this->templateFile, $this->getCacheId('tm_cms1block'));
    }
    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        $sql = 'SELECT * FROM `'._DB_PREFIX_.'tmcms1blockinfo_lang`
            WHERE `id_lang` = '.(int)$this->context->language->id.' AND  `id_shop` = '.(int)$this->context->shop->id;

        return array(
            'tmcms1blockinfos' => Db::getInstance()->getRow($sql),
        );
    }
	
    public function installFixtures()
    {
        $return = true;
        $tabTexts = array(
            array(
                'text' => '<div class="cms1block">
                            <div class="innerblockcms">
                            <div class="imgcms1block">
                            <div class="firstbannerdiv firstbannerdiv1">
                            <div class="imagepart imagepart1">
                            <a class="imgbanner imgbanner1" href="#"><img class="lazyload" alt="Sub-banner-1" src="img/cms/Sub-banner-1.jpg" /></a>
                            <div class="textcms1block textcms1block1"><span class="blockhead blockhead1"> Top Deal </span>
                            <h1 class="cms1heading cms1heading1">Clothing Fetish</h1>
                            <a href="#" class="btn btncms1 btncms11">Shop Now</a></div>
                            </div>
                            </div>
                            <div class="firstbannerdiv firstbannerdiv2">
                            <div class="imagepart imagepart2">
                            <a class="imgbanner imgbanner2" href="#"><img class="lazyload" alt="Sub-banner-2" src="img/cms/Sub-banner-2.jpg" /></a>
                            <div class="textcms1block textcms1block2"><span class="blockhead blockhead1"> Top Deal </span>
                            <h1 class="cms1heading cms1heading1">Sunglasses</h1>
                            <a href="#" class="btn btncms1 btncms11">Shop Now</a></div>
                            </div>
                            </div>
                            <div class="firstbannerdiv firstbannerdiv3">
                            <div class="imagepart imagepart3">
                            <a class="imgbanner imgbanner3" href="#"><img class="lazyload" alt="Sub-banner-3" src="img/cms/Sub-banner-3.jpg" /></a>
                            <div class="textcms1block textcms1block3"><span class="blockhead blockhead1"> Top Deal </span>
                            <h1 class="cms1heading cms1heading1">Bomber Hat</h1>
                            <a href="#" class="btn btncms1 btncms11">Shop Now</a></div>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>'
            ),
        );

        $shopsIds = Shop::getShops(true, null, true);
        $languages = Language::getLanguages(false);
        $text = array();

        foreach ($tabTexts as $tab) {
            $tmcms1blockinfo = new Cms1Block();
            foreach ($languages as $lang) {
                $text[$lang['id_lang']] = $tab['text'];
            }
            $tmcms1blockinfo->text = $text;
            $return &= $tmcms1blockinfo->add();
        }

        if($return && sizeof($shopsIds) > 1) {
            foreach ($shopsIds as $idShop) {
                Shop::setContext(Shop::CONTEXT_SHOP,$idShop);
                $tmcms1blockinfo->text = $text;
                $return &= $tmcms1blockinfo->save();
            }
        }

        return $return;
    }

    /**
     * Add CustomText when adding a new Shop
     *
     * @param array $params
     */
    public function hookActionShopDataDuplication($params)
    {
        if ($tmcms1blockinfoId = Cms1Block::getCms1BlockIdByShop($params['old_id_shop'])) {
            Shop::setContext(Shop::CONTEXT_SHOP, $params['old_id_shop']);
            $oldInfo = new Cms1Block($infoId);

            Shop::setContext(Shop::CONTEXT_SHOP, $params['new_id_shop']);
            $newInfo = new Cms1Block($infoId, null, $params['new_id_shop']);
            $newInfo->text = $oldInfo->text;

            $newInfo->save();
        }
    }
}
