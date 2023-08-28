# Kirby PWA

Turns your project into a PWA (progressive web app) for Kirby 3.

## What is PWA (Progressive web app)?

Progressive Web Apps (PWAs) are web apps that use service workers, manifests, and other web-platform features in combination with progressive enhancement to give users an experience on par with native
apps.

PWAs provide a number of advantages to users — including being installable, progressively enhanced, responsively designed, re-engageable, linkable, discoverable, network independent, and secure.

PWAs need at least three icons: a favicon for the browser page, a device icon for the for the installed application, and an icon used on the splash screen of the installed application.

For details:

- https://web.dev/progressive-web-apps/
- https://developer.mozilla.org/en-US/docs/Web/Progressive_web_apps

## Installation

1. Download the latest release
2. Unzip downloaded file
3. Copy/paste unzipped folder in your `/site/plugins` folder

## Usage

You can use sample basic snippet of plugin:

```php
<?php snippet('pwa') ?>
```

### Sample config

```php
<?php

return [
    'owebstudio.pwa' => [
        'enable' => true,
        'manifest' => [
            'name' => 'Kirby PWA',
            'short_name' => 'PWA',
            'description' => 'Turns your project into a PWA (progressive web app) for Kirby 3.',
            'background_color' => '#ffffff',
            'theme_color' => '#000000',
            'display' => 'fullscreen',
            'orientation' => 'any',
            'status_bar' => 'black'
        ],
        'icons' => [
            '192x192' => 'assets/images/icons/icon-192x192.png',
            '256x256' => 'assets/images/icons/icon-384x384.png',
            '384x384' => 'assets/images/icons/icon-384x384.png',
            '512x512' => 'assets/images/icons/icon-512x512.png',
        ],
        'splash' => [
            '640x1136' => 'assets//images/icons/splash-640x1136.png',
            '750x1334' => 'assets//images/icons/splash-750x1334.png',
            '828x1792' => 'assets//images/icons/splash-828x1792.png',
            '1125x2436' => 'assets//images/icons/splash-1125x2436.png',
            '1242x2208' => 'assets//images/icons/splash-1242x2208.png',
            '1242x2688' => 'assets//images/icons/splash-1242x2688.png',
            '1536x2048' => 'assets//images/icons/splash-1536x2048.png',
            '1668x2224' => 'assets//images/icons/splash-1668x2224.png',
            '1668x2388' => 'assets//images/icons/splash-1668x2388.png',
            '2048x2732' => 'assets//images/icons/splash-2048x2732.png',
        ],
    ]
];
```

## Options

You can see the options and default values of the plugin in the table below. The `enable`, `manifest` and `icons` options are required. You can see the default `manifest` values from the example above.

| Option | Type    | Default      | Description |
|:--- |:--------|:-------------|:--- |
| enable | boolean | false        | Enable/disable the plugin |
| manifest | array   | []           | Application manifest settings |
| icons | array   | []           | Application icons for different resolutions |
| splash | array   | []           | A custom splash screen makes your PWA feel more like an app built for that device. |
| shortcuts | array   | []           | Shortcuts are accessible through long press on phones and right-clicking on desktop |
| custom | array   | []           | Insert personalized tags to manifest.json |
| manifest.json | string&#124;closure  | null | Tells the browser about your PWA and how it should behave when installed on the user's desktop or mobile device |
| serviceworker.js | string&#124;closure  | null | Script that your browser runs in the background, separate from a web page |

All the values can be updated in the `config.php` file and prefixed with `owebstudio.pwa.`.
