<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soprano Coral & Orquestra</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Responsive Website Design | With Background Video Slider - Travel Website - HTML CSS & Javascript -->
</head>

<body>

    <header>
        <a href="" class="brand">Soprano</a>
        <div class="menu-btn">

        </div>

        <div class="navigation">
            <div class="navigation-itens">
                <a href="">Serviços</a>
                <a href="">Sobre</a>
                <a href="">Videos</a>
                <a href="">Contato</a>
            </div>
        </div>
    </header>

    <section class="home">
        <video class="video-slide active" src="1.mp4" autoplay muted loop></video>
        <video class="video-slide" src="2.mp4" autoplay muted loop></video>

        <div class="content">
            <h1>Casamentos
                <!--.<br><span>Island</span> -->
            </h1>
            <p>Somos um grupo musical especializado em cerimônias de casamento, receptivos, noivados e bodas.<br>

                Nossa maior missão é eternizar a sua história e despertar as emoções.</p>
            <a href="">Ler mais</a>
        </div>
        <div class="meida-icons">
            <a href="">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="">
                <i class="fab fa-twitter"></i>
            </a>
        </div>

        <div class="slider-navigation">
            <div class="nav-btn active"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
            <div class="nav-btn"></div>
        </div>
    </section>

    <script type="text/javascript">
        const menuBtn = document.querySelector('.menu-btn');
        const navigation = document.querySelector('.navigation');

        menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('active');
            navigation.classList.toggle('active');
        });

        //Javascript for video slider navigation
        const btns = document.querySelectorAll('.nav-btn');
        const slides = document.querySelectorAll('.video-slide');

        var sliderNav = function(manual) {
            btns.forEach((btn) => {
                btn.classList.remove('active');
            });
            slides.forEach((slide) => {
                slide.classList.remove('active');
            });

            btns[manual].classList.add('active');
            slides[manual].classList.add('active');
        }

        btns.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                sliderNav(index);
            });
        });
    </script>

</body>

</html>