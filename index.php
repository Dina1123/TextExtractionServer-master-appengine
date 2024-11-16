<?php
ini_set('allow_url_fopen', 1);
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/':
     
        require 'get.php';
        break;
    case '/index.php':
        break;
    case '/get.php':
        require 'get.php';
        break;
    case '/post.php':
        echo "Loading post.php<br>";
        require 'post.php';
        break;
    case '/delete.php':
        require 'delete.php';
        break;
    default:
        http_response_code(404);
        echo "Not Found";
        break;
}
?>
