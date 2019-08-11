<?php

return [
    'production' => false,
    'baseUrl' => '',
    'content' => function($page, $key) {
        $keys = explode('.', $key);
        $key = array_shift($keys);
        $content = require("content/{$key}.php");
        while(count($keys) > 0) {
            $key = array_shift($keys);
            if(!array_key_exists($key, $content)) {
                return null;
            }
            $content = $content[$key];
        }
        return $content;
    },
    'gallery' => function($page) {
        return collect(require('content/gallery.php'))
            ->map(function($img) use ($page) {
                $img->src = $page->baseUrl . '/' . ltrim($img->src, '/');
                return $img;
            })->toArray();
    },

    'collections' => [
        'staff',
        'alumni',
        'events',
        'gallery',
        'bulletin',
    ],
];
