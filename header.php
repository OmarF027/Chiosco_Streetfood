<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Il Chioschino Giallo</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/contatti.css">
    <link rel="stylesheet" href="css/mediaqueries.css">

    <style>
        /* Menu Toggle (Hamburger) */
        .menu-toggle {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: 40px;
            cursor: pointer;
            position: fixed;
            top: 25px;
            right: 20px;
            z-index: 1001;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }

        .menu-toggle span {
            display: block;
            width: 25px;
            height: 3px;
            background: #2C3E50;
            transition: all 0.3s;
            position: absolute;
        }

        .menu-toggle span:nth-child(1) {
            transform: translateY(-8px);
        }

        .menu-toggle span:nth-child(2) {
            transform: translateY(0);
        }

        .menu-toggle span:nth-child(3) {
            transform: translateY(8px);
        }

        /* Stato aperto - X simmetrica */
        .menu-toggle.open span:nth-child(1) {
            transform: rotate(45deg);
        }

        .menu-toggle.open span:nth-child(2) {
            opacity: 0;
        }

        .menu-toggle.open span:nth-child(3) {
            transform: rotate(-45deg);
        }

        /* Navigation (menu a tendina) */
        .navigation {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #000000;
            padding: 0;
            z-index: 999;
            opacity: 0;
            pointer-events: none;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateX(100%);
            transition: all 0.3s;
        }

        .navigation.open {
            display: flex;
            opacity: 1;
            pointer-events: auto;
            transform: translateX(0);
        }

        .navigation ul {
            display: flex;
            flex-direction: column;
            gap: 20px;
            list-style: none;
            text-align: center;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .navigation ul li a {
            text-decoration: none;
            color: #FFFFFF;
            font-size: 24px;
            font-weight: bold;
            padding: 15px 20px;
            border-radius: 6px;
            transition: background-color 0.3s, color 0.3s;
        }

        /* Hover giallo con testo nero */
        .navigation ul li a:hover,
        .navigation ul li a:focus {
            background-color: #FFD700;
            color: #000000;
            outline: none;
        }

        /* Colore attivo per i link (quando sono cliccati o selezionati) */
        .navigation ul li a:active,
        .navigation ul li a.selected {
            color: #3498DB;
        }

        /* Media Queries per dispositivi mobili */
        @media (max-width: 768px) {
            .menu-toggle {
                position: fixed;
                top: 25px;
                right: 20px;
            }

            .navigation {
                top: 0;
                left: 0;
                transform: translateX(0);
                width: 100%;
                height: 100%;
                background-color: #000000;
                padding: 0;
            }

            .navigation ul {
                flex-direction: column;
                gap: 20px;
                margin-top: 40px;
                padding: 0;
                align-items: center;
            }

            .navigation ul li a {
                font-size: 20px;
                padding: 12px 20px;
            }
        }

        /* Media Queries per dispositivi molto piccoli (come telefoni) */
        @media (max-width: 480px) {
            .navigation ul li a {
                font-size: 18px;
                padding: 10px 15px;
            }
        }

    </style>

</head>
<body>

<header>
    <div class="logo">
        <a href="index.php" aria-label="Vai alla home">
            <img src="img/logo.jpg" alt="Logo Il Chioschino Giallo" style="height: 60px;">
        </a>
    </div>

    <!-- Menu Toggle sempre visibile -->
    <div class="menu-toggle" id="menuToggle" aria-label="Apri menu" aria-expanded="false" aria-controls="main-navigation">
        <span></span>
        <span></span>
        <span></span>
    </div>

    <!-- Menu di navigazione -->
    <nav class="navigation" id="main-navigation">
        <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#menù">Menù</a></li>
        <li><a href="#contatti">Contatti</a></li>
        </ul>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.getElementById('menuToggle');
        const navigation = document.getElementById('main-navigation');
        const navLinks = document.querySelectorAll('#main-navigation a');

        menuToggle.addEventListener('click', function () {
            const isOpen = menuToggle.classList.toggle('open');
            navigation.classList.toggle('open');
            menuToggle.setAttribute('aria-expanded', isOpen);
        });

        // Chiudi menu cliccando fuori
        document.addEventListener('click', function(e) {
            if (!menuToggle.contains(e.target) && !navigation.contains(e.target)) {
                menuToggle.classList.remove('open');
                navigation.classList.remove('open');
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        });

        // Chiudi menu e fai scroll alla sezione
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                const targetSection = document.querySelector(targetId);

                if (targetSection) {
                    e.preventDefault();

                    // Chiudi il menu
                    menuToggle.classList.remove('open');
                    navigation.classList.remove('open');
                    menuToggle.setAttribute('aria-expanded', 'false');

                    // Scroll fluido
                    targetSection.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
</script>

</body>
</html>
