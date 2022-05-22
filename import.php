<?php require 'header.php'; ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>upload file</h2>
        </div>
        <div class="card-body">
            <?php if(!empty($message)): ?>
            <div class="alert alert-success">
            <?= $message; ?>
            </div>
            <?php endif; ?>
            <form method="POST" action="fileupload.php" name="uploadExcel" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Upload Excel File</label>
                    <input type="file" name="file">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info" name="import" class="btn btn-primary btn-loading" data-loading-text="Loading...">Upload</button>
                </div>
            </form>
        </div>
  


    </div>


</div>