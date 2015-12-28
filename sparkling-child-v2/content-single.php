<?php
/**
 * @package sparkling
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!-- 
	<?php if ( function_exists('yoast_breadcrumb') ) 
{yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
-->
	<!-- <?php // the_post_thumbnail( 'sparkling-featured', array( 'class' => 'single-featured' )); ?> -->
 	
 	<?php
	// $thumb = get_the_post_thumbnail($post_id, 'sparkling-featured', array( 'class' => 'single-featured' ));
	$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'sparkling-featured' );
	//echo $large_image_url;
	$url = $large_image_url[0];
		 	$image = array(
				'src' => $url,
				'alt' => ''
			);
		 	
			$formats = array(
				array("media"=>"" ,"query"=>"w400-p0","fallback"=>true),
				array("media"=>"(min-width:300px) and (min-device-pixel-ratio:2)" ,"query"=>"w800-q60-p1"),
				array("media"=>"(min-width:420px) and (max-width:767px)" ,"query"=>"w717-p1-q80"),
				array("media"=>"(min-width:420px) and and (max-width:767px) and (min-device-pixel-ratio:2)" ,"query"=>"w2868-p1-q90"),
				array("media"=>"(min-width:767px) and (max-width:991px)" ,"query"=>"w720-p1-q80"),
				array("media"=>"(min-width:767px) and (max-width:991px) and (min-device-pixel-ratio:2)","query"=>"w2880-p1-q90"),
				array("media"=>"(min-width:991px) and (max-width:1200px)","query"=>"w617-p1-q80"),
				array("media"=>"(min-width:991px) and (max-width:1200px) and (min-device-pixel-ratio:2)","query"=>"w2468-p1-q90"),
				array("media"=>"(min-width:1200px)","query"=>"w750-p1-q80"),
				array("media"=>"(min-width:1200px) and (min-device-pixel-ratio:2)","query"=>"w3000-p1-q90",),
			);
			
			echo RIP::get_picture($image,$formats);
		?>
	<div class="post-inner-content">
		<header class="entry-header page-header">
			<div class="entry-meta">

				<?php sparkling_posted_on(); ?>
				
				<?php
					/* translators: used between list items, there is a space after the comma */
					$categories_list = get_the_category_list( __( ', ', 'sparkling' ) );
					$categorieees = get_the_category();

					//$categories_list = array_diff($categories_lis, array("Featured post"));
					if ( $categories_list && sparkling_categorized_blog() ) :			
					?>
				<!-- – <span class="cat-links"> -->
					<?php
					$separator = ', ';
					$output = '';
					if($categorieees){
						foreach($categorieees as $category) {
							if ($category->name != "Featured post") {
								$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
							}
						}
					//echo trim($output, $separator);
					}
					// printf( __( ' %1$s', 'sparkling' ), $categories_list ); 
					?>
				</span>
				<?php endif; // End if categories ?>
				<?php edit_post_link( __( 'Edit', 'sparkling' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>

			</div><!-- .entry-meta -->
			<h1 class="entry-title "><?php the_title(); ?></h1>

			
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before'            => '<div class="page-links">'.__( 'Pages:', 'sparkling' ),
					'after'             => '</div>',
					'link_before'       => '<span>',
					'link_after'        => '</span>',
					'pagelink'          => '%',
					'echo'              => 1
	       		) );
	    	?>
	    	
		</div><!-- .entry-content -->

		<footer class="entry-meta">

	    	<?php if(has_tag()) : ?>
	      <!-- tags -->
	      <div class="tagcloud">

	          <?php
	              $tags = get_the_tags(get_the_ID());
	              foreach($tags as $tag){
	                  echo '<a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a> ';
	              } ?>

	      </div>
	      <!-- end tags -->
	      <?php endif; ?>

		</footer><!-- .entry-meta -->
	</div>
				<div class="post-inner-content secondary-content-box">
	        <!-- author bio -->
	        <div class="author-bio content-box-inner">

	          <!-- avatar -->
	          <div class="avatar">
	              <?php echo get_avatar(get_the_author_meta('ID') , '60'); ?>
	          </div>
	          <!-- end avatar -->

	          <!-- user bio -->
	          <div class="author-bio-content">

	            <h4 class="author-name"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_the_author_meta('display_name'); ?></a></h4>
	            <p class="author-description">
	                <?php echo get_the_author_meta('description'); ?>
	            </p>

	          </div>
	          <!-- end author bio -->

	        </div>
	        <!-- end author bio -->
			</div>
</article><!-- #post-## -->