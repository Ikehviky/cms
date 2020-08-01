<?php require_once('../../private/initialize.php'); ?>

<?php $page_title = 'Menu'?>
<?php include(SHARED_PATH . '/staff_header.php');?>

<div class="content">
    <div id="main-menu">
        <h2 class="subject">Main Menu</h2>
        <ul>
            <li><a class="menu" href="<?php echo url_for('/assets/subject/index.php');?>">Subjects</a></li>
            <li><a class="menu" href="<?php echo url_for('/assets/pages/index.php');?>">Pages</a></li>
        </ul>
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php');?>


    