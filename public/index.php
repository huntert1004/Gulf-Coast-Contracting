<?php

require_once __DIR__ . '/../src/core/Router.php';

require_once __DIR__ . '/../src/controller/HomeController.php';
require_once __DIR__ . '/../src/controller/UserController.php';
require_once __DIR__ . '/../src/controller/ContactController.php';
require_once __DIR__ . '/../src/controller/QuoteController.php';
require_once __DIR__ . '/../src/controller/DashboardController.php';

$router = new Router();

$homeController = new HomeController();
$userController = new UserController();
$contactController = new ContactController();
$quoteController = new QuoteController();
$dashboardController = new DashboardController();

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
*/

$router->get('/', [$homeController, 'index']);

$router->get('/login', [$userController, 'showLogin']);
$router->post('/login-submit', [$userController, 'auth']);
$router->get('/logout', [$userController, 'logout']);

$router->post('/contact-submit', [$contactController, 'submit']);
$router->post('/quote-submit', [$quoteController, 'submit']);

$router->get('/dashboard', [$dashboardController, 'dashboard']);

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);