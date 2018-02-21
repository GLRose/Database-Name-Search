<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "searchapp";

$search_value=$_POST["search"];
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    echo 'Connection Failed: '.$con->connect_error;
    }else{
        $sql="select * from people where firstname like '%$search_value%'";

        $res=$con->query($sql);

        while($row=$res->fetch_assoc()){
            echo 'Firstname:  '.$row["firstname"];


            }       

        }
?>
