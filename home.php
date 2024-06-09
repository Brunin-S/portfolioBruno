<style>
.circle {
    width: 400px;
    height: 400px;
    border: 1px solid black;
    border-radius: 50%;
    overflow: hidden;
    position: relative;
}

.circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.container-circle {
    margin-left: 80px;
}

#home {
    background-color: #F9F9F9;
}

.container {
    display: flex;
    position: relative;
    z-index: 1;
    align-items: center;
    justify-content: center;
    padding: 50px;
    font-family: "Plus Jakarta Sans", sans-serif;
}

.box-left {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    width: 430px;
}

.box-left .emoji-glass {
    width: 50px;
    height: 50px;
    margin-left: 30px;
}

.box-left h1 {
    font-size: 50px;
    /* border: 1px solid black; */
}

.box-left .welcome {
    font-weight: 300;
    margin-top: 30px;
    /* border: 1px solid black; */
}

.icones {
    display: flex;
    margin: 30px 0px;
    /* border: 1px solid; */
    align-items: center;
    justify-content: center;
}

.icones .img1 {
    width: 40px;
    height: 40px;
    transition: 0.3s ease;
    margin-right: 10px;
}

.icones .img2 {
    width: 47px;
    height: 47px;
    transition: 0.3s ease;
}

.icones .img1:hover {
    transform: scale(1.4);
}

.icones .img2:hover {
    transform: scale(1.4);
}

.tech-stack {
    margin-top: 50px;
    display: flex;
    align-items: center;
    flex-direction: column;
}

.tech-stack h3 {
    font-size: 40px;
    margin-bottom: 15px;
    width: 260px;
    border-bottom: 1px solid;
    padding-bottom: 5px;
}

.tech-stack img {
    width: 100%;
    margin-top: 20px;
    transition: 0.3s ease;
}

.tech-stack img:hover {
    transform: scale(1.3);
}

/* ABOUT ME */
#about-me {
    background-color: #fff;
}

.container .mesa {
    width: 30%;
    border-radius: 20px;
    padding: 0;
}

.container #blue {
    font-size: 20px;
    color: blue;
    font-weight: bold;
    margin-bottom: 10px;
    margin-top: 20px;
}

#about-me .box-right {
    text-align: left;
    margin-left: 40px;
}

#about-me .text-info, .text-info2 {
    margin-top: 30px;
    color: gray;
    font-size: 18px;
}

#projects {
    background-color: #F9F9F9;
    font-size: 30px; 
}

#projects .container {
    display: flex;
    justify-content: center;
    height: 200px;
    flex-direction: column;
}

#projects #blue {
    margin: 0px 0px 30px;
}

#contact .container i {
    font-size: 40px;
}

#contact .contact-title {
    margin: 0px 0px 60px;
}

#contact .container {
    display: flex;
    text-align: center;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

#contact .container h2 {
    font-size: 15px;
    margin-bottom: 20px;
}

#contact .container .location {
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

#contact .container .message {
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.location p , .message p {
    margin-bottom: 20px;
}

#contact .icons {
    font-size: 30px;
    color: rgb(28, 111, 255);
}

#contact .bordas {
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    background-color: white;    
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .box-left {
        margin-right: 0;
        order: 2;
        display: flex;
        flex-direction: column;
    }

    .container-circle {
        margin-left: 0px;
    }

    .circle {
        margin-bottom: 30px;
        order: 1;
        width: 340px;
        height: 340px;
    }

    .box-left h1 {
        font-size: 36px;
    }

    .box-left h3 {
        font-size: 18px;
    }

    .box-left .welcome {
        margin: 20px 40px;
    }

    #about-me .container br {
        display: none;
    }

    .tech-stack img {
        width: 70%;
        height: 70%;
    }

    #about-me img {
        width: 100%;
    }

    #about-me .box-right {
        margin: 0px;
    }

    #projects .container h1 {
        font-size: 23px;
    }

    #projects .container {
        height: 100px;
    }

    #about-me #blue {
        text-align: center;
    }

    #projects .container h1 br {
        display: block;
    }

    
}

</style>
<section id="home">
    <div class="container">
        <div class="box-left">
            <h1 style="color: #2D2E32;">Front-End Web <br>Developer<img class="emoji-glass" src="imgs/emojis"
                    alt="emoji"></h1>
            <h3 class="welcome">Olá, eu sou Bruno Santana.<br>Um apaixonado por desenvolvimento Web
                nascido e criado na grande São Paulo. 📍</h3>
            <div class="icones">
                <a href="https://github.com/Brunin-S"><img class="img1" src="imgs/github.png" alt="icone-github"></a>
                <a href="https://www.linkedin.com/in/bruno-santana-7253b72ba/"><img class="img2" src="imgs/linkedins.png" alt="icone-linkedin"></a>
            </div>
            <div class="tech-stack">
                <h3>Tech Stack</h3>
                <img src="imgs/html.png" alt="icones-html-css-js">
                <img src="imgs/php.png" alt="icones-php-bootstrap">
            </div>
        </div>
        <div class="container-circle">
            <div class="circle">
                <img src="imgs/picbruno.png" alt="foto-bruno">
            </div>
        </div>

    </div>
</section>
<section id="about-me">
    <div class="container">
        <img class="mesa" src="imgs/mesa.jpg" alt="">
        <div class="box-right">
            <p id="blue">Sobre mim</p>
            <h2>Desenvolvedor front-end <br>de São Paulo, Brasil 📍</h2>
            <p class="text-info">
                Olá, meu nome é Bruno e sou Desenvolvedor Front-end. Minha paixão <br>é criar e desenvolver uma UI/UX limpa para
                meus usuários.
            </p>
            <p class="text-info2">
                Minha main stack principal atualmente é Javascript em combinação <br>com Tailwind CSS ou Bootstrap e TypeScript.
            </p>
        </div>
        <p></p>
    </div>

</section>
<section id="projects">
    <div class="container">
        <p id="blue">Projetos</p>
        <h1>Novos projetos estão por vir..</h1>
        <p>🤠</p>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="contact-title">
            <p id="blue">Contato</p>
            <h1>Não seja tímido, me chama aí! 👇</h1>
        </div>
        <div class="message">
            <div class="bordas"><i class="fab fa-whatsapp icons"></i></div>
            <div>
                <h2>Contatos</h2>
                <p>santanabruno.kg@gmail.com</p>
                <p>+55 (11)94458-4838</p>
            </div>
        </div>
        <div class="location">
            <div class="bordas"><i class="fas fa-map icons"></i></div>
            <div>
                <h2>Localização</h2>
                <p>São Paulo, Brasil</p>
            </div>
        </div>
    </div>
</section>
