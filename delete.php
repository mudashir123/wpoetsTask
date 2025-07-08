<?php
include 'db.php';
$id = $_POST['id'];
$res = $conn->query("SELECT image FROM sliders WHERE id=$id");
if ($res->num_rows > 0) {
    $row = $res->fetch_assoc();
    $imagePath = 'images/' . $row['image'];
    if (file_exists($imagePath)) unlink($imagePath);
}
$conn->query("DELETE FROM sliders WHERE id=$id");
echo "deleted";
?>