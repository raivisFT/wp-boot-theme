<?php
	/**
	 * Title: Blog Sidebar
	 * Slug: blog-sidebar
	 * tags: tfa-patterns-main
	 */
?>
<div class="wp-block-tfa-blog-sidebar--wrap">
		<div class="h5 wp-block-tfa-blog-sidebar--title">Recent Posts</div>
		<!-- wp:latest-posts {"postsToShow":3,"displayPostDate":true} /-->
		<div class="h5 wp-block-tfa-blog-sidebar--title">Categories</div>
		<div class="wp-block-tfa-blog-sidebar--tag-list wp-block-tfa-blog-sidebar--tag-list--categories"><!-- wp:tag-cloud {"numberOfTags":100,"taxonomy":"category","showTagCounts":true,"smallestFontSize":"14px","largestFontSize":"14px"} /--></div>
		<div class="h5 wp-block-tfa-blog-sidebar--title">Tags</div>
		<div class="wp-block-tfa-blog-sidebar--tag-list wp-block-tfa-blog-sidebar--tag-list--tags"><!-- wp:tag-cloud {"numberOfTags":100,"showTagCounts":true,"smallestFontSize":"14px","largestFontSize":"14px"} /--></div>
</div>