 <!-- large post -->
 <article <?php post_class('entry-item large-post') ?>>

   <div class="entry-left">
     <div class="entry-left__head">
       <div class="entry-category"><?php the_category(); ?></div>
       <p class="post-time"><?php
                            $format = 'j F Y';
                            echo get_the_date($format); ?></p>
     </div>
     <h2 class="entry-title">
       <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
     </h2>

   </div>

   <div class="entry-right">

     <?php the_excerpt(); ?>
     <a class="button black-fill read-more" href="<?php the_permalink() ?>">Читать</a>

   </div>


 </article> <!-- end large post -->