<?php?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/imagens/sinais-de-codigo.ico" type="image/x-icon"/>
    <!-- Google Fonts - Saira condensed -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- CSS DO PROJETO -->
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>PucDevAcademy</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <div class="container py-3">
            <button
                class="navbar-toggler ms-auto"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar-items"
                aria-controls="navbar-items"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbar-items">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link nav-link-scroll active" aria-current="page" href="#home"><i class="bi bi-house"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-scroll" href="#about"><i class="bi bi-code-square"></i> Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-scroll" href="#contact"><i class="bi bi-telephone"></i> Contato</a>
                    </li>
                    <a class="btn-login" href="/login/login.html" role="button">login/cadastro</a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Corpo e Logo -->
    <section class="showroom">    
        <div class="container" id="content">
            <img src="/imagens/LOGO2.png" alt="Logo" class="logo">
        </div>
        <div class="wellcome-body">
        <img src="/imagens/PC_ep.png" alt="pc" class="pc-img">
            <p><span class="cor-verde">Conectando</span> o talento <span class="cor-roxa">acadêmico</span> às <br>
                oportunidades do<span class="cor-roxa"> mercado de trabalho.</span></p>
        </div>
    </section>

    <!-- Sobre Nós -->
    <section class="about-us" id="about">
        <h2>Sobre Nós</h2>
        <div class="container">
            <div class="text">
                <p>Na PUCPR, o projeto "PucDevAcademy" capacita alunos a
                    desenvolverem softwares gratuitos para empresas e ONGs carentes
                    de recursos. Sob supervisão docente, os estudantes aplicam
                     conhecimentos teóricos em projetos reais, ganhando habilidades
                      técnicas e de gestão. Além de enriquecer seus currículos, contribuem
                       para o bem-estar social ao fornecerem soluções tecnológicas que
                        melhoram operações e impactam positivamente a comunidade.
                        Essa iniciativa promove a responsabilidade social da universidade,
                        fortalece laços comunitários e inspira uma abordagem de
                        aprendizado prático e solidário.</p>
            </div>
            <img src="/imagens/campus.jpg" alt="campus" class="campus-img" width="405" height="270">
        </div>
    </section>

    <!-- Footer -->
    <footer class="container-fluid" id="contact">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img class="logoPuc" src="/imagens/logo_pucpr_horizontal_monocromatico.png" alt="logoPUCPR">
            </div>
            <div class="col-md-4 text-center">
                <div class="texto_informacoes">
                    <h5>Telefone:<br>(41) 99277-2012</h5>
                    <h5>E-mail: <br>hotmilk.curitiba@pucpr.br</h5>
                    <h5>Endereço:<br>Rua Imaculada Conceição, 1430 • Prado Velho</h5>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="mapa-hotmilk">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3602.5356043580546!2d-49.25556108818815!3d-25.45378497745296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dce4f07e4d346b%3A0x280bed912bc03c41!2sHOTMILK!5e0!3m2!1spt-BR!2sbr!4v1710177584363!5m2!1spt-BR!2sbr" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
                </div>
            </div>
        </div>
    </footer>
    <script>
            function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }

document.addEventListener('DOMContentLoaded', function() {
        const aboutLink = document.querySelector('a[href="#about"]');
        const contactLink = document.querySelector('a[href="#contact"]');
        const homeLink = document.querySelector('a[href="#home"]');
        const navLinks = document.querySelectorAll('.nav-link-scroll');

    
        if (aboutLink) {
            aboutLink.addEventListener('click', function(e) {
                e.preventDefault(); 
                scrollToSection('about');

                
                navLinks.forEach(function(navLink) {
                    navLink.classList.remove('active');
                });
                this.classList.add('active');
            });
        }

        if (contactLink) {
            contactLink.addEventListener('click', function(e) {
                e.preventDefault(); 
                scrollToSection('contact');

                
                navLinks.forEach(function(navLink) {
                    navLink.classList.remove('active');
                });
                this.classList.add('active');
            });
        }

    
        if (homeLink) {
            homeLink.addEventListener('click', function(e) {
                e.preventDefault(); 
                window.scrollTo({ top: 0, behavior: 'smooth' });

                
                navLinks.forEach(function(navLink) {
                    navLink.classList.remove('active');
                });
                this.classList.add('active');
            });
        }

    
            navLinks.forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const sectionId = this.getAttribute('href').slice(1);
                    scrollToSection(sectionId);

                    
                    navLinks.forEach(function(navLink) {
                        navLink.classList.remove('active');
                    });

                    
                    this.classList.add('active');
                });
            });
        });

    </script> 
</body>
</html>
