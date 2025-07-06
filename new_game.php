<?php
include "assets/config/conf.php";
?>

<link rel="stylesheet" href="<?= ASSETS_URL ?>css/styles.css">
<title>New Game</title>

<body>
    <a href="index.php"><button>Return</button></a>
    <main>
        <!-- <h2>Add new Game</h2> -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-content">
                <input type="text" name="title_game" placeholder="Title Game" required>
                <textarea name="description_game" cols="50" placeholder="Description..." required></textarea>
                <input type="file" name="front_page_img" required>
                <input type="file" name="enviroments_img" required>
                <input type="file" name="mechanics_clips" required>
                <fieldset>
                    <legend>Platforms</legend>
                    <label for="psp"><input type="checkbox" id="psp" name="psp">psp</label>
                    <label for="xbox"><input type="checkbox" id="xbox" name="xbox">xbox</label>
                    <label for="nintendo"><input type="checkbox" id="nintendo" name="nintendo">nintendo</label>
                    <label for="windows"><input type="checkbox" id="windows" name="windows">windows</label>
                    <label for="macos"><input type="checkbox" id="macos" name="macos">macos</label>
                    <label for="linux"><input type="checkbox" id="linux" name="linux">linux</label>
                </fieldset>
                <fieldset>
                    <legend>Requirements</legend>
                    <div class="requirements-content">
                        <p>Minimum:</p>
                        <select name="system_operating" id="">
                            <option value="" disabled selected>system operating</option>
                            <option value="">win 64 bits</option>
                            <option value="">win 64 bits</option>
                            <option value="">win 64 bits</option>
                        </select>
                        
                        <select name="cpu" id="">
                            <option value="" disabled selected>cpu</option>
                            <option value="">intel core</option>
                            <option value="">amd ryzen</option>
                        </select>
                        
                        <select name="ram" id="">
                            <option value="">memory ram</option>
                            <option value="">ddr2</option>
                            <option value="">ddr3</option>
                            <option value="">ddr4</option>
                            <option value="">ddr5</option>
                        </select>

                        <select name="gpu" id="">
                            <option value="" disabled selected>gpu</option>
                            <option value="">nvidea graphics</option>
                            <option value="">amd graphics</option>
                        </select>

                        <input type="text" placeholder="storage">
                    </div>
                    <div class="requirements-content">
                        <p>Recommended:</p>
                        <select name="system_operating" id="">
                            <option value="" disabled selected>system operating</option>
                            <option value="">win 64 bits</option>
                            <option value="">win 64 bits</option>
                            <option value="">win 64 bits</option>
                        </select>
                        
                        <select name="cpu" id="">
                            <option value="" disabled selected>cpu</option>
                            <option value="">intel core</option>
                            <option value="">amd ryzen</option>
                        </select>
                        
                        <select name="ram" id="">
                            <option value="">memory ram</option>
                            <option value="">ddr2</option>
                            <option value="">ddr3</option>
                            <option value="">ddr4</option>
                            <option value="">ddr5</option>
                        </select>

                        <select name="gpu" id="">
                            <option value="" disabled selected>gpu</option>
                            <option value="">nvidea graphics</option>
                            <option value="">amd graphics</option>
                        </select>

                        <input type="text" placeholder="storage">
                    </div>
                </fieldset>
                <button type="submit">Upload Game</button>
            </div>
        </form>
    </main>
</body>