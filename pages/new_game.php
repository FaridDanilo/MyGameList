<?php include "../source/config/conf.php"; ?>

<link rel="stylesheet" href="<?= ASSETS_URL ?>css/styles.css">
<title>New Game</title>

<body>
    <a href="../index.php"><button>Return</button></a>
    <main>
        <!-- <h2>Add new Game</h2> -->
        <form action="../source/config/upload.php" method="post" enctype="multipart/form-data">
            <div class="form-content">
                <input type="text" name="title_game" placeholder="Title Game" required>
                <textarea name="description_game" cols="50" placeholder="Description..." required></textarea>
                <input type="file" name="front_page_img" required>
                <input type="file" name="enviroments[]" accept="image/*" multiple required>
                <input type="file" name="mechanics[]" accept="image/*" multiple required>

                <fieldset>
                    <legend>Platforms</legend>
                    <label for="psp"><input type="checkbox" id="psp" name="platforms[]" value="psp">psp</label>
                    <label for="xbox"><input type="checkbox" id="xbox" name="platforms[]" value="xbox">xbox</label>
                    <label for="nintendo"><input type="checkbox" id="nintendo" name="platforms[]" value="nintendo">nintendo</label>
                    <label for="windows"><input type="checkbox" id="windows" name="platforms[]" value="windows">windows</label>
                    <label for="macos"><input type="checkbox" id="macos" name="platforms[]" value="macos">macos</label>
                    <label for="linux"><input type="checkbox" id="linux" name="platforms[]" value="linux">linux</label>
                </fieldset>

                <fieldset>
                    <legend>Requirements</legend>
                    <div class="requirements-content">
                        <p>Minimum:</p>
                        <select name="min_system_operating" id="">
                            <option value="" disabled selected>system operating</option>
                            <option value="wind64">win 64 bits</option>
                            <option value="wind32">win 32 bits</option>
                        </select>

                        <select name="cpu" id="">
                            <option value="" disabled selected>cpu</option>
                            <option value="intelcore">intel core</option>
                            <option value="amdryzen">amd ryzen</option>
                        </select>

                        <select name="ram" id="">
                            <option value="" disabled selected>memory ram</option>
                            <option value="ddr2">ddr2</option>
                            <option value="ddr3">ddr3</option>
                            <option value="ddr4">ddr4</option>
                            <option value="ddr5">ddr5</option>
                        </select>

                        <select name="gpu" id="">
                            <option value="" disabled selected>gpu</option>
                            <option value="nvideagraphics">nvidea graphics</option>
                            <option value="amdgraphics">amd graphics</option>
                        </select>

                        <input type="text" name="storage[0]" placeholder="storage">
                    </div>

                    <div class="requirements-content">
                        <p>Recommended:</p>
                        <select name="rec_system_operating" id="">
                            <option value="" disabled selected>system operating</option>
                            <option value="win64">win 64 bits</option>
                            <option value="win32">win 32 bits</option>
                        </select>

                        <select name="cpu" id="">
                            <option value="" disabled selected>cpu</option>
                            <option value="intelcore">intel core</option>
                            <option value="amd">amd ryzen</option>
                        </select>

                        <select name="ram" id="">
                            <option value="" disabled selected>memory ram</option>
                            <option value="ddr2">ddr2</option>
                            <option value="ddr3">ddr3</option>
                            <option value="ddr4">ddr4</option>
                            <option value="ddr5">ddr5</option>
                        </select>

                        <select name="gpu" id="">
                            <option value="" disabled selected>gpu</option>
                            <option value="nvideagraphics">nvidea graphics</option>
                            <option value="amdgraphics">amd graphics</option>
                        </select>

                        <input type="text" name="storage[1]" placeholder="storage">
                    </div>
                </fieldset>
                <button type="submit">Upload Game</button>
            </div>
        </form>
    </main>
</body>