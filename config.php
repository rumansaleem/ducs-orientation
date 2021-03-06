<?php

use Illuminate\Support\Arr;

return [
    'production' => false,
    'baseUrl' => '',
    'intro' => 'We fuel the world with our power to create technocrats that make the world a better place to live in.',
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
