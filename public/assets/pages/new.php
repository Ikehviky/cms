<?php 

require_once('../../../private/initialize.php');


if(is_post_request()){
  $page = [];
  $page['subject_id'] = $_POST['subject_id'] ?? '';
  $page['menu_name'] = $_POST['menu_name'] ?? '';
  $page['position'] = $_POST['position'] ?? '';
  $page['visible'] = $_POST['visible'] ?? '';
  $page['content'] = $_POST['content'] ?? '';
  
  
  $result = insert_page($page);
  $new_id = mysqli_insert_id($db);
  redirect_to(url_for('/assets/pages/details.php?id=' . $new_id));
  
  }else{
      $page = [];
      $page['subject_id'] = '';
      $page['menu_name'] = '';
      $page['position'] = '';
      $page['visible'] = '';
      $page['content'] = '';
  
      $page_set = find_all_pages();
      $page_count = mysqli_num_rows($page_set) + 1;
      mysqli_free_result($page_set);
      
  } 


?>

<?php $page_title = 'Create Pages'; ?>

<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/assets/pages/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject new">
    <h1>Create Pages</h1>

    <form action="<?php echo url_for('/assets/pages/create.php');?>" method="post">
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
        <input type="submit" value="Create Pages" />
      </div>
    </form>

  </div>

  <?php include(SHARED_PATH . '/staff_footer.php');?>
