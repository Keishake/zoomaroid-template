<?php get_header(); ?>
<main class="mdl-layout__content">
  <div class="blog-content">
    <div class="ads mdl-layout--large-screen-only">
      <!-- shakezoomer.com -->
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
           style="display:inline-block;width:728px;height:90px"
           data-ad-client="ca-pub-5887690717200366"
           data-ad-slot="8802075739"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
    <section class="section--center mdl-shadow--2dp blog-post" id="post-<?php the_ID(); ?>">
      <div class="mdl-card__title mdl-color--primary-dark">
        <h4 class="mdl-card__title-text blog-entry-title">
          <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
        </h4>
      </div>
      <div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
        <div class="mdl-card__supporting-text">
          <div class="blog-meta mdl-color-text--grey-700">
            Date: <?php the_time('Y/n/j') ?>
            Cate: <?php the_category(', '); ?>
            Tags: <?php the_tags(' ', ', ', '&nbsp;'); ?>
            <?php edit_post_link('//edit'); ?>
          </div>
          <?php the_content('more))'); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <div class="mdl-color-text--primary-contrast comments">
        <?php comments_template(); ?>
      </div>
    </section>
    <div class="ads-responsive">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <!-- shakezoomer.comレスポンシブ -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-5887690717200366"
           data-ad-slot="6853833735"
           data-ad-format="auto"></ins>
      <script>
      (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
    </div>
  </div>
  <?php get_footer(); ?>
</main>
</div>
</body>
</html>
