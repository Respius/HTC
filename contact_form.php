<?php

   $connection = mysqli_connect('localhost','root','','htc_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $help = $_POST['help'];
      $date = $_POST['date'];
      

      $request = " insert into contact_form(name, email, phone, address, help, date) values('$name','$email','$phone','$address','$help','$date') ";
      mysqli_query($connection, $request);

      header('location:contact.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>