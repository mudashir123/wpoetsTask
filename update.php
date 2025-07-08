<?php
include 'db.php';
$id = $_POST['id'];
$tabName = $_POST['tab_name'];
$title = $_POST['title'];
$description = $_POST['description'];
$res = $conn->query("SELECT image FROM sliders WHERE id=$id");
$row = $res->fetch_assoc();
$imageName = $row['image'];
if (!empty($_FILES['image']['name'])) {
    $imageName = time() . '_' . basename($_FILES['image']['name']);
    $targetPath = "images/" . $imageName;
    move_uploaded_file($_FILES['image']['tmp_name'], $targetPath);
}
$sql = "UPDATE sliders SET tab_name=?, title=?, description=?, image=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssi", $tabName, $title, $description, $imageName, $id);
echo $stmt->execute() ? "success" : "error";
?>