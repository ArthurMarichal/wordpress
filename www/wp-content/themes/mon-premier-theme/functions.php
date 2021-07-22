<?php
/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/

function wpm_custom_post_type() {

    // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
    $labels = array(
        // Le nom au pluriel
        'name'                => _x( 'Recettes', 'Post Type General Name'),
        // Le nom au singulier
        'singular_name'       => _x( 'Recette', 'Post Type Singular Name'),
        // Le libellé affiché dans le menu
        'menu_name'           => __( 'Recettes'),
        // Les différents libellés de l'administration
        'all_items'           => __( 'Toutes mes recettes'),
        'view_item'           => __( 'Voir les recettes'),
        'add_new_item'        => __( 'Ajouter une nouvelle recette'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer la recette'),
        'update_item'         => __( 'Modifier la recette'),
        'search_items'        => __( 'Rechercher une recette'),
        'not_found'           => __( 'Non trouvée'),
        'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
    );

    // On peut définir ici d'autres options pour notre custom post type

    $args = array(
        'label'               => __( 'Recettes'),
        'description'         => __( 'Tous sur mes recettes'),
        'labels'              => $labels,
        // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        /*
        * Différentes options supplémentaires
        */
        'show_in_rest' => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'recettes'),

    );

    // On enregistre notre custom post type qu'on nomme ici "recettes" et ses arguments
    register_post_type( 'recettes', $args );

}

add_action( 'init', 'wpm_custom_post_type', 0 );


if (function_exists( 'add_theme_support' )) {
    add_theme_support( 'post-thumbnails' );
}


add_theme_support('title-tag');
    /**
     * Loading All CSS Stylesheets and Javascript Files.
     */
    function wordpress_scripts_loader()
    {
        $theme_version = wp_get_theme()->get('Version');

        // 1. Styles.
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', [], $theme_version, 'all');
        wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], $theme_version, 'all'); // main.scss: Compiled Framework source + custom styles.

        if (is_rtl()) {
            wp_enqueue_style('rtl', get_template_directory_uri() . '/assets/css/rtl.css', [], $theme_version, 'all');
        }

        // 2. Scripts.
        wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.bundle.js', [], $theme_version, true);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }
    }

    add_action('wp_enqueue_scripts', 'wordpress_scripts_loader');

    function wordpress_register_nav_menus()
    {
        register_nav_menus(array(
            'main' => 'Menu'
        ));
    }

    add_action('init', 'wordpress_register_nav_menus');