# wp-base
WordPress base theme

Features:
- Working with ( ACF / Gutenberg (ReactJS) / Bootstrap grid) block builder plugin https://github.com/raivisFT/wp-boot-blocks
- Yarn packages https://yarnpkg.com
- Vite build tool https://github.com/vitejs/vite
- ACF Builder https://github.com/StoutLogic/acf-builder/wiki
- Alpine.js lightweight, JavaScript framework https://alpinejs.dev
- Swiper JS / Data Tables JS / Google Charts JS / Select 2
- Timber / Twig templates https://timber.github.io/docs/v2/

1. Before run this theme for new project:
    1.1 First need to add & run plugin ACF Pro: https://www.advancedcustomfields.com/pro/ & later use https://github.com/StoutLogic/acf-builder
    1.2 Clone https://github.com/raivisFT/wp-base
    1.3 For Gutenberg Block customization TFA plugin https://github.com/raivisFT/wp-boot-blocks

2. Run "composer install" - if Win then https://getcomposer.org/download/ - Download and run Composer-Setup.exe (all default setting only need to check any localhost php.ini) 
    - after success instalation and run will be composer.lock & new dir "vendor"

3. Run "yarn" - you can add more needed packages https://yarnpkg.com
    - yarn watch
    - yarn build

* JS & CSS dist directory will be minified and then need to check speed test for desktop & mobile https://developers.google.com/speed/pagespeed/insights/

Recomended extra plugins:
- https://wordpress.org/plugins/duplicate-page/
- https://en-gb.wordpress.org/plugins/all-in-one-wp-migration/
- https://wordpress.org/plugins/simple-custom-post-order/
- https://en-gb.wordpress.org/plugins/redirection/