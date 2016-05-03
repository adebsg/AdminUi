<h1>Profile Detail</h1>

<?php

echo "<table class='table table-striped table-bordered'>";
echo "<tr><td width='50px'>Profile</td><td>Category Name</td>
<td>Tag</td></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr data-key>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u939640556_bgs";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT `profile`.radius,category.category_name,
    profile_tag.detail_tag FROM profile_detail
    INNER JOIN `profile` ON profile_detail.id_profile = `profile`.id
    INNER JOIN category ON profile_detail.id_category = category.id_category
    INNER JOIN profile_tag ON profile_detail.id_profile_tag = profile_tag.id"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
