<?php get_header() ?>

<section class="page-section">
    <div class="fixed-container">
        <div class="page-section__header">
            <div class="page-section__header__info">
                <!-- <div class="fixed-container">
                    <ul class="breadcrumbs__list">
                        <?php //echo true_breadcrumbs(); 
                        ?>
                    </ul>
                </div> -->
                <?php
                $categories = get_the_category();
                if ($categories) {
                    echo '<ul class="entry-category">';
                    foreach ($categories as $category) {
                        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a></li>';
                    }
                    echo '</ul>';
                }
                ?>

                <p class="post-time"><?php
                                        $format = 'j F Y';
                                        echo get_the_date($format); ?>
                </p>
            </div>

            <h2 class="page-section__header__title">
                <?php the_title() ?>
            </h2>

        </div><!-- end of page-section__header -->

        <div class="page-section__thumbnail">
            <?php
            if (has_post_thumbnail()) { // условие, если есть миниатюра
                the_post_thumbnail('full'); // если параметры функции не указаны, то выводится миниатюра текущего поста, размер thumbnail
            } else {
                echo '<img src="' . get_stylesheet_directory_uri() . '/images/default-pic.jpg" />'; // изображение по умолчанию, если миниатюра не установлена
            }
            ?>
        </div>

        <div class="page-section__content">
            <div class="page-section__content__autor">

            <?php echo get_avatar( get_the_author_meta('ID'), 100, '', '', array('class' => 'author-img')) ?>
            <h6 class="author-name"><?php echo the_author_meta('display_name')?></h6>

            <?php if ($tg = get_the_author_meta('telegram') ): ?>  
                      <a href="<?php echo $tg ?>">Telegram-канал</a>
                      <?php endif; ?>

                      <?php if ($vk = get_the_author_meta('vk') ): ?>  
                      <a href="<?php echo $vk ?>">Вконтакте</a>
                      <?php endif; ?>
            </div>
            <div class="page-section__content__editor">
                <?php the_content() ?>
            </div>
        </div>




    </div><!-- end of fixed-container -->

</section>

<?php get_footer() ?>