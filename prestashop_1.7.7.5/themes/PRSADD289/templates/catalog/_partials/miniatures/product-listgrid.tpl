{**
 * 2007-2016 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2016 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 
<div class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
<div class="row">
  <div class="thumbnail-container">
    {block name='product_thumbnail'}
        {if $product.cover}
      <a href="{$product.url}" class="thumbnail product-thumbnail">

	      
	    {if count($product.images) > 1 }
        <img
	       class="img_main lazyload"
          data-src = "{$product.cover.bySize.home_default.url}"
            alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
          data-full-size-image-url = "{$product.cover.large.url}"
        >
        {hook h="displayTmHoverImage" id_product=$product.id_product home='home_default' large='large_default'}
       {else}
         <img class="second_main lazyload"
          data-src = "{$product.cover.bySize.home_default.url}"
              alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:30:'...'}{/if}"
          data-full-size-image-url = "{$product.cover.large.url}"

        >
        {/if}
      </a>
        {else}
          <a href="{$product.url}" class="thumbnail product-thumbnail">
            <img
              class="lazyload"
              data-src = "{$urls.no_picture_image.bySize.home_default.url}"
            >
          </a>
            {/if}
	{/block}

          	{block name='product_flags'}
	  <ul class="product-flags">
		{foreach from=$product.flags item=flag}
		  <li class="{$flag.type}">{$flag.label}</li>
		{/foreach}
	  </ul>
	{/block}

  {if $product.discount_type === 'percentage'}
    <span class="discount-percentage">{$product.discount_percentage}</span>
  {/if} 



 </div>
    <div class="product-description">

     {block name='product_reviews'}
        {hook h='displayProductListReviews' product=$product}
      {/block}
      
      {block name='product_name'}
        <h3 class="h3 product-title" itemprop="name"><a href="{$product.url}">{$product.name|truncate:30:'...'}</a></h3>
      {/block}
      {block name='product_price_and_shipping'}
        {if $product.show_price}
          <div class="product-price-and-shipping">
           <span itemprop="price" class="price">{$product.price}</span>
           
            {if $product.has_discount}
              {hook h='displayProductPriceBlock' product=$product type="old_price"}
               <span>/</span> <span class="regular-price">{$product.regular_price}</span>
            {/if}

            {hook h='displayProductPriceBlock' product=$product type="before_price"}
            {hook h='displayProductPriceBlock' product=$product type='unit_price'}
            {hook h='displayProductPriceBlock' product=$product type='weight'}
          </div>
        {/if}
      {/block}
    	
		{block name='product_description_short'}
		  <div class="product-detail" itemprop="description">{$product.description_short nofilter}</div>
		{/block}

 {if $product.main_variants}
		<div class="highlighted-informations{if !$product.main_variants} no-variants{/if} hidden-sm-down">
	
		  {block name='product_variants'}
			
			  {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
			
		  {/block}
		</div>
    {/if}
           
    <div class="product-actions-main">
      <a href="{$product.url}" class="btn btn-primary add-to-cart">
        
      </a>

<a href="#" class="quick-view" data-link-action="quickview">
    
  </a> 

  {hook h='displaystCompareButton' product=$product }

            {hook h='displaystWishlistButton' product=$product}

    </div>
                            
	</div>
</div>
</div>