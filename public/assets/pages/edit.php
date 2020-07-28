<?php 
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])){
    redirect_to(url_for('/assets/pages/index.php'));
}
$id = $_GET['id'];
$menu_name = '';
$position = '';
$visible = '';

if(is_post_request()){

    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form Parameter";
    echo '</br>';
    echo "Menu Name: " . $menu_name . "</br>";
    echo "Position: " . $position . "</br>";
    echo "Visible: " . $visible . "</br>"; 
    
}

?>

<?php $page_title = 'Edit Pages'; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/assets/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Edit Pages</h1>

    <form action="" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1" if($value = '1')>1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Pages" />
      </div>
    </form>

  </div>

  <?php include(SHARED_PATH . '/staff_footer.php');?>
