<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class PBio extends Controller
{
    public function epis() {
        $epis = get_terms( 'epigrafe', array(
            'orderby' => 'name',
            'hide_empty' => true,
          ));

          return array_map(function ($term) {
            return [
              'name' => $term->name,
              'slug' => $term->slug,
            ];
          }, $epis);
    }

    public function itemCurris() {

        $episArr = $this->epis();
        $items_curris = [];
        $items_curri_epi = [];

        foreach ($episArr as $epi) {

            $items_curris = get_posts([
                'post_type' => 'item_curri',
                'nopaging' => true,
                'order'     => 'asc',
                'tax_query' => [
                    [
                        'taxonomy' => 'epigrafe',
                        'field' => 'slug',
                        'terms' => $epi,
                    ]
                ]
            ]);

            $items_curri_epi[] = [
                'epi_name' => $epi['name'],
                'epi_slug' => $epi['slug'],
                'items_curri' => array_map(function ($item) {
                    return [
                      'title' => apply_filters('the_title', $item->post_title),
                      'fecha' => new \DateTime(get_field('fecha', $item->ID, false)),
                      'fecha_final' => get_field('fecha-final', $item->ID, false),
                      'content' => $item->post_content,
                    ];
                  }, $items_curris),
            ];
        }

        return $items_curri_epi;
    }

}


