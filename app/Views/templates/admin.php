<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicons -->
    <link href="<?= base_url(); ?>/assets/img/Icon/icons8-lightning-bolt-color-glass-16.png" rel="icon">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title><?= $title ?></title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <div class="text logo-text">
                    <span class="name">SatSet Website</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <li class="">
                    <a href="<?= base_url('admin/index'); ?>">
                        <i class='bx bx-home-alt icon'></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url('Home/porto'); ?>">
                        <i class='bx bx-receipt icon'></i>
                        <span class="text nav-text">Kelola Portfolio</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url('Home/kelolapaket'); ?>">
                        <i class='bx bx-notepad icon'></i>
                        <span class="text nav-text">Kelola Paket</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url('Home/kelolaform'); ?>">
                        <i class='bx bx-bar-chart-alt-2 icon'></i>
                        <span class="text nav-text">Kelola Formulir</span>
                    </a>
                </li>
                <li class="">
                    <a href="<?= base_url('Home/kelolaUlasan'); ?>">
                        <i class='bx bx-message-alt-minus icon'></i>
                        <span class="text nav-text">Kelola Ulasan</span>
                    </a>
                </li>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="<?= base_url('Home/profile'); ?>">
                        <i class='bx bx-cog icon'></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>
                <li class="#">
                    <a href="<?= base_url('Home/logout'); ?>">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
    <?= $this->renderSection('content'); ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?= base_url(); ?>/assets/js/sweetalert2.all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");
        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })
        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");
            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";
            }
        })
    </script>
</body>

</html>