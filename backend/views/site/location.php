<h1>Location</h1>

<?php

echo "<table class='table table-striped table-bordered'>";
echo "<tr><td width='100px'>Location Name</td><td>Location Address</td>
	<td>Latitude</td><td>Longitude</td><td>Phone</td><td>IsPromo</td>
	<td>Photo</td><td>Location Here</td><td>Description</td><td>Location Tag</td>
    <td>Category Name</td></tr>";

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
    $stmt = $conn->prepare("SELECT location.location_name,location.location_address,
    location.latitude,location.longitude,location.phone,
    location.isPromo,location.photo,location.id_location_here,
    location.description,location.location_tag,category.category_name
    FROM location INNER JOIN category ON location.category_id = category.id_category"); 
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
