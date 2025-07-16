<?php include "../source/config/conf.php"; ?>

<link rel="stylesheet" href="<?= ASSETS_URL ?>css/styles.css">
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>
<title>New Game</title>

<body>
    <a href="../index.php"><button>Return</button></a>
    <main>
        <!-- <h2>Add new Game</h2> -->
        <form action="../source/config/upload.php" method="post" enctype="multipart/form-data">
            <div class="form-content">
                <input type="text" name="title_game" placeholder="Title Game" required>
                <textarea name="description_game" cols="50" placeholder="Description..." required></textarea>
                <div class="dropzone" id="front-page-drop">
                    <span class="icon"><i class="fa-solid fa-image"></i></span>
                    <span>Front Page: Drag an image here or click to select</span>
                    <input type="file" name="front_page_img" accept="image/*" required>
                    <div class="file-list" id="front-page-list"></div>
                </div>

                <div class="dropzone" id="enviroments-drop">
                    <span class="icon"><i class="fa-solid fa-images"></i></span>
                    <span>Enviroments: Drag images here or click to select (you can select multiple)</span>
                    <input type="file" name="enviroments[]" accept="image/*" multiple required>
                    <div class="file-list" id="enviroments-list"></div>
                </div>

                <div class="dropzone" id="mechanics-drop">
                    <span class="icon">⚙️</span>
                    <span>Mechanics: Drag gif here or click to select (you can select multiple)</span>
                    <input type="file" name="mechanics[]" accept="image/*" multiple required>
                    <div class="file-list" id="mechanics-list"></div>
                </div>

                <fieldset class="fieldset-platforms">
                    <legend>Platforms</legend>
                    <div class="platform">
                        <label for="psp">
                            <img src="../public/assets/svg/psp.svg" alt="psp">
                        </label>
                        <input type="checkbox" id="psp" name="platforms[]" value="psp">
                    </div>
                    <div class="platform">
                        <label for="xbox">
                            <img src="../public/assets/svg/xbox.svg" alt="xbox">
                        </label>
                        <input type="checkbox" id="xbox" name="platforms[]" value="xbox">
                    </div>
                    <div class="platform">
                        <label for="nintendo">
                            <img src="../public/assets/svg/nintendo.svg" alt="nintendo">
                        </label>
                        <input type="checkbox" id="nintendo" name="platforms[]" value="nintendo">
                    </div>
                    <div class="platform">
                        <label for="windows">
                            <img src="../public/assets/svg/windows.svg" alt="windows">
                        </label>
                        <input type="checkbox" id="windows" name="platforms[]" value="windows">
                    </div>
                    <div class="platform">
                        <label for="macos">
                            <img src="../public/assets/svg/macos_light.svg" width="1rem" alt="macos">
                        </label>
                        <input type="checkbox" id="macos" name="platforms[]" value="macos">
                    </div>
                    <div class="platform">
                        <label for="linux">
                            <img src="../public/assets/svg/linux.svg" alt="linux">
                        </label>
                        <input type="checkbox" id="linux" name="platforms[]" value="linux">
                    </div>
                </fieldset>

                <fieldset class="fieldset-requirements">
                    <legend>Requirements</legend>
                    <div class="requirements-content">
                        <p>Minimum:</p>
                        <select name="os[0]" id="">
                            <option value="" disabled selected>system operating</option>
                            <option value="win64">win 64 bits</option>
                            <option value="win32">win 32 bits</option>
                        </select>

                        <select name="cpu[0]" id="">
                            <option value="" disabled selected>cpu</option>
                            <option value="intelcore">intel core</option>
                            <option value="amdryzen">amd ryzen</option>
                        </select>

                        <select name="ram[0]" id="">
                            <option value="" disabled selected>memory ram</option>
                            <option value="ddr2">ddr2</option>
                            <option value="ddr3">ddr3</option>
                            <option value="ddr4">ddr4</option>
                            <option value="ddr5">ddr5</option>
                        </select>

                        <select name="gpu[0]" id="">
                            <option value="" disabled selected>gpu</option>
                            <option value="nvideagraphics">nvidea graphics</option>
                            <option value="amdgraphics">amd graphics</option>
                        </select>

                        <input type="text" name="storage[0]" placeholder="storage">
                    </div>

                    <div class="requirements-content">
                        <p>Recommended:</p>
                        <select name="os[1]" id="">
                            <option value="" disabled selected>system operating</option>
                            <option value="win64">win 64 bits</option>
                            <option value="win32">win 32 bits</option>
                        </select>

                        <select name="cpu[1]" id="">
                            <option value="" disabled selected>cpu</option>
                            <option value="intelcore">intel core</option>
                            <option value="amdryzen">amd ryzen</option>
                        </select>

                        <select name="ram[1]" id="">
                            <option value="" disabled selected>memory ram</option>
                            <option value="ddr2">ddr2</option>
                            <option value="ddr3">ddr3</option>
                            <option value="ddr4">ddr4</option>
                            <option value="ddr5">ddr5</option>
                        </select>

                        <select name="gpu[1]" id="">
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
<script src="../public/assets/js/scripts.js"></script>