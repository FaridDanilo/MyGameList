<?php include "conf.php";

include DB_CONN_URL;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title_game = trim($_POST['title_game']);
    $description_game = trim($_POST['description_game']);
    $platforms = isset($_POST['platforms']) ? implode(',', $_POST['platforms']) : '';

    // Requisitos mínimos
    $min_os = $_POST['os'][0];
    $min_cpu = $_POST['cpu'][0];
    $min_ram = $_POST['ram'][0];
    $min_gpu = $_POST['gpu'][0];
    $min_storage = $_POST['storage'][0];

    // Requisitos recomendados
    $rec_os = $_POST['os'][1];
    $rec_cpu = $_POST['cpu'][1];
    $rec_ram = $_POST['ram'][1];
    $rec_gpu = $_POST['gpu'][1];
    $rec_storage = $_POST['storage'][1];

    $upload_dir = '../../uploads/';

    // Subir imagen principal (front_page_img)
    $front_img_name = '';
    if (isset($_FILES['front_page_img']) && $_FILES['front_page_img']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['front_page_img']['name'], PATHINFO_EXTENSION);
        $ext = strtolower($ext);
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
            $front_img_name = uniqid() . '_' . basename($_FILES['front_page_img']['name']);
            move_uploaded_file($_FILES['front_page_img']['tmp_name'], $upload_dir . $front_img_name);
        }
    }

    // Insertar en tabla games
    $stmt = $conn->prepare("INSERT INTO games (title_game, description_game, platforms) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title_game, $description_game, $platforms);
    $stmt->execute();
    $game_id = $stmt->insert_id;

    // Insertar front image en tabla games_img
    if (!empty($front_img_name)) {
        $stmt_img = $conn->prepare("INSERT INTO games_img (game_id, img_type, img_path) VALUES (?, 'front', ?)");
        $stmt_img->bind_param("is", $game_id, $front_img_name);
        $stmt_img->execute();
    }

    // Función para subir múltiples imágenes (env, mech)
    function subirMultiplesImagenes($input_name, $img_type, $game_id, $upload_dir, $conn) {
        if (!isset($_FILES[$input_name])) return;

        foreach ($_FILES[$input_name]['tmp_name'] as $key => $tmp_name) {
            if ($_FILES[$input_name]['error'][$key] === UPLOAD_ERR_OK) {
                $ext = pathinfo($_FILES[$input_name]['name'][$key], PATHINFO_EXTENSION);
                $ext = strtolower($ext);
                if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp'])) continue;

                $filename = uniqid() . '_' . basename($_FILES[$input_name]['name'][$key]);
                move_uploaded_file($tmp_name, $upload_dir . $filename);

                $stmt = $conn->prepare("INSERT INTO games_img (game_id, img_type, img_path) VALUES (?, ?, ?)");
                $stmt->bind_param("iss", $game_id, $img_type, $filename);
                $stmt->execute();
            }
        }
    }

    subirMultiplesImagenes('enviroments', 'env', $game_id, $upload_dir, $conn);
    subirMultiplesImagenes('mechanics', 'mech', $game_id, $upload_dir, $conn);

    // Insertar requisitos en tabla requirements
    $stmt_req = $conn->prepare("INSERT INTO requirements (
        game_id, min_os, min_cpu, min_ram, min_gpu, min_storage,
        rec_os, rec_cpu, rec_ram, rec_gpu, rec_storage
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt_req->bind_param(
        "issssssssss", $game_id, $min_os, $min_cpu, $min_ram, $min_gpu, $min_storage, $rec_os, $rec_cpu, $rec_ram, $rec_gpu, $rec_storage
    );
    $stmt_req->execute();

    header("Location: ../../index.php");
    exit;

    $stmt->close();
    $conn->close();
    $stmt_img->close();
    $stmt_req->close();
}
?>