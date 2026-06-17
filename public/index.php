<?php
require_once __DIR__ . '/../src/controller/HomeController.php';
require_once __DIR__ . '/../src/controller/UserController.php';
require_once __DIR__ . '/../src/controller/ContactController.php';
require_once __DIR__ . '/../src/controller/QuoteController.php';
require_once __DIR__ . '/../src/controller/DashboardController.php';



$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$homeController = new HomeController();
$userController = new UserController();
$contactController = new ContactController();
$quoteController = new QuoteController();
$dashboardController = new DashboardController();

if ($uri === '/') {
    $homeController->index();
} elseif ($uri === '/login') {
    $userController->showLogin();
} elseif ($uri === '/login-submit') {
    $userController->auth();
} elseif ($uri === '/logout') {
    $userController->logout();
} elseif ($uri === "/contact-submit") {
    $contactController->submit();
} elseif ($uri === '/quote-submit') {
    $quoteController->submit();
} 
elseif ($uri === '/dashboard') {
    $dashboardController->dashboard();
} 

else {
    http_response_code(404);
    echo "404 Not Found";
}
