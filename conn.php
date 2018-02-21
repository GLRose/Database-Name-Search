<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "searchapp";

        if(isset($_POST['submit'])){
        $search_value=$_POST["search"];
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error){
            echo 'Connection Failed: '.$con->connect_error;
            }else{
                $sql="select * from people where firstname like '%$search_value%' or lastname like '%$search_value%'";
    
                $res=$conn->query($sql);

                while($row=$res->fetch_assoc()){
                    echo $row["firstname"];
                
                    echo $row["lastname"];
                    echo "</br>";
                

                    }       

                }
            }
?>
