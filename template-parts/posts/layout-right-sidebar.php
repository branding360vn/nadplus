<?php
/**
 * Posts layout right sidebar.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

do_action('flatsome_before_blog');
?>

<?php if(!is_single() && flatsome_option('blog_featured') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<div class="row row-large <?php if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?>" style="padding-bottom: 30px">

	<div class="breadcrumb-wrapper">
		<?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <p id="breadcrumbs">','</p>
            ');
            }
        ?>
    </div>

	<div class="large-9 col blog-box-layout-360">
		<div style="padding-top: 20px"></div>
		<?php if(!is_single() && flatsome_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
		<?php
			if(is_single()){
				get_template_part( 'template-parts/posts/single');
			} elseif(flatsome_option('blog_style_archive') && (is_archive() || is_search())){
				get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style_archive') );
			} else {
				get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style') );
			}
		?>
		<div class="comment-box-360">
			<?php comments_template() ?>
		</div>
		<div class="related-post-360">
			<?php echo do_shortcode('[related_cat]') ?>
		</div>
	</div>

	<div class="space-blog-layout"></div>

	<div class="post-sidebar large-3 col blog-box-layout-360 border-left-sidebar hidden-on-small">
		<div style="padding-top: 20px"></div>
		<?php flatsome_sticky_column_open( 'blog_sticky_sidebar' ); ?>
		<?php get_sidebar(); ?>
		<?php flatsome_sticky_column_close( 'blog_sticky_sidebar' ); ?>
	</div>
</div>

<?php
	do_action('flatsome_after_blog');
?>
