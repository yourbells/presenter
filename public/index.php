<?php
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'login':
        $controller = new AuthController();
        $controller->showLoginForm();
        break;
    case 'register':
        $controller = new AuthController();
        $controller->showRegisterForm();
        break;
    case 'login_action':
        $controller = new AuthController();
        $controller->login();
        break;
    case 'register_action':
        $controller = new AuthController();
        $controller->register();
        break;
    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;
    default:
        echo "Page not found.";
        break;
}
?>
