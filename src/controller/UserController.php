<?php


require_once __DIR__ . '/../model/User.php';

class UserController
{
    public function createUser()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password'])) { //Need to add mor valiation here work on that later
                $error = "All fields are required.";
                return;
            }
            $user = new User();

            $user->setName($_POST['name']);
            $user->setUserName($_POST['username']);
            $user->setPassword($_POST["password"]);

            $user->save();

            $success = "User Created successfully.";

            header("Location: /dashboard");
            exit;
            
        }
    }
    public function auth()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username']);
            $password = $_POST['password'];

            $userModel = new User();
            $user = $userModel->findByUsername($username);

            if (!$user || !password_verify($password, $user['password_hash'])) {
                $error = "Invalid username or password.";
                require __DIR__ . '/../views/login.php';
                return;
            }


            // Configure the session cookie before session_start().
            // These settings make the browser's session cookie safer.
            session_set_cookie_params([
                // 0 means the cookie lasts until the browser is closed.
                // This avoids keeping login sessions alive longer than needed.
                'lifetime' => 0,

                // The cookie is available across the whole site.
                // Example: /dashboard, /admin, /contact, etc.
                'path' => '/',

                // Only send the cookie over HTTPS.
                // This helps prevent the session ID from being exposed over insecure HTTP.
                'secure' => true,

                // Prevent JavaScript from reading the session cookie.
                // This helps reduce damage from XSS attacks because injected JS cannot steal PHPSESSID.
                'httponly' => true,

                // Helps protect against CSRF by limiting when the browser sends the cookie
                // on cross-site requests. "Lax" keeps normal links working while adding protection.
                'samesite' => 'Lax'
            ]);

            session_start();

            // After a successful login, regenerate the session ID.
            // This prevents session fixation attacks, where an attacker tries to force
            // a victim to use a known session ID before logging in.
            if (session_regenerate_id(true)) {

                // Store the authenticated user's database ID in the session.
                // This lets protected pages know which user is logged in.
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Explicit login flag.
                // This makes auth checks easier and clearer throughout the app.
                $_SESSION['logged_in'] = true;

                // Store the time this session ID was created.
                // This can be used later to periodically regenerate the session ID
                // or expire inactive sessions.
                $_SESSION['last_regenerated'] = time();
            }



            $success = "Logged in successfully.";
            header("Location: /dashboard");
            exit;
        }
    }
    public function logout()
    {
        session_start();

        // Clear all session variables
        $_SESSION = [];

        // Delete the session cookie
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();

            setcookie(
                // The name of the session cookie (usually PHPSESSID)
                session_name(),

                // Empty value because we're removing the cookie
                '',

                // Set expiration time in the past.
                // Browsers immediately delete cookies that have already expired.
                time() - 42000,

                // Match the original cookie path
                $params['path'],

                // Match the original cookie domain
                $params['domain'] ?? '',

                // Match the original secure flag
                $params['secure'],

                // Match the original HttpOnly flag
                $params['httponly']
            );
        }

        // Destroy the session on the server
        session_destroy();

        header("Location: /login");
        exit;
    }


    public function showLogin()
    {
        require __DIR__ . '/../views/login.php';
    }
}
