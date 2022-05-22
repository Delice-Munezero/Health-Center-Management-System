<?php
require 'db.php';
$sql = 'SELECT * FROM reg_patient';
$statement = $connection->prepare($sql);
$statement->execute();
$reg_patient = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All Patience</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>Names</th>
          <th>Age</th>
          <th>Reg Number</th>
          <th>Assuarance</th>
          <th>Weight</th>
          <th>Sickness</th>
          <th>Medicine</th>
          <th>Action</th>
        </tr>
        <?php foreach($reg_patient as $person): ?>
          <tr>
            <td><?= $person->id; ?></td>
            <td><?= $person->names; ?></td>
            <td><?= $person->age; ?></td>
            <td><?= $person->regno; ?></td>
            <td><?= $person->Assuarance; ?></td>
            <td><?= $person->weight; ?></td>
            <td><?= $person->sickness; ?></td>
            <td><?= $person->medicine; ?></td>
            <td>
              <a href="edit.php?id=<?= $person->id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="delete.php?id=<?= $person->id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>



<?php require 'footer.php'; ?>


