<?php
 require 'db.php';
if (isset($_POST['import']))
	{
        $filename =$_FILES["file"]['tmp_name'];
        if($_FILES["file"]['size']>0)
        {
            $file = fopen($filename, "r");

            while (($data = fgetcsv($file, 1000, ",")) !== FALSE)
            {
                $sql = 'INSERT INTO reg_patient (names, age, regno, Assuarance, weight, sickness, medicine) VALUES(:names, :age, :regno, :Assuarance, :weight, :sickness, :medicine)';
                $statement = $connection->prepare($sql);
                $statement->execute([':names'=>$names, ':age'=>$age, ':regno'=>$regno, ':Assuarance'=>$Assuarance, ':weight'=>$weight, ':sickness'=>$sickness, ':medicine'=>$medicine]) {
                  }
            fclose($file);
            header("Location: index.php");
        }
        else
        {
            echo "File Size not Suported";
        }
	
 
	}
 
?>