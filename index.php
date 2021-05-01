<?php get_header(); ?>
<!-- <div class="blog-fv mb20">
  <div class="box">
    <p class="big mb20">BLOG</p>
    <p class="">不定期更新のブログ記事です</p>
  </div>
  <div class="block"></div>
</div> -->

<div class="container">
<!--  <div class="inner">-->

    <div class="contents mb20">

      <?php if( is_category() ): ?>
      <h1 class="archive-title">
        <i class="fa fa-folder-open"></i>
        「<?php single_cat_title(); ?>」に関する記事
      </h1>
      <?php endif; ?>

      <?php if(is_month()): ?>
      <h1 class="archive-title">
        <i class="fa fa-clock-o"></i>
        <?php echo get_the_date( 'Y年n月' ); ?>に投稿した記事
      </h1>
      <?php endif; ?>


      <?php if(have_posts()): while(have_posts()):
the_post(); ?>

      <article class="mb40" <?php post_class(); ?>>

        <?php if( is_single() ): ?>
        <h1><?php the_title(); ?></h1>
        <?php else: ?>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php endif; ?>

        <div class="postinfo">
          <time datetime="<?php echo get_the_date( 'Y - m - d' ) ?>">
            <i class="fa fa-clock-o"></i>
            <?php echo get_the_date(); ?>
          </time>

          <span class="postcat">
            <i class="fa fa-folder-open"></i>
            <?php the_category( ', ' ); ?>
          </span>

        </div>


        <?php if( is_single() ): ?>

        <?php the_content(); ?>

        <?php else: ?>

        <div class="excerpt">

          <?php if( has_post_thumbnail() ): ?>
          <p><?php the_post_thumbnail( 'medium' ); ?></p>
          <?php endif; ?>

          <?php the_excerpt(); ?>

          <p class="pmore"><a href="<?php the_permalink(); ?>">more <i class="fa fa-chevron-right"></i></a></p>
        </div>

        <?php endif; ?>


        <?php if( is_single() ): ?>
        <div class="pagenav">
          <span class="old">
            <?php previous_post_link(
  '%link',
  '<i class="fa fa-chevron-circle-left"></i> %title'
  ); ?>
          </span>

          <span class="new">
            <?php next_post_link(
  '%link',
  '%title <i class="fa fa-chevron-circle-right"></i>'
  ); ?>
          </span>
        </div>
        <?php endif; ?>


      </article>

      <?php endwhile; endif; ?>


      <?php if( $wp_query->max_num_pages > 1 ): ?>
      <div class="pagenav">
        <span class="old">
          <?php next_posts_link( '<i class="fa fa-chevron-circle-left"></i> old' ); ?>
        </span>

        <span class="new">
          <?php previous_posts_link( 'new <i class="fa fa-chevron-circle-right"></i>' ); ?>
        </span>
      </div>
      <?php endif; ?>

    </div> <!-- contents -->


    <div class="blogmenu">
      <ul>
        <?php dynamic_sidebar(); ?>

      </ul>
    </div>

<!--  </div>-->
   <!-- inner -->
</div> <!-- page-wrap -->

<?php get_footer(); ?>
