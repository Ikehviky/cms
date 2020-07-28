<?php require('../../../private/initialize.php')?>  

<?php $page_title = 'Details';?>
<?php include(SHARED_PATH . '/staff_header.php');?>

<a class="back-link" href="<?php echo url_for('/assets/pages/index.php'); ?>">&laquo; Back to List</a>

<div class="content">


    <?php
        $id = $_GET['id'];
        echo 'Page_ID : ' . h($id) ?? '1';
    ?>
</div>
<?php include(SHARED_PATH . '/staff_footer.php');?>