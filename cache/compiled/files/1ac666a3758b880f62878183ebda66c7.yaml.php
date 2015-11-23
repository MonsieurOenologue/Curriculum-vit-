<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'user/config/site.yaml',
    'modified' => 1448311753,
    'data' => [
        'title' => 'Monsieur',
        'author' => [
            'name' => 'Thomas Lefebvre',
            'email' => 'thomas.lfbvr@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Just another site for you to travel'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => [
            '/redirect-test' => '/',
            '/old/(.*)' => '/new/$1'
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/new/(.*)' => '/blog/$1'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'header' => [
            'title' => 'Bonjour.',
            'description' => 'Bienvenue sur mon site, je suis <span>étudiant en informatique</span>, <span>photographe amateur</span> et <span>passionné de jeux vidéo</span> et vous pouvez en <a class="smoothscroll" href="#about">apprendre plus</a>.'
        ],
        'copyright' => [
            0 => [
                'line' => 'Copyright 2015 - Thomas Lefebvre'
            ]
        ],
        'social' => [
            0 => [
                'url' => '#',
                'icon' => 'facebook'
            ],
            1 => [
                'url' => '#',
                'icon' => 'twitter'
            ],
            2 => [
                'url' => '#',
                'icon' => 'google-plus'
            ],
            3 => [
                'url' => '#',
                'icon' => 'linkedin'
            ],
            4 => [
                'url' => '#',
                'icon' => 'instagram'
            ],
            5 => [
                'url' => '#',
                'icon' => 'dribbble'
            ],
            6 => [
                'url' => '#',
                'icon' => 'skype'
            ]
        ],
        'twitter' => [
            'id' => '657554810648948736',
            'domId' => 'tw-widget1',
            'maxTweets' => 3,
            'enableLinks' => 'true',
            'showInteraction' => 'false',
            'showImages' => 'false',
            'showUser' => 'false'
        ]
    ]
];
