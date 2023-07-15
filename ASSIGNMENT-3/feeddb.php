<?php
$servername="root";
$username="localhost";
$password="";
$nm=$_POST['name'];
$em=$_POST['email'];
$ct=$_POST['contact'];
$ms=$_POST['msg'];
$con1=mysqli_connect("localhost","root");
// print_r($con1);
if(!$con1){
    die("sorry:we can't connect with server ".mysqli_connect_error());

}
else{
    echo "successfull ";
}
$db=mysqli_select_db($con1,"vivek");
$sql="INSERT INTO vivek_table(name,email,contact,msg)values('$nm','$em','$ct','$ms')";

$result=mysqli_query($con1,$sql);
if($result){
    echo "the database created successfully";

}
else{
    echo "the database is not created".mysqli_error($con1);
}
?>