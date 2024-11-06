<?php
require_once __DIR__ . '/../models/User.php';

class HomeController {
    public function index() {
        session_start();
        $user = new User();

        if ($user->isLoggedIn()) {
            include __DIR__ . '/../views/dashboard.php';
        } else {
            include __DIR__ . '/../views/home.php';
        }
    }
}
?>
