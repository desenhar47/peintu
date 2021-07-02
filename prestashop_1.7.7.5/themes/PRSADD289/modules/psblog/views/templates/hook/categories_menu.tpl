{*
 *  Ps Prestashop SliderShow for Prestashop 1.6.x
 *
 * @package   pssliderlayer
 * @version   3.0
 * @author    http://www.prestabrain.com
 * @copyright Copyright (C) October 2013 PrestaBrain.com <@emai:prestabrain@gmail.com>
 *               
 * @license   GNU General Public License version 2
*}

<!-- Block categories module -->
    {if $tree}
    <div id="categories_blog_menu" class="block blog-menu">
    	<h4 class="block_title hidden-md-down">
	  		{if isset($currentCategory)}{$currentCategory->title|escape:'html':'UTF-8'}{else}{l s='Blog Categories' d='Shop.Theme.Global'}{/if}
		</h4>
		<h4 class="block_title hidden-lg-up" data-target="#categories_blog_toggle" data-toggle="collapse">
			{if isset($currentCategory)}{$currentCategory->title|escape:'html':'UTF-8'}{else}{l s='Blog Categories' d='Shop.Theme.Global'}{/if}
      <span class="pull-xs-right">
      <span class="navbar-toggler collapse-icons">
          <i class="material-icons add">&#xE313;</i>
          <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
    </h4>
        <div id="categories_blog_toggle" class="block_content  collapse">
            {$tree nofilter}{* HTML form , no escape necessary *}
        </div>
    </div>
    {/if}
    <!-- /Block categories module -->
