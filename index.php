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
    include_once('conn.php');
    ?>
</body>
</html>