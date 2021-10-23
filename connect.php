<?php
  $firstname=$_POST['firstname'];
  $email=$_POST['email'];
  $pass=$_POST['pass'];
  $addr=$_POST['addr'];
  $phone=$_POST['phone'];

  $conn=new mysqli('localhost','root','','plant');
  if($conn->connect_error){
    die('connection failed:'.$conn->connect_error);

  }else{
    $stmt=$conn->prepare("insert into registration(firstname,email,pass,addr,phone) values(?,?,?,?,?)");
    $stmt->bind_param("ssssi",$firstname,$email,$pass,$addr,$phone);
    $stmt->execute();
    echo"registration successfully...";
    $stmt->close();
    $conn->close();

    
  }
  
  

?>



