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
                <div class="page-section__content__autor__summary">
                    <?php
                if ($autor_photo_id = carbon_get_post_meta(get_the_ID(), 'crb_autor_img')) {
                ?>
                    <div class="page-section__content__autor__photo">
                        <?php
                        $autor_photo_url = wp_get_attachment_image_url($autor_photo_id, 'full');
                        ?>
                        <img src="<?php echo $autor_photo_url; ?>" alt="">

                    </div>

                <?php
                }
                ?>

                <?php

                if ($autor_photo_id = carbon_get_post_meta(get_the_ID(), 'crb_autor_name')) {
                ?>
                <div class="autor-meta">
                     <h5 class="autor-meta"><?php echo $autor_photo_id; ?></h5>
                    <?php
                    if ($autor_about = carbon_get_post_meta(get_the_ID(), 'crb_autor_about')) {
                        echo '<p class="autor-about">' . $autor_about . '</p>';
                    }
                    ?>
                </div>
                   
                <?php
                }
                ?>
                </div>
                

                <?php
                if ($coautors = carbon_get_post_meta(get_the_ID(), 'crb_coautors_titles')) {
                    ?>
                    <ul class="coautors-titles">
                        <?php
                            foreach ($coautors as $coautor){
                                ?>
                                <li>
                                    <span class="coautor-type"><?php  echo $coautor[ 'crb_coautor_titles_head']; ?></span>:
                                    <span class="coautor-name">
                                    <?php  echo $coautor[ 'crb_coautor_contacts_name']; ?>
                                    </span>
                                </li>
                                   
                                <?php
                            }
                        ?>
                    </ul>
                    <?php
                }
                ?>

                <?php
                if ($messengers = carbon_get_post_meta(get_the_ID(), 'crb_autor_contacts')) {
                ?>
                    <ul class="page-section__content__autor__contacts">
                        <?php
                        foreach ($messengers as $messenger) {
                        ?>
                            <li class="autor-contacts__item">
                                <a href="<?php echo $messenger['crb_autor_contacts_link']; ?>">
                                    <?php echo 
                                    $messenger ['crb_autor_contacts_messenger']
                                    ?>
                                </a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
                <?php
                }
                ?>


            </div>
            <div class="page-section__content__editor">
                <?php the_content() ?>
            </div>
        </div>




    </div><!-- end of fixed-container -->

</section>

<?php get_footer() ?>