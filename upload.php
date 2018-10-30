<?php
  $db = mysqli_connect("localhost", "root", "", "astorweb");
if(isset($_POST['submit'])){
  $fileDestination = "uploads/".basename($_FILES['image']['name']);
  $fileTmpName = $_FILES['image']['tmp_name'];
  $fileName = $_POST['name'];
  $image = $_FILES['image']['name'];
  $fileCategory = $_POST['category'];
  $fileDescription = $_POST['description'];



$sql  = "INSERT INTO images (name, image, category, description) VALUES ('$fileName', '$image', '$fileCategory','$fileDescription')";
mysqli_query($db, $sql);



if(move_uploaded_file($fileTmpName, $fileDestination)){
  header("Location: projects.php?uploadsuccess");
}else{
  echo "There was an error!";
}

}
 ?>
