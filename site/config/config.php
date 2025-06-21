<?php

return [
    'debug'  => true,
    'panel' =>[
        'install' => true
    ],
    'routes' => [
        // Example: Get a single page
        [
            'pattern' => 'arandor-api/pages/(:all)',
            'method'  => 'GET',
            'action'  => function ($path) {
                $page = page($path);
                if (!$page) return ['status' => 404, 'message' => 'Not found'];
        
                $data = $page->content()->toArray();
        
                // Optional: Add structure field parsing
                if ($page->slider()->isNotEmpty()) {
                    $data['slider'] = $page->slider()->toStructure()->map(fn ($item) => $item->toArray())->values();
                }
        
                return [
                    'status' => 200,
                    'data'   => $data
                ];
            }
        ],
  
        // Example: List children of a page
        [
            'pattern' => 'arandor-api/children/(:all)',
            'method'  => 'GET',
            'action'  => function ($path) {
                $page = page($path);
                if (!$page) return ['status' => 404, 'message' => 'Not found'];
        
                return [
                    'status' => 200,
                    'data' => $page->children()->listed()->map(fn ($child) => [
                    'slug'  => $child->slug(),
                    'title' => $child->title()->value(),
                    'url'   => $child->url(),
                    'content' => $child->content()->toArray(),
                    ])->values()
                ];
            }
        ],
    ],
    'owebstudio.pwa' => [
        'enable' => true,
        'manifest' => [
            'name' => 'Arandor Compendium',
            'short_name' => 'Arandor',
            'description' => 'Arandor ist ein D&D 5E Abenteuer. Geschrieben von Flo. Gespielt von Daniel, Cons und David. Ihr seid die besten.',
            'background_color' => '#000000',
            'theme_color' => '#000000',
            'display' => 'fullscreen',
            'orientation' => 'any',
            'status_bar' => 'black'
        ],
        'icons' => [
            '512x512' => 'splash_screens/icon.png',
        ],
        'splash' => [
            '640x1136' => 'splash_screens/640x1136.png',
            '750x1334' => 'splash_screens/750x1334.png',
            '828x1792' => 'splash_screens/828x1792.png',
            '1125x2436' => 'splash_screens/1125x2436.png',
            '1242x2208' => 'splash_screens/1242x2208.png',
            '1242x2688' => 'splash_screens/1242x2688.png',
            '1536x2048' => 'splash_screens/1536x2048.png',
            '1668x2224' => 'splash_screens/1668x2224.png',
            '1668x2388' => 'splash_screens/1668x2388.png',
            '2048x2732' => 'splash_screens/2048x2732.png',
        ],
    ]
];
