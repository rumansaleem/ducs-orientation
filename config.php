<?php

use Illuminate\Support\Arr;

return [
    'production' => false,
    'baseUrl' => '',
    'intro' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis rem vitae voluptate neque quaerat sed magni accusamus. Magni corrupti nihil a tenetur? Consequuntur corrupti saepe minima itaque assumenda eos ipsum.',
    'collections' => [
        'achievements' => [
            'sort' => 'id'
        ],
    ],
    'content' => function ($page, $key) {
        $keys = explode('.', $key);
        $key = array_shift($keys);
        
        $content = require("content/{$key}.php");

        if (count($keys) > 0) {
            return collect(Arr::get($content, implode(".", $keys)));
        }

        return collect($content);
    },

    'gallery' => function ($page) {
        return $page->content('gallery')->map(function ($img) use ($page) {
            $img['src'] = $page->baseUrl . '/' . ltrim($img['src'], '/');
            return $img;
        })->toArray();
    },

];
