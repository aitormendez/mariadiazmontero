<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function filtros()
    {
        // ojo. no se usa en favor de un walker
        $terms = get_terms( array(
            'taxonomy' => 'category',
            'hide_empty' => false,
        ) );

        foreach ($terms as $term) {
            if ($term->parent === 0 && $term->slug != 'sin-categoria') {
                $parents[] = [
                    'id' => $term->term_id,
                    'nombre' => $term->name,
                    'slug' => $term->slug,
                ];
            }
        }

        foreach ($parents as $parent) {
            $parent_id = $parent['id'];
            ${'padre_hijos_' . $parent_id}['padre_' . $parent_id] = $parent;
            foreach ($terms as $term) {
                if ($term->parent === $parent_id ) {
                    ${'childs_of_' . $parent_id}[] = [
                        'id' => $term->term_id,
                        'nombre' => $term->name,
                        'slug' => $term->slug,
                    ];
                }

                if (isset(${'childs_of_' . $parent_id})) {
                    ${'padre_hijos_' . $parent_id}['hijos_' . $parent_id] = ${'childs_of_' . $parent_id};
                }
            }

            $output['padre_hijos_' . $parent_id] = ${'padre_hijos_' . $parent_id};

        }

        return $output;
    }
}
