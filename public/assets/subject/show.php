<?php require('../../../private/initialize.php')?>  

<?php $page_title = 'Show';?>
<?php include(SHARED_PATH . '/staff_header.php');?>
<div class="content">
    <?php
        $id = $_GET['id'];
        echo 'Page_ID : ' . h($id) ?? '1';
    ?>
</div>
<?php include(SHARED_PATH . '/staff_footer.php');?>