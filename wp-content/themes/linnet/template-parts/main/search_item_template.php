<div class="h-column h-column-container d-flex h-col-lg-6 h-col-md-12 h-col-12  masonry-item style-138-outer style-local-1851-m3-outer">
  <div data-colibri-id="1851-m3" class="d-flex h-flex-basis h-column__inner h-px-lg-3 h-px-md-3 h-px-3 v-inner-lg-3 v-inner-md-3 v-inner-3 style-138 style-local-1851-m3 position-relative">
    <div class="w-100 h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
      <div data-colibri-id="1851-m4" class="h-blog-title style-311 style-local-1851-m4 position-relative h-element">
        <div class="h-global-transition-all">
          <?php linnet_post_title(array (
            'heading_type' => 'h4',
            'classes' => 'colibri-word-wrap',
          )); ?>
        </div>
      </div>
      <?php if ( \ColibriWP\Theme\Core\Hooks::prefixed_apply_filters( 'show_post_meta', true ) ): ?>
      <div data-colibri-id="1851-m5" class="h-blog-meta style-315 style-local-1851-m5 position-relative h-element">
        <div name="1" class="metadata-item">
          <span class="metadata-prefix">
            <?php esc_html_e('by','linnet'); ?>
          </span>
          <a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) )); ?>">
            <?php echo esc_html(get_the_author_meta( 'display_name', get_the_author_meta( 'ID' ) )); ?>
          </a>
        </div>
        <div name="2" class="metadata-item">
          <span class="metadata-prefix">
            <?php esc_html_e('on','linnet'); ?>
          </span>
          <a href="<?php linnet_post_meta_date_url(); ?>">
            <?php linnet_the_date('F j, Y'); ?>
          </a>
        </div>
      </div>
      <?php endif; ?>
      <div data-colibri-id="1851-m6" class="style-312 style-local-1851-m6 position-relative h-element">
        <div class="h-global-transition-all">
          <?php linnet_post_excerpt(array (
            'max_length' => 20,
          )); ?>
        </div>
      </div>
      <div data-colibri-id="1851-m7" class="h-x-container style-145 style-local-1851-m7 position-relative h-element">
        <div class="h-x-container-inner style-dynamic-1851-m7-group">
          <span class="h-button__outer style-318-outer style-local-1851-m8-outer d-inline-flex h-element">
            <a h-use-smooth-scroll="true" href="<?php the_permalink(); ?>" data-colibri-id="1851-m8" class="d-flex w-100 align-items-center h-button justify-content-lg-center justify-content-md-center justify-content-center style-318 style-local-1851-m8 position-relative">
              <span>
                <?php esc_html_e('read more','linnet'); ?>
              </span>
              <span class="h-svg-icon h-button__icon style-318-icon style-local-1851-m8-icon">
                <!--Icon by Icons8 Line Awesome (https://icons8.com/line-awesome)-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="arrow-right" viewBox="0 0 512 545.5">
                  <path d="M299.5 140.5l136 136 11 11.5-11 11.5-136 136-23-23L385 304H64v-32h321L276.5 163.5z"></path>
                </svg>
              </span>
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
