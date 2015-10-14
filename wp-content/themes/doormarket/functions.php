<?php

if ( ! function_exists( 'doormarket_setup' ) ) :

function doormarket_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * See: https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 960, 420, true );
	add_image_size( 'slider', 960, 420, true );
    add_image_size( 'main-service', 300, 208, true );
    add_image_size( 'plitka', 300, 290, true );
    add_image_size( 'blog', 200, 200, true );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' =>  'Primary Menu',
		'social'  => 'Social Links Menu'
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );

}
endif; // doormarket_setup
add_action( 'after_setup_theme', 'doormarket_setup' );

/**
 * Register widget area.
 *
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function doormarket_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'doormarket_widgets_init' );

function doormarket_scripts() {

    wp_enqueue_style( 'bxslider', get_template_directory_uri() . '/css/main-slider/jquery.bxslider.css');
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap/bootstrap.css');
    wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/css/bootstrap/bootstrap-theme.css');
    wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/styles.css');
    wp_enqueue_style( 'widgets', get_template_directory_uri() . '/css/widgets/widgets.css');
    wp_enqueue_style( 'megamenu', get_template_directory_uri() . '/css/megamenu/megamenu.css');
    wp_enqueue_style( 'vmegamenu', get_template_directory_uri() . '/css/megamenu/vmegamenu.css');
    wp_enqueue_style( 'ajaxcart', get_template_directory_uri() . '/css/ajaxcart/ajaxcart.css');
    wp_enqueue_style( 'blogstyle', get_template_directory_uri() . '/css/blog/style.css');
    wp_enqueue_style( 'lastesttweet', get_template_directory_uri() . '/css/lastesttweet/lastesttweet.css');
    wp_enqueue_style( 'relatedslider', get_template_directory_uri() . '/css/relatedslider/relatedslider.css');
    wp_enqueue_style( 'cltool', get_template_directory_uri() . '/css/themevast/cltool.css');
    wp_enqueue_style( 'testimonial', get_template_directory_uri() . '/css/testimonial/testimonial.css');
    wp_enqueue_style( 'jquery.fancybox', get_template_directory_uri() . '/css/fancybox/jquery.fancybox.css');
    wp_enqueue_style( 'imageslider', get_template_directory_uri() . '/css/imageslider/imageslider.css');

    wp_enqueue_style( 'gray', get_template_directory_uri() . '/css/color/gray.css');
    wp_enqueue_style( 'mobile', get_template_directory_uri() . '/css/mobileresponsive.css');


    wp_enqueue_script( 'prototype', get_template_directory_uri() . '/js/prototype/prototype.js', array( 'jquery' ));
    wp_enqueue_script( 'ccard', get_template_directory_uri() . '/js/lib/ccard.js', array( 'jquery' ));
    wp_enqueue_script( 'validation', get_template_directory_uri() . '/js/prototype/validation.js', array( 'jquery' ));
    wp_enqueue_script( 'builder', get_template_directory_uri() . '/js/scriptaculous/builder.js', array( 'jquery' ));
    wp_enqueue_script( 'effects', get_template_directory_uri() . '/js/scriptaculous/effects.js', array( 'jquery' ));
    wp_enqueue_script( 'dragdrop', get_template_directory_uri() . '/js/scriptaculous/dragdrop.js', array( 'jquery' ));

    wp_enqueue_script( 'controls', get_template_directory_uri() . '/js/scriptaculous/controls.js', array( 'jquery' ));
    wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/scriptaculous/slider.js', array( 'jquery' ));
    wp_enqueue_script( 'js', get_template_directory_uri() . '/js/varien/js.js', array( 'jquery' ));
    wp_enqueue_script( 'form', get_template_directory_uri() . '/js/varien/form.js', array( 'jquery' ));
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/varien/menu.js', array( 'jquery' ));
    wp_enqueue_script( 'cookies', get_template_directory_uri() . '/js/mage/cookies.js', array( 'jquery' ));

    wp_enqueue_script( 'backtotop', get_template_directory_uri() . '/js/doormarket/backtotop.js', array( 'jquery' ));
    wp_enqueue_script( 'mobilemenu', get_template_directory_uri() . '/js/doormarket/mobilemenu.js', array( 'jquery' ));
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/doormarket/bootstrap/bootstrap.js', array( 'jquery' ));
    wp_enqueue_script( 'bootstrap-tooltip', get_template_directory_uri() . '/js/doormarket/bootstrap/bootstrap-tooltip.js', array( 'jquery' ));
    wp_enqueue_script( 'jquery-bxslider', get_template_directory_uri() . '/js/doormarket/plugin/jquery.bxslider.js', array( 'jquery' ));
    wp_enqueue_script( 'megamenu', get_template_directory_uri() . '/js/doormarket/megamenu.js', array( 'jquery' ));

    wp_enqueue_script( 'timer', get_template_directory_uri() . '/js/doormarket/timer.js', array( 'jquery' ));
    wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/js/doormarket/plugin/jquery.fancybox.pack.js', array( 'jquery' ));
    wp_enqueue_script( 'nivo-slider', get_template_directory_uri() . '/js/doormarket/plugin/jquery.nivo.slider.pack.js', array( 'jquery' ));
    wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'doormarket_scripts' );

// ---------------------------------------------   REGISTER SLIDERS  ------------------------------------------

add_action( 'init', 'register_my_post_type_slider' ); // Использовать функцию только внутри хука init

function register_my_post_type_slider() {
	$labels = array(
		'name' => 'Слайды',
		'singular_name' => 'Слайд', // админ панель Добавить->Функцию
		'add_new' => 'Добавить новый слайд',
		'add_new_item' => 'Добавить новый слайд', // заголовок тега <title>
		'edit_item' => 'Редактировать слайд',
		'new_item' => 'Новый сладй',
		'all_items' => 'Все слайды',
		'view_item' => 'Просмотр слайдов на сайте',
		'search_items' => 'Искать слайды',
		'not_found' =>  'Слайды не найдены.',
		'not_found_in_trash' => 'В корзине нет слайдов.',
		'menu_name' => 'Слайды' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true,
		'menu_position' => 20, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats'),
		'menu_icon' => 'dashicons-images-alt',
		'taxonomies' => array('media_cat')
	);
	register_post_type('media', $args);
}


// ---------------------------------- REGISTER DOORS ---------------------------------------------------


add_action( 'init', 'register_my_post_type_doors' ); // Использовать функцию только внутри хука init

function register_my_post_type_doors() {
	$labels = array(
		'name' => 'Двери',
		'singular_name' => 'Дверь', // админ панель Добавить->Функцию
		'add_new' => 'Добавить новую дверь',
		'add_new_item' => 'Добавить новую дверь', // заголовок тега <title>
		'edit_item' => 'Редактировать дверь',
		'new_item' => 'Новая дверь',
		'all_items' => 'Все двери',
		'view_item' => 'Просмотр дверей на сайте',
		'search_items' => 'Искать двери',
		'not_found' =>  'Двери не найдены.',
		'not_found_in_trash' => 'В корзине нет дверей.',
		'menu_name' => 'Двери' // ссылка в меню в админке
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'show_ui' => true, // показывать интерфейс в админке
		'has_archive' => true,
		'menu_position' => 21, // порядок в меню
		'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats', 'excerpt'),
		'menu_icon' => 'dashicons-smartphone',
        'rewrite' => true,
		'taxonomies' => array('doors_cat')
	);
	register_post_type('doors', $args);
}

//-------------------------------   REGISTER DOORS TAXONOMY   --------------------------------

add_action('init', 'register_my_taxonomy_doors');

function register_my_taxonomy_doors(){
	$labels = array(
		'name'              => 'Категории дверей',
		'singular_name'     => 'Категория дверей',
		'search_items'      => 'Поиск категорий дверей',
		'all_items'         => 'Все категории дверей',
		'parent_item'       => 'Родительская категория дверей',
		'parent_item_colon' => 'Родительская категория дверей:',
		'edit_item'         => 'Редактировать категорию двери',
		'update_item'       => 'Обновить категорию дверей',
		'add_new_item'      => 'Добавить новую категорию дверей',
		'new_item_name'     => 'Название новой категории дверей',
		'menu_name'         => 'Категории дверей',
	);
	// параметры
	$args = array(
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => $labels,
		'public'                => true,
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => true, // равен аргументу show_ui
		'hierarchical'          => true,
		'update_count_callback' => '',
		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // callback функция. Отвечает за html код метабокса (с версии 3.8): post_categories_meta_box или post_tags_meta_box. Если указать false, то метабокс будет отключен вообще
		'show_admin_column'     => false, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
		'_builtin'              => false,
		'show_in_quick_edit'    => null, // по умолчанию значение show_ui
	);
	register_taxonomy('doors_cat', array('doors'), $args );
}


// ---------------------------------- REGISTER FURNITURE ---------------------------------------------------


add_action( 'init', 'register_my_post_type_furniture' ); // Использовать функцию только внутри хука init

function register_my_post_type_furniture() {
    $labels = array(
        'name' => 'Фурнитура',
        'singular_name' => 'Фурнитура', // админ панель Добавить->Функцию
        'add_new' => 'Добавить новую фурнитуру',
        'add_new_item' => 'Добавить новую фурнитуру', // заголовок тега <title>
        'edit_item' => 'Редактировать фурнитуру',
        'new_item' => 'Новая фурнитура',
        'all_items' => 'Вся фурнитура',
        'view_item' => 'Просмотр фурнитуры на сайте',
        'search_items' => 'Искать фурнитуру',
        'not_found' =>  'Фурнитура не найдена.',
        'not_found_in_trash' => 'В корзине нет фурниутры.',
        'menu_name' => 'Фурнитура' // ссылка в меню в админке
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_ui' => true, // показывать интерфейс в админке
        'has_archive' => true,
        'menu_position' => 22, // порядок в меню
        'rewrite' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'post-formats', 'excerpt'),
        'menu_icon' => 'dashicons-admin-network',
        'taxonomies' => array('furnitures_cat')
    );
    register_post_type('furniture', $args);
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////

add_filter("manage_edit-services_columns", "prod_edit_columns");
add_action("manage_posts_custom_column",  "prod_custom_columns");


function prod_edit_columns($columns){
    $columns = array(
        "cb" => "<input type=\"checkbox\" />",
        "title" => "Заголовок услуги",
        "catalog" => "Категория",
    );

    return $columns;
}

function prod_custom_columns($column){
    global $post;
    switch ($column)
    {
        case "catalog":
            echo get_the_term_list($post->ID, 'doors_cat', '', ', ','');
            break;
    }
}

// --------------------------------   ADD FILTER BY DOORS CATEGORY -----------------------------------

function doormarket_add_taxonomy_filters() {
    global $typenow;

    // an array of all the taxonomyies you want to display. Use the taxonomy name or slug
    $taxonomies = array('doors_cat');

    // must set this to the post type you want the filter(s) displayed on
    if( $typenow == 'doors' ){

        foreach ($taxonomies as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            $tax_name = $tax_obj->labels->name;
            $terms = get_terms($tax_slug);
            if(count($terms) > 0) {
                echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
                echo "<option value=''>$tax_name</option>";
                foreach ($terms as $term) {
                    echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>';
                }
                echo "</select>";
            }
        }
    }
}
add_action( 'restrict_manage_posts', 'doormarket_add_taxonomy_filters' );


//---------------------------------------------------------------------------------------------------------------
// Создание поля настроек телефонов организации Общих настройках сайта

// Вешаем все блоки, поля и опции на хук admin_init
// --------------------------------------------------------------------------------------------------------------

add_action( 'admin_init', 'doormarket_settings_api_init' );
function doormarket_settings_api_init() {
    // Добавляем блок опций на базовую страницу "Общие"
    add_settings_section(
        'eg_setting_section', // секция
        'Телефон Организации',
        'eg_setting_section_callback_function',
        'general' // страница
    );

    // Добавляем поля опций. Указываем название, описание,
    // функцию выводящую html код поля опции.
    add_settings_field(
        'eg_setting_name',
        'Тел. компании Дом и Двор',
        'eg_setting_callback_function', // можно указать ''
        'general', // страница
        'eg_setting_section' // секция
    );

    // Регистрируем опции, чтобы они сохранялись при отправке
    // $_POST параметров и чтобы callback функции опций выводили их значение.
    register_setting( 'general', 'eg_setting_name' );
}

// ------------------------------------------------------------------
// Сallback функция для секции
// ------------------------------------------------------------------
//
// Функция срабатывает в начале секции, если не нужно вывдить
// никакой текст или делать что-то еще до того как выводить опции,
// то функцию можно не использовать для этого укажите '' в третьем
// параметре add_settings_section
//
function eg_setting_section_callback_function() {
    echo '<p>В данное поле должен быть введен номер телефона, который будет отображаться в шапке сайта</p>';
}

// ------------------------------------------------------------------
// Callback функции выводящие HTML код опций
// ------------------------------------------------------------------
//
// Создаем checkbox и text input теги
//

function eg_setting_callback_function() {
    echo '<input
		name="eg_setting_name"
		type="text"
		value="' . get_option( 'eg_setting_name' ) . '"
		class="code1"
	 />';
}

/*add_action('wp_ajax_blog_post', 'get_blog_posts_by_category');
add_action('wp_ajax_nopriv_blog_post', 'get_blog_posts_by_category');*/

/*function get_blog_posts_by_category(){


    $category = str_replace('/blog/', '', $_POST['category']);

    $blog_posts = get_posts(
        array(

            'posts_per_page' => -1,
            'post_type' => 'post',
            'category_name' => $category
        )
    );

    foreach ($blog_posts as $blog_post) {

        $blog_post->thumbnail = get_the_post_thumbnail($blog_post->ID, 'blog');

    }


    echo json_encode($blog_posts);

    die;

}*/

add_action('init', 'myStartSession', 1);
function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}

include_once('theme-options.php');
