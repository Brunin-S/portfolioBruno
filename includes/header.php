<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bruno Santana | Dev Front-end</title>
    <!-- LINK DO CDN DO FONT AWESOME -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap');

    * {
        margin: 0;
        padding: 0;
    }

    html {
            scroll-behavior: smooth;
        }
    /* NAVBAR */
    .nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 5%;
        font-family: "Plus Jakarta Sans", sans-serif;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        height: 80px;
        position: relative;
        z-index: 2;
    }

    .nav .box-right a {
        text-decoration: none;
        color: black;
        margin: 0 10px;
        font-weight: 800;
    }

    #menu {
        font-size: 30px;
        display: none;
    }

    #menu-mobile {
        position: absolute;
        z-index: 3;
        background-color: #fff;
        height: 100vh;
        width: 100vw;
        top: 0;
        left: -100vw;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: left 0.3s ease;
    }

    #menu-mobile a,
    p {
        text-decoration: none;
        color: black;
        font-family: "Plus Jakarta Sans", sans-serif;
        font-weight: 500;
        font-size: 30px;
        padding: 30px;
    }

    #menu-mobile .close-menu {
        position: absolute;
        right: 0;
        top: 0;
        cursor: pointer;
    }

    .itens a:hover {
        color: blue;
    }

    @media (max-width: 768px) {
        #menu {
            display: block;
        }

        .itens {
            display: none;
        }


    }
    </style>
</head>

<body>  
    <nav class="nav">
        <h2>Bruno.dev</h2>
        <div class="box-right">
            <div class="itens">
                <a href="#home" onclick="scrollToSection('#home')">Home</a>
                <a href="#about-me" onclick="scrollToSection('#about-me')">Sobre</a>
                <a href="#projects" onclick="scrollToSection('#projects')">Projetos</a>
                <a href="#contact" onclick="scrollToSection('#contact')">Contato</a>
            </div>
            <i class="fa fa-bars" id="menu" onclick="openMenu()"></i>
        </div>
    </nav>
    <div id="menu-mobile">
        <p class="close-menu" onclick="closeMenu()">X</p>
        <a href="#home" onclick="scrollToSection('#home')">Home</a>
        <a href="#about-me" onclick="scrollToSection('#about-me')">Sobre</a>
        <a href="#projects" onclick="scrollToSection('#projects')">Projetos</a>
        <a href="#contact" onclick="scrollToSection('#contact')">Contato</a>
    </div>
    <script>
    function openMenu() {
        let menu = document.getElementById('menu-mobile');
        menu.style.left = "0";
    }

    function closeMenu() {
        let menu = document.getElementById('menu-mobile');
        menu.style.left = "-100vw";
    }

    function scrollToSection(sectionId) {
        let section = document.querySelector(sectionId);
        section.scrollIntoView({ behavior: 'smooth' }); // Adicionando o comportamento de rolagem suave
        closeMenu(); // Fechar o menu após clicar no link
    }
    </script>