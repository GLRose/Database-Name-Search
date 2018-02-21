<!DOCTYPE html>
<head>
    <title>DB SEARCH</title>
</head>
<body>
    <div class='main'>
        <form action="index.php" method="POST">
            <input type="text" name="search"></input>
            <input type="submit" name="submit"></button>
        </form>
    </div>
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
</body>
</html>