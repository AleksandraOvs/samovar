<!-- <div <?php //post_class('entry-post')?>> -->
            <article class="entry-item">
             
            <?php if(has_post_thumbnail()) : ?>
             
                <div class="entry-img">
                  <?php the_post_thumbnail('mediumpic'); ?>
              </div>
             
            <?php endif; ?>
         
            <div class="entry-item-content">
                <div class="entry-category">
                  <?php the_category();?>
                </div>
                
                <a href="<?php the_permalink() ?>" class="entry-item-content__bottom">
                  <h3 class="entry-item-content__bottom__title"><?php the_title() ?></h3>
                  <p class="post-time"><?php
                            $format = 'j F Y';
                            echo get_the_date($format); ?></p>
                </a>


            </div>
          
            </article>
          <!-- </div> -->