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
            <?php echo get_avatar( $current_user->user_email, 100 ); ?>
            <?php echo the_author_meta( 'display_name', $user_id = false ); ?>
            <?php
            $user_name = get_the_author_meta( 'name');
            $user_vk = get_the_author_meta( 'vk');
            $current_user = wp_get_current_user(); // получили объект с данными текущего авторизованного пользователя
 
print_r ($current_user->display_name); // получим <p>Вы вошли как admin.</p>
//$user_skype = get_user_meta( $user_id, 'skype', true );
?>

<?php echo $user_name . ' - ' . $user_vk; ?>

            </div>
            <div class="page-section__content__editor">
                <?php the_content() ?>
            </div>
        </div>




    </div><!-- end of fixed-container -->

</section>

<?php get_footer() ?>