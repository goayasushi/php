<?php get_header(); ?>

	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

        <?php if (function_exists('bcn_display')) : ?>
          <!-- breadcrumb -->
          <div class="breadcrumb">
            <?php bcn_display(); ?>
          </div><!-- /breadcrumb -->
        <?php endif; ?>

        <?php if (have_posts()):?>
					<?php while(have_posts()): ?>
           <?php the_post(); ?>
      	  <!-- entry -->
          <article class="entry">

            <!-- entry-header -->
            <div class="entry-header">
              <?php 
              $category = get_the_category();
              if($category[0]): ?>
                <div class="entry-label"><a href="<?php echo get_category_link($category[0]->term_id); ?>"><?php echo $category[0]->cat_name; ?></a></div><!-- /entry-item-tag -->
              <?php endif; ?>

              <h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->

              <!-- entry-meta -->
              <div class="entry-meta">
                <time class="entry-published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('y/n/j'); ?></time>
                <?php if(get_the_modified_time('c') !== get_the_time('c')): ?>
                  <time class="entry-updated" datetime="<?php the_modified_time('c'); ?>">最終更新日 <?php the_modified_time('y/n/j'); ?></time>
                <?php endif; ?>
              </div><!-- /entry-meta -->

              <!-- entry-img -->
              <div class="entry-img">
                <?php if(has_post_thumbnail()): ?>
                  <?php the_post_thumbnail(); ?>
                <?php else: ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                <?php endif; ?>
              </div><!-- /entry-img -->

            </div><!-- /entry-header -->

            <!-- entry-body -->
            <div class="entry-body">
              <?php the_content(); ?>
              <?php 
                wp_link_pages(
                  array(
                    'before' => '<nav class="entry-links">',
                    'after' => '</nav>',
                    'link_before' => '',
                    'link_after' => '',
                    'next_or_number' => 'number',
                    'separator' => '',
                  )
                );
              ?>
            </div><!-- /entry-body -->

            <?php $post_tags = get_the_tags(); ?>
            <div class="entry-tag-items">
              <div class="entry-tag-head">タグ</div><!-- /entry-tag-head -->
              <?php if($post_tags): ?>
                <?php foreach($post_tags as $tags): ?>
                  <div class="entry-tag-item"><a href="<?php echo get_tag_link($tags->term_id); ?>"><?php echo $tags->name; ?></a></div><!-- /entry-tag-item -->
                <?php endforeach; ?>
              <?php endif; ?>
            </div><!-- /entry-tag-items -->


            <div class="entry-related">
              <div class="related-title">関連記事</div>

              <div class="related-items">
                <?php if(has_category()) {
                  $categories = get_the_category();
                  $category_ID = array();
                  foreach($categories as $category):
                    array_push($category_ID, $category->term_id);
                  endforeach;
                }
                  $args = array(
                    'post__not_in' => array($post -> ID),
                    'posts_per_page'=> 8,
                    'category__in' => $category_ID,
                    'orderby' => 'rand',
                  );
                  $query = get_posts($args); 
                ?>

                <?php if($query): ?>
                  <?php foreach($query as $post): setup_postdata($post);?>
                      <a class="related-item" href="">
                        <div class="related-item-img">
                          <?php if(has_post_thumbnail()): ?>
                            <?php the_post_thumbnail(); ?>
                          <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
                          <?php endif; ?>
                        </div><!-- /related-item-img -->
                        <div class="related-item-title"><?php the_title(); ?></div><!-- /related-item-title -->
                      </a><!-- /related-item -->
                  <?php endforeach; wp_reset_postdata();?>
                <?php endif; ?>

              </div><!-- /related-items -->
            </div><!-- /entry-related -->

          </article> <!-- /entry -->
        <?php endwhile; ?>
			<?php endif; ?>
			</main><!-- /primary -->

<?php get_sidebar(); ?>

		</div><!-- /inner -->
	</div><!-- /content -->

  <?php get_footer(); ?>