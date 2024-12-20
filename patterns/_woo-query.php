<?php
/**
 * Title: Archive WooCommerce Products Query
 * Slug: woo-query
 * tags: tfa-patterns-main
 * Categories: woo-query
 * Block Types: core/query
 */
if( function_exists('is_shop') ) :
?>
<!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
<!-- wp:group {"className":"alignwide woo-filter","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide woo-filter">
	<!-- wp:group {"className":"hidden"} --><div class="wp-block-group hidden"><!-- wp:woocommerce/product-categories {"isDropdown":true} /--><!-- wp:woocommerce/product-results-count /--></div><!-- /wp:group -->
	<!-- wp:woocommerce/catalog-sorting /-->
	<?php if( !is_product_category() && !is_product_taxonomy() ) { ?><!-- wp:shortcode -->[fe_widget][fe_chips]<!-- /wp:shortcode --><?php } ?>
</div>
<!-- /wp:group -->
<!-- wp:query {"queryId":0,"query":{"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[],"perPage":9999},"className":"alignwide wp-block-woocommerce-product-collection","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide wp-block-woocommerce-product-collection">
	<!-- wp:woocommerce/product-template {"layout":{"type":"grid","columnCount":2}} -->
		<div class="faux-link__element">
			<!-- wp:woocommerce/product-sale-badge {"isDescendentOfQueryLoop":true} /-->
			<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"className":"h3","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->
			<!-- wp:post-terms {"term":"product_tag","className":"above-faux"} /-->
			<!-- wp:post-excerpt {"showMoreOnNewLine":false,"__woocommerceNamespace":"woocommerce/product-collection/product-summary"} /-->
			<span class="more">More details</span>
			<!-- wp:woocommerce/product-image {"showProductLink":false,"isDescendentOfSingleProductBlock":true,"width":"100px"} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
			<!-- wp:post-terms {"term":"product_cat","className":"above-faux","prefix":"Type: "} /-->
			<!-- wp:woocommerce/product-sku {"isDescendentOfQueryLoop":true} /-->
			<!-- wp:woocommerce/product-stock-indicator {"isDescendentOfQueryLoop":true} /-->
			<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true} /-->
			<div class="cover-icons"><!-- wp:tfa/inc-serv-block /--></div>
			<!-- wp:group {"className":"hidden"} -->
			<div class="wp-block-group hidden">
				<!-- wp:shortcode -->[prod-attr attribute="needs"]<!-- /wp:shortcode -->
				<!-- wp:woocommerce/product-sku {"isDescendentOfQueryLoop":true} /-->
				<!-- wp:woocommerce/product-stock-indicator {"isDescendentOfQueryLoop":true} /-->
				<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:read-more {"content":" ","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"faux-link__overlay-link"} /-->
		</div>
	<!-- /wp:woocommerce/product-template -->
	<!-- wp:spacer {"height":"40"} --><div style="height:40" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
		<!-- wp:query-pagination-previous /--><!-- wp:query-pagination-numbers /--><!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
	<!-- wp:query-no-results -->
	<!-- wp:paragraph --><p class="h3" style="padding:100px 15px;margin:0 auto;max-width:fit-content">No products were found matching your selection.</p><!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
<!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
<?php endif; ?>