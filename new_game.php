<?php
include "assets/config/conf.php";
?>

<link rel="stylesheet" href="<?= ASSETS_URL ?>css/styles.css">
<title>New Game</title>

<body>
    <a href="index.php"><button>Return</button></a>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="form-content">
            <input type="file" name="front_page_img">
            <input type="text" name="title_game" placeholder="Title Game">
            <textarea name="description_game" cols="50" placeholder="Description..."></textarea>
            <input type="file" name="enviroments_img">
            <button type="submit">Upload Game</button>
        </div>
    </form>
</body>