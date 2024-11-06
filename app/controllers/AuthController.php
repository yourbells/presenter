<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {
    public function showLoginForm() {
        include __DIR__ . '/../views/login.php';
    }

    public function showRegisterForm() {
        include __DIR__ . '/../views/register.php';
    }

    public function login() {
        session_start();
        $user = new User();
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if ($userData = $user->login($username, $password)) {
            $_SESSION['user_id'] = $userData['id'];
            $_SESSION['username'] = $userData['username'];
            header("Location: /?page=home");
        } else {
            echo "Login failed. Invalid credentials.";
        }
    }
    
    public function logout() {
        session_start();
        $user = new User();
        $user->logout();
        header("Location: /");
    }

    public function register() {
        $user = new User();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $email = $_POST['email'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $account_type = $_POST['account_type'];
    
        if (!in_array($account_type, ['Participant', 'Presenter'])) {
            echo "Account type tidak valid.";
            return;
        }
    
        if ($password !== $confirm_password) {
            echo "Password dan Confirm Password harus sama.";
            return;
        }
    
        if ($user->register($username, $password, $email, $first_name, $last_name, $account_type)) {
            header("Location: /?page=login");
        } else {
            echo "Registrasi gagal. Username atau email mungkin sudah ada.";
        }
    }    
}
?>
