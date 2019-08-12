<?php

use Illuminate\Support\Arr;

return [
    'production' => false,
    'baseUrl' => '',
    'content' => function ($page, $key) {
        $keys = explode('.', $key);
        $key = array_shift($keys);
        
        $content = require("content/{$key}.php");

        if(count($keys) > 0) {
            return collect(Arr::get($content, implode(".", $keys)));
        }

        return collect($content);
    },

    'gallery' => function ($page) {
        return $page->content('gallery')->map(function ($img) use ($page) {
            $img->src = $page->baseUrl . '/' . ltrim($img->src, '/');
            return $img;
        })->toArray();
    },

];
