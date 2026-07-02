<?php

require_once __DIR__ . '/../src/core/Router.php';

require_once __DIR__ . '/../src/controller/HomeController.php';
require_once __DIR__ . '/../src/controller/UserController.php';
require_once __DIR__ . '/../src/controller/ContactController.php';
require_once __DIR__ . '/../src/controller/QuoteController.php';
require_once __DIR__ . '/../src/controller/DashboardController.php';
require_once __DIR__ . '/../src/controller/ConstructionController.php';
require_once __DIR__ . '/../src/controller/HomeImprovementController.php';
require_once __DIR__ . '/../src/controller/OutdoorLivingController.php';
require_once __DIR__ . '/../src/controller/SpecialtyController.php';

$router = new Router();

// Home Controller Object
$homeController = new HomeController();

// Auth Controller Object
$userController = new UserController();

// Database Controller Objects(Contact and Quote)
$contactController = new ContactController();
$quoteController = new QuoteController();

// Dashboard Controller Object
$dashboardController = new DashboardController();

// Service Contoller Objects
$constructionController = new ConstructionController();
$homeimpromentController = new HomeImprovementController();
$outdoorlivingController = new OutdoorLivingController();
$specialtyController = new SpecialtyController();

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
*/

$router->get('/', [$homeController, 'index']);
$router->get('/contact', [$quoteController, 'showForm']);

// Services
$router->get('/services/construction', [$constructionController, 'construction']);
$router->get('/services/home-improvement', [$homeimpromentController, 'homeImprovement']);
$router->get('/services/outdoor-living', [$outdoorlivingController, 'outdoorLiving']);
$router->get('/services/specialty', [$specialtyController, 'specialty']);

// Auth
$router->get('/login', [$userController, 'showLogin']);
$router->post('/login-submit', [$userController, 'auth']);
$router->get('/logout', [$userController, 'logout']);

// Forms Quote and Contact Index Hero Form
$router->post('/contact-submit', [$contactController, 'submit']);
$router->post('/quote-submit', [$quoteController, 'submit']);


// Admin Dashboard
$router->get('/dashboard', [$dashboardController, 'dashboard']);

$router->dispatch($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
