<?php

include_once 'model/usermodel.php';

class AuthController {
    static function login() {
        view('auth_page/layout', ['url' => 'auth']);
    }

    static function register() {
        view('auth_page/layout', ['url' => 'auth']);
    }

    static function saveLogin() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::login([
            'username' => $post['username'], 
            'password' => $post['passwd']
        ]);
        if ($user) {
            // unset($user['password']);
            $_SESSION['user'] = $user;
            header('Location: '.BASEURL.'dashboard');
        }
        else {
            header('Location: '.BASEURL.'auth?failed=true');
        }
    }

    static function saveRegister() {
        $post = array_map('htmlspecialchars', $_POST);

        $user = User::register([
            'usernamesignup' => $post['usernamesignup'], 
            'nama' => $post['nama'], 
            'password' => $post['passwordsignup']

        ]);

        if ($user) {
            header('Location: '.BASEURL.'auth');
        }
        else {
            header('Location: '.BASEURL.'auth?failed=true');
        }
    }

    static function logout() {
        $_SESSION = array();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        session_destroy();
        header('Location: '.BASEURL);
    }

    static function forgotPassword() {}
}
?>