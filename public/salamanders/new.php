<?php require_once('../../private/initialize.php'); 

if(is_post_request()) {
  $salamander = [];
  $salamander['name'] = $_POST['name'] ?? '';
  $salamander['habitat'] = $_POST['habitat'] ?? '';
  $salamander['description'] = $_POST['description'] ?? '';

  $result = insert_salamander($salamander);
  if($result === true) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('salamanders/show.php?id=' . $new_id));
  } else {
      $errors = $result;
  }
} else {
  
}
?>

<?php $page_title = 'Create Salamander'; ?>
<?php include(SHARED_PATH . '/salamander-header.php'); ?>

<div id="content">
  <a class="back-link" href="<?php echo url_for('/salamanders/index.php'); ?>">&laquo; Back to Lists</a>

  <div class="salamander new">
    <h1>Create Salamander</h1>

    <?php echo display_errors($errors); ?>
    <form action="<?php echo url_for('/salamanders/new.php'); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="name" value=""></dd>
      </dl>
      <dl>
        <dt>Habitat</dt>
        <dd><input type="text" name="habitat" value=""></dd>
      </dl>
      <dl>
        <dt>Description</dt>
        <dd><input type="text" name="description" value=""></dd>
      </dl>
      <div class="operations">
        <input type="submit" value="Create Salamander">
      </div>
    </form>
  </div>
</div>

<?php include(SHARED_PATH . '/salamander-footer.php'); ?>