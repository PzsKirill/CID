<section class="home-page__section">
  <div class="container">
      <div class="hompage__container">
        <div class="home__info">
          <div class="info__block">
            <div class="info__images">
              <?php
                $image = get_field('image-one');

                if( !empty($image) ): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
            </div>
            <div class="info__text">
              <?php the_field('text-one'); ?>
            </div>
          </div>
          <div class="info__block">
            <div class="info__images">  
              <?php
                $image = get_field('image-two');

                if( !empty($image) ): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
            </div>
            <div class="info__text">
              <?php the_field('text-two'); ?>
            </div>
          </div>
        </div>
        <div class="home-center__container">
          <div class="home__title">
            <?php the_field('info-title__name'); ?>
          </div>
          <div class="home__text">
            <?php the_field('info-title__text'); ?>
          </div>
        </div>
        <div class="home__info">
          <div class="info__block">
            <div class="info__images">
              <?php
                $image = get_field('image-three');

                if( !empty($image) ): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
            </div>
            <div class="info__text">
              <?php the_field('text-three'); ?>
            </div>
          </div>
          <div class="info__block">
            <div class="info__images">
              <?php
                $image = get_field('image-forth');

                if( !empty($image) ): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>                                       
            </div>
            <div class="info__text">
              <?php the_field('text-forth'); ?>
            </div>
          </div>
        </div>
        <div class="home__info home__info-slider">
          <div class="info__block">
            <div class="info__images">
              <?php
                $image = get_field('image-one');

                if( !empty($image) ): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>           
            </div>
            <div class="info__text">
              <?php the_field('text-one'); ?>
            </div>
          </div>
          <div class="info__block">
            <div class="info__images">
              <?php
                $image = get_field('image-two');

                if( !empty($image) ): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>                      
            </div>
            <div class="info__text">
              <?php the_field('text-two'); ?>
            </div>
          </div>
          <div class="info__block">
            <div class="info__images">
              <?php
                $image = get_field('image-three');

                if( !empty($image) ): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>   
            </div>
            <div class="info__text">
              <?php the_field('text-three'); ?>
            </div>
          </div>
          <div class="info__block">
            <div class="info__images">
              <?php
                $image = get_field('image-forth');

                if( !empty($image) ): ?>

                  <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>                                           
            </div>
            <div class="info__text">
              <?php the_field('text-forth'); ?>  
            </div>
          </div>
        </div>
      </div>
  </div>
</section>