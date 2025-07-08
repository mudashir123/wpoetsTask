<?php
include 'db.php';
$data = [];
$result = $conn->query("SELECT * FROM sliders ORDER BY id ASC");
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}
echo json_encode($data);
?>