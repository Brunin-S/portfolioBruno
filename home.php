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
    margin-left: 60px;
}

.home {
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
    width: 400px;
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

.icones .img1{
    width: 40px;
    height: 40px;
    transition: 0.3s ease;
    margin-right: 10px;
}

.icones .img2{
    width: 47px;
    height: 47px;
    transition: 0.3s ease;
}

.icones .img1:hover{
    transform: scale(1.4);;
}

.icones .img2:hover{
    transform: scale(1.4);;
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
    background-color: black;
}

#contact {
    background-color: black;
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


    .tech-stack img {
    width: 70%;
    height: 70%;
}
}
</style>
<section id="home">
        <div class="container">
            <div class="box-left">
                <h1 style="color: #2D2E32;">Front-End Web <br>Developer<img class="emoji-glass" src="imgs/emojis" alt="emoji"></h1>
                <h3 class="welcome">Olá, eu sou Bruno Santana.<br>Um apaixonado por desenvolvimento Front-end<br>
                nascido e criado na grande São Paulo. 📍</h3>
                <div class="icones">
                    <img class="img1" src="imgs/github.png" alt="icone-github">
                    <img class="img2" src="imgs/linkedins.png" alt="icone-linkedin">
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
            <div class="box-left">
                <h1 style="color: #2D2E32;">About Me</h1>
                
            </div>
            <div class="circle">
                <img src="imgs/sisifo.jfif" alt="foto-bruno">
            </div>
        </div>
</section>
<section id="projects">
        <div class="container">
            <div class="box-left">
                <h1 style="color: #2D2E32;">Projetos</h1>
            </div>
            <div class="circle">
                <img src="imgs/sisifo.jfif" alt="foto-bruno">
            </div>
        </div>
</section>
<section id="contact">
        <div class="container">
            <div class="box-left">
                <h1 style="color: #2D2E32;">Contato</h1>
            </div>
            <div class="circle">
                <img src="imgs/sisifo.jfif" alt="foto-bruno">
            </div>
        </div>
</section>

