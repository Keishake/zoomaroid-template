<?php get_header(); ?>
<main class="mdl-layout__content">
  <div class="blog-content">
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
    <section class="section--center mdl-shadow--2dp" id="post-<?php the_ID(); ?>">
      <div class="mdl-card__title mdl-color--primary-dark">
        <h4 class="mdl-card__title-text blog-entry-title">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
        </h4>
      </div>
      <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card__supporting-text">
          
          <?php $temp_arr_content = explode(" ",mb_substr(strip_tags(get_the_content()),0,290));
                $temp_arr_content[count($temp_arr_content)-1] = "";
                $display_arr_content = implode(" ",$temp_arr_content);
                echo $display_arr_content; ?>
                <?php if(strlen(strip_tags(get_the_content())) > 290) echo "..."; ?>
        </div>
         <div class="mdl-card__actions mdl-card--border">
           <div class="blog-meta mdl-color-text--grey-700">
            Date: <?php the_time('Y/n/j') ?>
            Cate: <?php the_category(', '); ?>
            Tags: <?php the_tags(' ', ', ', '&nbsp;'); ?>
            <?php edit_post_link('//edit'); ?>
          </div>
         </div>
        <?php comments_popup_link('', '1 msg', '% msgs'); ?>
      </div>
    </section>
    <?php endwhile; ?>
    <section class="section--center mdl-grid">
        <?php previous_posts_link('
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons">arrow_back</i>
          </button>
          Newer
        ') ?>
        <div class="mdl-layout-spacer"></div>
        <?php next_posts_link('
          Older
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons">arrow_forward</i>
          </button>
        ') ?>
    </section>
    <?php endif; ?>
  </div>
  <?php get_footer(); ?>
</main>

