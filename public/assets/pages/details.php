<?php require('../../../private/initialize.php')?>  
<?php

    $id = $_GET['id'];

    $page = find_page_by_id($id);

?>
<?php $page_title = 'Details';?>
<?php include(SHARED_PATH . '/staff_header.php');?>

<a class="back-link" href="<?php echo url_for('/assets/pages/index.php'); ?>">&laquo; Back to List</a>

<div class="content">
    <h1>Page: <?php echo h($page['menu_name']); ?></h1>

    <div class="attributes">
        <dl>
            <dt>Menu Name</dt>
            <dd><?php echo h($page['menu_name']); ?></dd>
        </dl>

        <dl>
            <dt>Position</dt>
            <dd><?php echo h($page['position']); ?></dd>
        </dl>
        
        <dl>
            <dt>Visible</dt>
            <dd><?php echo $page['visible'] == '1' ? 'true' : 'false'; ?></dd>
        </dl>
        <dl>
            <dt>Content</dt>
            <dd><?php echo h($page['content']); ?></dd>
        </dl>
    </div>
</div>
<?php include(SHARED_PATH . '/staff_footer.php');?>