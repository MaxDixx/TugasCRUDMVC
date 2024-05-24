<?php

function view($page, $data = []) {
    extract($data);
    include 'view/' . $page . '.php';
}

class Router {
    private static $urls = [];

    public static function url($url, $method, $callback) {
        if ($url == '/') {
            $url = '';
        }
        self::$urls[strtoupper($method)][$url] = $callback;
        self::$urls['routes'][] = $url;
        self::$urls['routes'] = array_unique(self::$urls['routes']);
    }

    public function __construct() {
        $url = implode("/", 
            array_filter(
                explode("/", 
                    str_replace($_ENV['BASEDIR'], "", 
                        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
                    )
                ), 'strlen'
            )
        );

        if (!in_array($url, self::$urls['routes'])) {
            header('Location: ' . BASEURL);
            exit; // Add exit to prevent further execution
        }

        $method = $_SERVER['REQUEST_METHOD'];
        if (isset(self::$urls[$method][$url])) {
            call_user_func(self::$urls[$method][$url]);
        } else {
            header('HTTP/1.0 405 Method Not Allowed');
            exit; // Add exit to prevent further execution
        }
    }
}

function urlpath($path) {
    require_once 'config/static.php';
    return BASEURL . $path;
}
?>