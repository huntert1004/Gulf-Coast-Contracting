<?php

class Router
{
    /*
     * This array stores every route we register.
     *
     * Example structure:
     *
     * $routes = [
     *     'GET' => [
     *         '/' => [$homeController, 'index']
     *     ],
     *     'POST' => [
     *         '/contact-submit' => [$contactController, 'submit']
     *     ]
     * ];
     */
    private array $routes = [];

    /*
     * Register a GET route.
     *
     * GET routes are normally used for showing pages.
     * Example:
     * $router->get('/login', [$userController, 'showLogin']);
     */
    public function get(string $path, array $handler): void
    {
        $this->routes['GET'][$path] = $handler;
    }

    /*
     * Register a POST route.
     *
     * POST routes are normally used for form submissions.
     * Example:
     * $router->post('/contact-submit', [$contactController, 'submit']);
     */
    public function post(string $path, array $handler): void
    {
        $this->routes['POST'][$path] = $handler;
    }

    /*
     * Match the current request to one of the registered routes.
     *
     * $uri = the current URL
     * Example: /contact-submit?success=true
     *
     * $method = the HTTP request method
     * Example: GET or POST
     */
    public function dispatch(string $uri, string $method): void
    {
        /*
         * Remove query strings from the URL.
         *
         * Example:
         * /contact-submit?success=true
         *
         * becomes:
         * /contact-submit
         */
        $path = parse_url($uri, PHP_URL_PATH);

        /*
         * Check if a route exists for this request method and path.
         *
         * Example:
         * $routes['POST']['/contact-submit']
         */
        if (!isset($this->routes[$method][$path])) {
            http_response_code(404);
            echo "404 Not Found";
            return;
        }

        /*
         * Pull out the controller object and method name.
         *
         * Example:
         * [$contactController, 'submit']
         *
         * becomes:
         * $controller = $contactController
         * $action = 'submit'
         */
        [$controller, $action] = $this->routes[$method][$path];

        /*
         * Safety check:
         * Make sure the method actually exists on the controller.
         */
        if (!method_exists($controller, $action)) {
            http_response_code(500);
            echo "Controller method not found.";
            return;
        }

        /*
         * Finally call the controller method.
         *
         * Example:
         * $contactController->submit();
         */
        $controller->$action();
    }
}