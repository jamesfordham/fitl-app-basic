<?php
$id = $_REQUEST['id']; //ALLOWS US TO RETRIEVE VIA URL

$object = array(
    'title' => '',
    'Grade' => '',
    'Comments' => '',
);

//DB CONN
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';


$connection = new mysqli($servername, $username, $password);
if ($connection->connect_error) {
    echo 'Connection filed: ' . $connection->connect_error;
    exit;
}
//echo 'Connected OK';

$connection->select_db('fitl');
$sql = 'SELECT * FROM grades WHERE id = '. $id;
$result = $connection->query($sql);

if( $result->num_rows > 0 ) {
    $object = $result->fetch_assoc();
    //echo '<pre>';
   // print_r($object);
    //echo '</pre>';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Briars Team Selections Tracker</title>
</head>

<body>
<h1><?php echo $object['grade'];?></h1>
<p><?php echo $object['comments'];?></p>

</body>
</html>
