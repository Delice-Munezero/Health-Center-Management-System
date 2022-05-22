<?php
require 'db.php';
$message = '';
if (isset ($_POST['name'])  && isset($_POST['email']) ) {
  $name = $_POST['name'];
  $email = $_POST['password'];
  $sql = 'INSERT INTO nurse(name, password) VALUES(:name, :password)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':name' => $name, ':email' => $email])) {
    $message = 'data inserted successfully';
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>LOGIN FORM</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post">
        <div class="form-group">
          <label for="name">UserName</label>
          <input type="text" name="names" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">PassWord</label>
          <input type="password" name="age" id="email" class="form-control">
        </div>
        
        
        <div class="form-group">
          <button type="submit" class="btn btn-info">LOGIN</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require 'footer.php'; ?>
