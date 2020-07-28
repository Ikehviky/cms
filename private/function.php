<?php 
function url_for($script_path){
//adding a leadign '/' if not available
if($script_path[0] != '/'){
    $script_path = "/" . $script_path;
}
    return WWW_ROOT . $script_path;
}

function u($script=''){
    return urlencode($string);
}

function raw_u($script=''){
    return rawurlencode($string);
}

function h($string=''){
    return htmlspecialchars($string);
}

function error_404(){
    return header($_SERVER['SERVER_PROTOCOL'] . '404 Not Found');
    exit;
}

function error_500(){
    return header($_SERVER['SERVER_PROTOCOL'] . '500 Internal Server Error');
    exit;
}

function is_post_request(){
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function is_get_request(){
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

function redirect_to($location){
    header("Location: " . $location);
}
