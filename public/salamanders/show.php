<?php require_once('../../private/initialize.php'); 

$id = $_GET['id'] ?? '1';

$salamander = find_salamander_by_id($id);

$page_title = 'Salamander Details';
include(SHARED_PATH . '/salamander-header.php'); 

?>

<h2>Salamander Details</h2>
<a href="<?php echo url_for('/salamanders/index.php'); ?>"><p>&laquo; Back to List</p></a>

<h3>Salamander: <?php echo h($salamander['name']); ?></h3>

<div class="attributes">
  <dl>
    <dt>ID:</dt>
    <dd><?php echo h($salamander['id']); ?></dd>
  </dl>
  <dl>
    <dt>Name:</dt>
    <dd><?php echo h($salamander['name']); ?></dd>
  </dl>
  <dl>
    <dt>Habitat:</dt>
    <dd><?php echo h($salamander['habitat']); ?></dd>
  </dl>
  <dl>
    <dt>Description:</dt>
    <dd><?php echo h($salamander['description']); ?></dd>
  </dl>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>
