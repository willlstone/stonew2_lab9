<!-- This code builds a table under the pre-existing db "websys_project"-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "websys_project";

try {
    $my_pdo = new PDO("mysql:host=localhost");

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE product_info (
    id INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    product_name VARCHAR(30) NOT NULL,
    url VARCHAR(100) NOT NULL,
    price float(4),
    user_review int(2)
    )";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table product_info created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>