<?php
/**
 * Title: Single WooCommerce Products Related Category Query
 * Slug: woo-related-cat-query
 * tags: tfa-patterns-main
 * Categories: woo-related-cat-query
 * Block Types: core/query
 */
if( function_exists('is_shop') ) :
?>
<!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
<!-- wp:heading --><h3 class="wp-block-heading">Related Category Products</h3><!-- /wp:heading -->
<!-- wp:spacer --><div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
<!-- wp:query {"queryId":3,"query":{"perPage":"100","pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"product_cat":[51,58,59,60,61]},"parents":[]},"enhancedPagination":true,"layout":{"type":"default"}} -->
<div class="wp-block-query wc-block-woo-related-cat-query">
	<!-- wp:woocommerce/product-template -->
		<div class="faux-link__element">
			<!-- wp:post-title {"textAlign":"left","level":4,"isLink":true,"className":"h4"} /-->
			<!-- wp:post-terms {"term":"product_tag","className":"above-faux"} /-->
			<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontSize":"small","style":{"spacing":{"margin":{"bottom":"1rem"}}}} /-->
			<div class="cover-icons"><!-- wp:tfa/inc-serv-block /--></div>
			<!-- wp:read-more {"content":" ","style":{"elements":{"link":{"color":{"text":"var:preset|color|orange"}}}},"textColor":"orange","className":"faux-link__overlay-link"} /-->
		</div>
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
<!-- wp:spacer --><div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
<style>.wc-block-product-template{grid-template-columns: auto !important;}</style>
<?php endif; ?>