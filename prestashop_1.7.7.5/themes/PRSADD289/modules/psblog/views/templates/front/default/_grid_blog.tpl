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

<article class="blog-item">
	{if $blog.image && $config->get('listing_show_image',1)}
		<div class="blog-image">
			<img src="{$blog.preview_url|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" alt="" class="img-fluid" />
			<span class="blogicons">
							<a title="Click to view Full Image" href="{$blog.preview_url|escape:'html':'UTF-8'}" data-lightbox="example-set" class="icon zoom"></a> 
							<a title="Click to view Read More" href="{$blog.link|escape:'html':'UTF-8'}" class="icon readmore_link"></a>
							</span>
		</div>
	{/if}

	<div class="blog-content-wrap">
		{if $config->get('listing_show_title','1')}
			<!-- <h4 class="title"><a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|escape:'html':'UTF-8'}</a></h4> -->
		{/if}

		<div class="blog-meta">
			{if $config->get('listing_show_title','1')}
			<h4 class="title"><a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}">{$blog.title|escape:'html':'UTF-8'}</a></h4>
		{/if}
			{if $config->get('listing_show_author','1')&&!empty($blog.author)}
			<span class="blog-author">
				<i class="fa fa-user"></i>{l s='Posted By' d='Shop.Theme.Global'}: 
				<a href="{$blog.author_link|escape:'html':'UTF-8'}" title="{$blog.author|escape:'html':'UTF-8'}">{$blog.author|escape:'html':'UTF-8'}</a> 
			</span>
			{/if}
			
			{if $config->get('listing_show_category','1')}
			<span class="blog-cat"> 
				<i class="fa fa-list"></i>{l s='In' d='Shop.Theme.Global'}: 
				<a href="{$blog.category_link|escape:'html':'UTF-8'}" title="{$blog.category_title|escape:'html':'UTF-8'}">{$blog.category_title|escape:'html':'UTF-8'}</a>
			</span>
			{/if}
			
			{if $config->get('listing_show_created','1')}
			<span class="blog-created">
				<i class="fa fa-calendar"></i>{l s='On' d='Shop.Theme.Global'}: 
				<time class="date" datetime="{strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8'}">
					{l s=strtotime($blog.date_add)|date_format:"%A"|escape:'html':'UTF-8' d='Shop.Theme.Global'},	<!-- day of week -->
					{l s=strtotime($blog.date_add)|date_format:"%B"|escape:'html':'UTF-8' d='Shop.Theme.Global'}		<!-- month-->
					{l s=strtotime($blog.date_add)|date_format:"%e"|escape:'html':'UTF-8' d='Shop.Theme.Global'},	<!-- day of month -->
					{l s=strtotime($blog.date_add)|date_format:"%Y"|escape:'html':'UTF-8' d='Shop.Theme.Global'}		<!-- year -->
				</time>
			</span>
			{/if}
			
			{if isset($blog.comment_count)&&$config->get('listing_show_counter','1')}	
			<span class="blog-ctncomment">
				<i class="fa fa-comments-o"></i> {l s='Comment' d='Shop.Theme.Global'}:
				{$blog.comment_count|intval}
			</span>
			{/if}

			{if $config->get('listing_show_hit','1')}	
			<span class="blog-hit">
				<i class="fa fa-heart"></i>{l s='Hit' d='Shop.Theme.Global'}: 
				{$blog.hits|intval}
			</span>
			{/if}
		</div>

	<div class="blog-content-wrap">
		

		<div class="blog-shortinfo">
			{if $config->get('listing_show_description','1')}
			{$blog.description|strip_tags:'UTF-8'|truncate:160:'...' nofilter}{* HTML form , no escape necessary *}
			{/if}
			{if $config->get('listing_show_readmore',1)}
				<div class="readmore">
					<p>
						<a href="{$blog.link|escape:'html':'UTF-8'}" title="{$blog.title|escape:'html':'UTF-8'}" class="btn btn-primary">{l s='Read more' d='Shop.Theme.Global'}</a>
					</p>
				</div>
			{/if}
		</div>

	</div>

</article>
	
<!---
	Translation Day of Week - NOT REMOVE
	{l s='Sunday' d='Shop.Theme.Global'}
	{l s='Monday' d='Shop.Theme.Global'}
	{l s='Tuesday' d='Shop.Theme.Global'}
	{l s='Wednesday' d='Shop.Theme.Global'}
	{l s='Thursday' d='Shop.Theme.Global'}
	{l s='Friday' d='Shop.Theme.Global'}
	{l s='Saturday' d='Shop.Theme.Global'}
-->
<!---
	Translation Month - NOT REMOVE
		{l s='January' d='Shop.Theme.Global'}
		{l s='February' d='Shop.Theme.Global'}
		{l s='March' d='Shop.Theme.Global'}
		{l s='April' d='Shop.Theme.Global'}
		{l s='May' d='Shop.Theme.Global'}
		{l s='June' d='Shop.Theme.Global'}
		{l s='July' d='Shop.Theme.Global'}
		{l s='August' d='Shop.Theme.Global'}
		{l s='September' d='Shop.Theme.Global'}
		{l s='October' d='Shop.Theme.Global'}
		{l s='November' d='Shop.Theme.Global'}
		{l s='December' d='Shop.Theme.Global'}
-->