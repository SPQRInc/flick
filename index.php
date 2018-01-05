<?php
use Pagekit\Application as App;
return [
    'name' => 'flick',
    'main' => function() {
    },
    'autoload' => [
        'sgerli\\flick\\' => 'src'
    ],
    'resources' => [
        'flick:' => ''
    ],
    'routes' => [
        '@flick' => [
            'path' => '/flick',
            'controller' => 'sgerli\\flick\\Controller\\GalleryController'
        ]
    ],
    'config' => [
        'apiKey' => '',
        'uId' => '',
        'cId' => '',
        'title' => '',
        'flick_text' => ''
    ],
    'menu' => [
        'flick' => [
            'label' => 'Flick',
            'icon'   => 'app/system/assets/images/placeholder-icon.svg',
            'url'    => '@flick',
            'active' => '@flick*',
            'access' => 'flick: manage settings',
        ]
    ],
    'permissions' => [
        'flick: manage settings' => [
            'title' => 'Manage settings'
        ]
    ],
    'settings' => '@flick',
    'events' => [
        'view.scripts' => function ($event, $scripts) use ($app) {

			$scripts->register('uikit-grid', 'app/assets/uikit/js/components/grid.min.js', 'uikit');
			$scripts->register('uikit-lightbox', 'app/assets/uikit/js/components/lightbox.min.js', 'uikit');
		},
    ]
];