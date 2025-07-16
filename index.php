<?php include "source/config/conf.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= ASSETS_URL ?>css/styles.css">
    <title>My Game List</title>
</head>

<body>
    <header>
        <nav>
            <div class="dropdown">
                <button class="dropdown-btn">Games List<i class="fa-solid fa-gamepad"></i></button>
                <ul class="dropdown-content">
                    <li><a href="#">(...)</a></li>
                    <li><a href="#">(...)</a></li>
                    <li><a href="#">(...)</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <button class="dropdown-btn">Add New Game<i class="fa-solid fa-plus"></i></button>
                <ul class="dropdown-content">
                    <li><a href="pages/new_game.php">New Game</a></li>
                    <li><a href="#">New Sequel</a></li>
                    <li><a href="#">New DLC</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <h1 class="title-game">Ghost Of Tsushima</h1>
        <div class="main-content">
            <div class="description">
                <picture><img src="public/assets/img/ghost_of_tushima/front-page/ghost_of_tsushima.jpg" alt="Front Page">
                </picture>
                <p>It is an open-world action game set in feudal Japan. The protagonist is Jin Sakai, a samurai who
                    risks everything to defend the island of Tsushima from the Mongol invasion. Frequent sword fights
                    take place in third-person melee and ranged combat. Successful attacks can result in dismemberment
                    and decapitation, often accompanied by large splashes of blood. Players can also use stealth to
                    dispatch their enemies unseen. Cinematics and other scenes show further examples of extreme violence
                    and gore, including a scene in which a civilian is burned alive, another in which a decapitated
                    person is shown, and the decapitated man's head is raised in front of the camera. Red blood can be
                    seen in the environment, on clothing, and splattering after successful attacks.</p>
            </div>

            <div class="environments">
                <h2>Environments</h2>
                <div class="content">
                    <div class="slideshow-container">
                        <div>
                            <picture><img src="public/assets/img/ghost_of_tushima/environments/env_1.jpeg" alt="Env_1"></picture>
                        </div>

                        <div>
                            <picture><img src="public/assets/img/ghost_of_tushima/environments/env_2.jpeg" alt="Env_2"></picture>
                        </div>

                        <div>
                            <picture><img src="public/assets/img/ghost_of_tushima/environments/env_3.jpeg" alt="Env_3"></picture>
                        </div>

                        <div>
                            <picture><img src="public/assets/img/ghost_of_tushima/environments/env_4.jpeg" alt="Env_4"></picture>
                        </div>

                        <div>
                            <picture><img src="public/assets/img/ghost_of_tushima/environments/env_5.jpeg" alt="Env_5"></picture>
                        </div>
                    </div>
                    <button class="prev-slide"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="next-slide"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="mechanics">
                <div class="content">
                    <!-- Pendiente -->
                </div>
            </div>

            <div class="platforms">
                <h2>Platforms</h2>
                <div class="content">
                    <div class="box">
                        <img class="platforms-icon" src="public/assets/svg/psp.svg" alt="psp">
                    </div>

                    <div class="box">
                        <img class="platforms-icon" src="public/assets/svg/xbox.svg" alt="xbox">
                    </div>

                    <div class="box">
                        <img class="platforms-icon" src="public/assets/svg/steam.svg" alt="steam">
                    </div>
                </div>
            </div>

            <div class="requirements">
                <h2>Requirements</h2>
                <div class="content">
                    <div class="minimum">
                        <h3><strong>Minimum:</strong></h3>
                        <p>Requires a processor and a 64 -bit operating system</p>
                        <p>Processor: <span>Intel Core i3-7100 or AMD Ryzen 3 1200</span></p>
                        <p>Memory: <span>8 GB de RAM</span></p>
                        <p>Graphics: <span>NVIDIA GeForce GTX 960 or AMD Radeon RX 5500 XT</span></p>
                        <p>Storage: <span>75 GB of available space</span></p>
                        <p>Aditional Notes: SSD Recommended</p>
                    </div>

                    <div class="recommended">
                        <h3><strong>Recomended:</strong></h3>
                        <p>Requires a processor and a 64 -bit operating system</p>
                        <p>Processor: <span> Intel Core i5-8600 or AMD Ryzen 5 3600</span></p>
                        <p>Memory: <span>16 GB de RAM</span></p>
                        <p>Graphics: <span>NVIDIA GeForce RTX 2060 or AMD Radeon RX 5600 XT</span></p>
                        <p>Storage: <span>75 GB of available space</span></p>
                        <p>Aditional Notes: SSD Recommended</p>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script src="<?= ASSETS_URL ?>js/scripts.js"></script>
</body>

</html>