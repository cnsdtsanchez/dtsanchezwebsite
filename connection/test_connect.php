<?php
require 'db_connect.php';

$result = $conn->query("SELECT * FROM services");
while ($row = $result->fetch_assoc()) {
    echo $row['service_name'] . "<br>";
}
?>