<?php 
include '../public/src/config/conf.php';
include HEADER_PATH;
?>

<title>New Game</title>

<body>
    <a href="../index.php"><button type="button"><i class="fa-regular fa-circle-left"></i> Return</button></a>
    <main>
        <form action="../public/src/controllers/upload_controller.php" method="post" enctype="multipart/form-data">
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
                            <img src="../public/assets/svg/psp.svg" alt="psp" title="Play Station">
                        </label>
                        <input type="checkbox" id="psp" name="platforms[]" value="psp" required>
                    </div>
                    <div class="platform">
                        <label for="xbox">
                            <img src="../public/assets/svg/xbox.svg" alt="xbox" title="Xbox">
                        </label>
                        <input type="checkbox" id="xbox" name="platforms[]" value="xbox" required>
                    </div>
                    <div class="platform">
                        <label for="nintendo">
                            <img src="../public/assets/svg/nintendo.svg" alt="nintendo" title="Nintendo">
                        </label>
                        <input type="checkbox" id="nintendo" name="platforms[]" value="nintendo" required>
                    </div>
                    <div class="platform">
                        <label for="steam">
                            <img src="../public/assets/svg/steam.svg" alt="steam" title="Steam">
                        </label>
                        <input type="checkbox" id="steam" name="platforms[]" value="steam" required>
                    </div>
                    <div class="platform">
                        <label for="windows">
                            <img src="../public/assets/svg/windows.svg" alt="windows" title="Windows">
                        </label>
                        <input type="checkbox" id="windows" name="platforms[]" value="windows" required>
                    </div>
                    <div class="platform">
                        <label for="macos">
                            <img src="../public/assets/svg/macos_light.svg" width="1rem" alt="macos" title="macOS">
                        </label>
                        <input type="checkbox" id="macos" name="platforms[]" value="macos" required>
                    </div>
                    <div class="platform">
                        <label for="linux">
                            <img src="../public/assets/svg/linux.svg" alt="linux" title="Linux">
                        </label>
                        <input type="checkbox" id="linux" name="platforms[]" value="linux" required>
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

                        <input type="number" name="storage[0]" placeholder="storage">
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

                        <input type="number" name="storage[1]" placeholder="storage" required>
                    </div>
                </fieldset>
                <button type="submit"><i class="fa-solid fa-upload"></i> Upload</button>
            </div>
        </form>
    </main>
</body>

<?php include FOOTER_PATH; ?>