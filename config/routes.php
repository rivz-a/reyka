<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass()`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 * Cache: Routes are cached to improve performance, check the RoutingMiddleware
 * constructor in your `src/Application.php` file to change this behavior.
 *
 */
Router::defaultRouteClass(DashedRoute::class);


Router::prefix('backdoor', function (RouteBuilder $routes) {
    // Все маршруты здесь будут иметь префикс `/backdoor`,
    // и добавлять элемент prefix => backdoor маршрутизации.
    
    $routes->connect('/', ['controller' => 'Categories', 'action' => 'door']);  
    $routes->connect('/categories', ['controller' => 'Categories', 'action' => 'door']);
    $routes->connect('/articles', ['controller' => 'Articles', 'action' => 'door']);

    $routes->fallbacks(DashedRoute::class);
});


Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    /**
     * Apply a middleware to the current route scope.
     * Requires middleware to be registered via `Application::routes()` with `registerMiddleware()`
     */
    $routes->applyMiddleware('csrf');

    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    //$routes->connect('/', ['controller' => 'Articles', 'action' => 'display', 'home']);

    //Главную страницу направляем на Articles экшен home
    $routes->connect('/', ['controller' => 'Categories', 'action' => 'home']);

     
    $routes->connect('/users/login', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/users/logout', ['controller' => 'Users', 'action' => 'logout']);

    
    $routes->connect('/pages/sendmail', ['controller' => 'Pages', 'action' => 'sendmail']);
 
    $routes->connect('/o-kompanii', ['controller' => 'Categories', 'action' => 'onas']);
    $routes->connect('/kontakty', ['controller' => 'Categories', 'action' => 'kontakt']);
    $routes->connect('/remont-generatorov', ['controller' => 'Categories', 'action' => 'generator']);
    $routes->connect('/remont-starterov', ['controller' => 'Categories', 'action' => 'starter']);
    $routes->connect('/remont-elektroreek', ['controller' => 'Categories', 'action' => 'electro']);
    $routes->connect('/remont-elektroreek/*', ['controller' => 'Categories', 'action' => 'electro']);
    $routes->connect('/remont-rulevyh-reduktorov', ['controller' => 'Categories', 'action' => 'reduktor']);
    $routes->connect('/remont-rulevyh-reduktorov/*', ['controller' => 'Categories', 'action' => 'reduktor']);
    $routes->connect('/remont-nasosov-eur', ['controller' => 'Categories', 'action' => 'nasoseur']);
    $routes->connect('/remont-nasosa-gur', ['controller' => 'Categories', 'action' => 'nasosgur']);
    $routes->connect('/stati', ['controller' => 'Stati', 'action' => 'index']);
    $routes->connect('/stati/*', ['controller' => 'Stati', 'action' => 'view']);

    
    $routes->connect('/categories/index', ['controller' => 'Categories','action' => 'index']);
    $routes->connect('/sitemap', ['controller' => 'Categories','action' => 'sitemap']);

    $routes->connect('/articles/:action', ['controller' => 'Articles']);
    $routes->connect('/articles/edit/*', ['controller' => 'Articles', 'action' => 'edit']);

    $routes->connect('/categories/:action', ['controller' => 'Categories']);
    $routes->connect('/categories/edit/*', ['controller' => 'Categories', 'action' => 'edit']);  
    
   // $routes->connect('/sitemap.xml', ['controller' => 'Sitemap', 'action' => 'sitemap']);
   

    $routes->connect('/backdoor', ['controller' => 'Backdoor', 'action' => 'index', 'admin' => true]);
    
    //Маршрут для хелп файла ))
    $routes->connect('/help/', ['controller' => 'Pages', 'action' => 'display', 'help']);


    $routes->connect('/*', ['controller' => 'Categories', 'action' => 'index']);
    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    //$routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `DashedRoute`, the `fallbacks` method is a shortcut for
     *
     * ```
     * $routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'DashedRoute']);
     * $routes->connect('/:controller/:action/*', [], ['routeClass' => 'DashedRoute']);
     * ```
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks(DashedRoute::class);
});

/**
 * If you need a different set of middleware or none at all,
 * open new scope and define routes there.
 *
 * ```
 * Router::scope('/api', function (RouteBuilder $routes) {
 *     // No $routes->applyMiddleware() here.
 *     // Connect API actions here.
 * });
 * ```
 */
