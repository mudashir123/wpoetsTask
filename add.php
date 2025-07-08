<?php
include 'db.php';
$tabName = $_POST['tab_name'];
$title = $_POST['title'];
$description = $_POST['description'];
$imageName = '';
if (!empty($_FILES['image']['name'])) {
    $imageName = time() . '_' . basename($_FILES['image']['name']);
    $targetPath = "images/" . $imageName;
    move_uploaded_file($_FILES['image']['tmp_name'], $targetPath);
}
$sql = "INSERT INTO sliders (tab_name, title, description, image) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $tabName, $title, $description, $imageName);
echo $stmt->execute() ? "success" : "error";
?>