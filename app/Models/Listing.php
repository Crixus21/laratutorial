<?php
    namespace App\Models;

    class Listing {
        public static function all() {
            return [[
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dolorem dignissimos a sit tenetur recusandae accusamus minima nesciunt nihil, iure molestias! Ab optio rem aut maxime consectetur! Odit, inventore id!'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi dolorem dignissimos a sit tenetur recusandae accusamus minima nesciunt nihil, iure molestias! Ab optio rem aut maxime consectetur! Odit, inventore id!'
            ]];
        }

        public static function find($id){
            $listings = self::all();
            foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                    return $listing;
                }
            }
        }

    }

?>