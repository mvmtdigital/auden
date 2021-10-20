<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= isset($PageDescription) ? $PageDescription : " Auden"?>">

    <meta name="theme-color" content="#fff">
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">
    <meta name="msapplication-navbutton-color" content="#fff">

    <title>
        <?= isset($PageTitle) ? $PageTitle : "Auden"?>
    </title>

    <!-- script slick carrosel -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- style slick carrosel -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <!-- bootstrap 5 css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Style CSS -->
    <link rel="stylesheet" href="components/mobile-menu/css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/variables.css">
    <link rel="stylesheet" type="text/css" href="css/patterns.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
</head>

<body>

    <header>
        <div class="topbar">
            <div class="container">
                <nav class="contact-topbar">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="icon-contact">
                                    <img src="image/icons/icon-mail.svg" alt="">
                                </i>
                                <span>contato@auden.edu.br</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-contact">
                                    <img src="image/icons/icon-tel.svg" alt="">
                                </i>
                                <span>+55 11 94595-3398</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <div class="support-topbar">
                    <a href="#">
                        <i class="icon-support">
                            <img src="image/icons/icon-headphone.svg" alt="">
                        </i>
                        <span>Support & FQAs</span>
                    </a>
                </div>
            </div>
        </div>

        <main class="header-main">
            <div class="container">
                <div class="logo">
                    <a href="index"><img src="image/logo.svg" alt="Auden"></a>
                </div>
                <div class="search">
                    <input type="text">
                    <button class="send-search">
                        <img src="image/icons/icon-search.svg" alt="">
                    </button>
                </div>
                <nav class="actions-header">
                    <ul>
                        <li>
                            <a href="#" class="bt-action-auden">
                                <span>Partners</span>
                                <i class="icon-bt">
                                    <img class="icon-turquesa" src="image/icons/icon-world-turquesa.svg" alt="">
                                    <img class="icon-azul" src="image/icons/icon-world-azul.svg" alt="">
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="bt-action-auden">
                                <span>Alunos</span>
                                <img class="icon-turquesa" src="image/icons/icon-user-turquesa.svg" alt="">
                                <img class="icon-azul" src="image/icons/icon-user-azul.svg" alt="">
                                </i>
                            </a>
                        </li>
                    </ul>
                </nav>
                <nav class="actions-mobile">
                    <ul>
                        <li>
                            <button class="bt-open-search">
                                <span class="material-icons-outlined">
                                    search
                                </span>
                            </button>
                        </li>
                        <li>
                            <button class="menu-open">
                                <span class="material-icons-outlined">
                                    menu
                                </span>
                            </button>
                        </li>
                    </ul>
                </nav>
            </div>
        </main>

        <?php require('includes/organisms/menu.php'); ?>

    </header>

</body>

</html>