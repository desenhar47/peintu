<?php
/**
 * 2010-2019 Templatemelathemes
 *
 * NOTICE OF LICENSE
 *
 * DISCLAIMER
 *
 *  @Module Name: TM CouponPop Module
 *  @author    templatemela <support@templatemela.com>
 *  @copyright 2010-2019 templatemela
 *  @license   http://www.templatemela.com - prestashop template provider
 */

class OvicnewsletterVerificationModuleFrontController extends ModuleFrontController
{
	private $message = '';

	/**
	 * @see FrontController::postProcess()
	 */
	public function postProcess()
	{
		$this->message = $this->module->confirmEmail(Tools::getValue('token'));
	}

	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		parent::initContent();

		$this->context->smarty->assign('message', $this->message);
		$this->setTemplate('verification_execution.tpl');
	}
}
