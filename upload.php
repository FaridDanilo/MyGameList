<?php
include "assets/db/conn.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title_game = $_POST['title_game'];
    $description_game = $_POST['description_game'];

    $front_img_name = '';
    $env_img_name = '';

    if (isset($_FILES['front_page_img']) && $_FILES['front_page_img']['error'] === UPLOAD_ERR_OK) {
        $front_img_name = uniqid() . '_' . basename($_FILES['front_page_img']['name']);
        $front_dest = "uploads/" . $front_img_name;
        move_uploaded_file($_FILES['front_page_img']['tmp_name'], $front_dest);
    }

    if (isset($_FILES['enviroments_img']) && $_FILES['enviroments_img']['error'] === UPLOAD_ERR_OK) {
        $env_img_name = uniqid() . '_' . basename($_FILES['enviroments_img']['name']);
        $env_dest = "uploads/" . $env_img_name;
        move_uploaded_file($_FILES['enviroments_img']['tmp_name'], $env_dest);
    }

    $sql = "INSERT INTO games (front_page_img, title_game, description_game, enviroments_img) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $front_img_name, $title_game, $description_game, $env_img_name);
    $stmt->execute();
    header("Location: index.php");
}
?>