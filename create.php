<?php
require 'db.php';
$message = '';
if (isset ($_POST['names'])  && isset($_POST['age'])&& isset($_POST['regno']) && isset($_POST['Assuarance']) && isset($_POST['weight']) && isset($_POST['sickness']) && isset($_POST['medicine']) ) {
  $names = $_POST['names'];
  $age = $_POST['age'];
  $regno = $_POST['regno'];
  $Assuarance = $_POST['Assuarance'];
  $weight = $_POST['weight'];
  $sickness = $_POST['sickness'];
  $medicine = $_POST['medicine'];
  $sql = 'INSERT INTO reg_patient (names, age, regno, Assuarance, weight, sickness, medicine) VALUES(:names, :age, :regno, :Assuarance, :weight, :sickness, :medicine)';
  $statement = $connection->prepare($sql);
  if ($statement->execute([':names'=>$names, ':age'=>$age, ':regno'=>$regno, ':Assuarance'=>$Assuarance, ':weight'=>$weight, ':sickness'=>$sickness, ':medicine'=>$medicine])) {
    $message = 'data inserted successfully';
  }



}


 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>ADD PATIENT</h2>
    </div>
    <div class="card-body">
      <?php if(!empty($message)): ?>
        <div class="alert alert-success">
          <?= $message; ?>
        </div>
      <?php endif; ?>
      <form method="post" action="create.php">
        <div class="form-group">
          
          <input type="text" name="names" id="name" class="form-control" placeholder="Enter Full Names">
          <input type="name" name="age" id="name" class="form-control" placeholder="Enter the Ages">
          <input type="text" name="regno" id="name" class="form-control" placeholder="Enter Registration Number">
          <input type="text" name="Assuarance" id="name" class="form-control" placeholder="Enter Assurance eg: RAMA , MMI, MUSA">
          <input type="text" name="weight" id="name" class="form-control" placeholder="Enter Weight in Kg eg:70">
          <input type="text" name="sickness" id="name" class="form-control" placeholder="Enter the Sickness">
          <input type="text" name="medicine" id="name" class="form-control" placeholder="Enter the Medicine">
          <button type="submit" class="btn btn-info">REGISTER</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php require 'footer.php'; ?>
