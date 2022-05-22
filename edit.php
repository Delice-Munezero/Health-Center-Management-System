<?php
require 'db.php';
$id = $_GET['id'];
$sql = 'SELECT * FROM reg_patient WHERE id=:id';
$statement = $connection->prepare($sql);
$statement->execute([':id' => $id ]);
$person = $statement->fetch(PDO::FETCH_OBJ);
if (isset ($_POST['names'])  && isset($_POST['age'])&& isset($_POST['regno']) && isset($_POST['Assuarance']) && isset($_POST['weight']) && isset($_POST['sickness']) && isset($_POST['medicine']) ) {
  $names = $_POST['names'];
  $age = $_POST['age'];
  $regno = $_POST['regno'];
  $Assuarance = $_POST['Assuarance'];
  $weight = $_POST['weight'];
  $sickness = $_POST['sickness'];
  $medicine = $_POST['medicine'];
  $sql = 'INSERT INTO reg_patient SET names=:names, age=:age, regno=:regno, Assuarence=:Assuarance, weight=:weight, sickness=:sickness, medicine=:medicine)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':names'=>$names, ':age'=>$age, ':regno'=>$regno, ':Assuarance'=>$Assuarance, ':weight'=>$weight, ':sickness'=>$sickness, ':medicine'=>$medicine])) {
    header("Location: index.php");
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>Update person</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post" action="edit.php">
        <div class="form-group">
          <input value="<?= $person->names; ?>" type="text" name="names" id="name" class="form-control" >
          <input value="<?= $person->age; ?>" type="name" name="age" id="name" class="form-control">
          <input value="<?= $person->regno; ?>" type="text" name="regno" id="name" class="form-control" >
          <input value="<?= $person->Assuarance; ?>" type="text" name="Assuarance" id="name" class="form-control">
          <input value="<?= $person->weight; ?>" type="text" name="weight" id="name" class="form-control" >
          <input value="<?= $person->sickness; ?>" type="text" name="sickness" id="name" class="form-control" >
          <input value="<?= $person->medicine; ?>" type="text" name="medicine" id="name" class="form-control" >
          </div>
        <div class="form-group">
          <button type="submit" class="btn btn-info">Update person</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
