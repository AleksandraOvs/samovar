<?php get_header() ?>

<div class="fixed-container">
    <?php
    $args = array(
         'posts_per_page' => -1, 
        'orderby' => 'date',
        //'category_name' => 'team', 
    );
    $postsArr = get_posts($args);
    $chunkPosts = array_chunk($postsArr, 4);
    $count = 1;
    if (is_sticky()){
        get_template_part('entry', 'large');
    }else {
        if ($count ==1 ){
            echo '<div class="row items-grid">';
        }
        get_template_part('entry');
        $count++;
    }

    if ($count > 1) {
        echo '</div>';
    }

    ?>
    
    <div class="container-items-grid">
    <?php

    foreach ($chunkPosts as $posts) {

        
        echo '<div class="row items-grid">';
        foreach ($posts as $post) {
    ?>
            <?php get_template_part('entry'); ?>
    <?php
        }
        echo '</div>';
    }
    ?>
    </div>
</div>
<?php get_footer() ?>