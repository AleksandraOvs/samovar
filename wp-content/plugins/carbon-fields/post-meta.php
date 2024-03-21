<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;



// Container::make('post_meta', 'Видео')
 
// ->show_on_template('services-template.php')
// ->add_fields (array (

//     Field::make( 'media_gallery', 'crb_media_gallery' )
//     ->set_type( array( 'image', 'video' ) )
    
        
// ));

Container::make('post_meta', 'Информация об авторе')
            ->show_on_post_type('post')
            ->add_fields (array (
               Field::make('image', 'crb_autor_img', 'Фото')
               ->set_width(15),
               Field::make('text', 'crb_autor_name', 'Имя / Фамилия')
               ->set_width(30),
               Field::make('text', 'crb_autor_about', 'Об авторе')
               ->set_width(30),
               Field::make('complex', 'crb_coautors_titles', 'Соавторы статьи')
               ->add_fields( array(
                Field::make('text', 'crb_coautor_titles_head', 'Материал')
               ->set_width(50),
               Field::make('text', 'crb_coautor_contacts_name', 'Имя')
               ->set_width(50),
               )),
               Field::make('complex', 'crb_autor_contacts', 'Контакты')
               ->add_fields( array(
                Field::make('text', 'crb_autor_contacts_messenger', 'Название')
               ->set_width(50),
               Field::make('text', 'crb_autor_contacts_link', 'Ссылка')
               ->set_width(50),
               ))
               
           ));
    