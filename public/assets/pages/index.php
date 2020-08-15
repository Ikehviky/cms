<?php require_once('../../../private/initialize.php'); ?>

<?php
$page_set = find_all_pages();
?>

<?php $page_title = 'Pages';?>
<?php include(SHARED_PATH . '/staff_header.php');?>

<div class="content">
    <div class="subject listing">
        <h1 class="subject">Pages</h1>
  
        <div class="actions">
            <a class="action" href="<?php echo url_for('/assets/pages/new.php') ?>">Create new Page</a>
        </div>

        <table class="list">
            <tr>
                <th>ID</th>
                <th>Subject ID</th>
                <th>Position</th>
                <th>Visible</th>
                <th>Name</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
                <th>&nbsp;</th>
            </tr>

            <?php while($page = mysqli_fetch_assoc($page_set)){?>
            <tr>
                <td><?php echo h($page['id']); ?></td>
                <td><?php echo h($page['subject_id']); ?></td>
                <td><?php echo h($page['position']) ?></td>
                <td><?php echo $page['visible'] == 1 ? 'true' : 'false'; ?></td>
                <td><?php echo h($page['menu_name']) ?></td>
                <td><a class= 'action' href="<?php echo url_for('/assets/pages/details.php?id=' . h(u($page['id'])))?> ">view</a></td>
                <td><a class= 'action' href="<?php echo url_for('/assets/pages/edit.php?id=' . h(u($page['id'])))?>">Edit</a></td>
                <td><a class= 'action' href="<?php echo url_for('/assets/pages/delete.php?id=' . h(u($page['id'])))?> ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </table>

        <?php mysqli_free_result($page_set); ?>
        
    </div>
</div>

<?php include(SHARED_PATH . '/staff_footer.php');?>