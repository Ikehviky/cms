<?php

require_once('../../../private/initialize.php');

if(is_post_request()){
$menu_name = $_POST['menu_name'] ?? '';
$position = $_POST['position'] ?? '';
$visible = $_POST['visible'] ?? '';


echo "Form Parameters";
echo "</br>";
echo "Menu Name: " . $menu_name . '</br>';
echo "Position: " . $position . '</br>';
echo "Visible: " . $visible . '</br>';
}else{
    redirect_to(url_for('/assets/subject/index.php'));
}
?>