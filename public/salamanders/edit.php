<?php require_once('../../private/initialize.php'); 

if(!isset($_GET['id'])) {
  redirect_to(url_for('/salamanders/index.php'));
}
$id = $_GET['id'];
$salamanderName = '';

if(is_post_request()) {
  $salamanderName = $_POST['salamanderName'] ?? '';

  echo "Salamander Name: " . $salamanderName . "<br>";
}
?>

<?php $page_title = 'Edit Salamander'; 
require_once(SHARED_PATH . '/salamander-header.php');
?>

<div id="content">
  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to Lists</a>
  
  <div class="salamander edit">
    <h1>Edit salamander</h1>

    <form action="<?php echo url_for('/salamanders/edit.php?id=' . h(u($id))); ?>" method="post">
      <dl>
        <dt>Salamander Name</dt>
        <dd><input type="text" name="salamanderName" value="<?php echo $salamanderName; ?>"</dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Salamander">
      </div>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>