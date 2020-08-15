<?php

require_once('../../../private/initialize.php');

if(is_post_request()){
    
$page['menu_name'] = $_POST['menu_name'] ?? '';
$page['position'] = $_POST['position'] ?? '';
$page['visible'] = $_POST['visible'] ?? '';

$result = insert_page($page);
$new_id = mysqli_insert_id($db);
redirect_to(url_for('/assets/pages/details.php?id=' . $new_id));

}else{
    redirect_to(url_for('/assets/pages/index.php'));
}