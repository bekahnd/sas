<?php require_once('../../private/initialize.php'); 

$id = $_GET['id'] ?? '1';

$page_title = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php'); 

?>

<h2>Salamander Details</h2>
<p>PAGE ID: <?php echo h($id); ?></p>

<a href="<?php echo url_for('/salamanders/index.php'); ?>"><p>&laquo; Back to List</p></a>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
