<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soprano Coral & Orquestra</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>

    <header>
        <a href="" class="brand">Soprano</a>
        <div class="menu-btn"></div>

        <div class="navigation">
            <div class="navigation-items">
                <a href="">Serviços</a>
                <a href="">Sobre</a>
                <a href="">Videos</a>
                <a href="">Contato</a>
            </div>
        </div>
    </header>

    <section class="home">
        <div class="content">
            <div class="service">
                <div class="service-image">
                    <img src="https://via.placeholder.com/200x200" alt="Service Image">
                </div>
                <div class="service-text">
                    <h2>Service Title</h2>
                    <p>Service Description Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel faucibus libero. Donec sed fermentum mi. Pellentesque malesuada ex ut sem congue, vel pulvinar elit venenatis. Curabitur eget metus et augue ultrices dictum. Vivamus pellentesque aliquet enim, eget placerat velit dictum eu. </p>
                </div>
            </div>
            <div class="service">
                <div class="service-image">
                    <img src="https://via.placeholder.com/200x200" alt="Service Image">
                </div>
                <div class="service-text">
                    <h2>Service Title</h2>
                    <p>Service Description Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel faucibus libero. Donec sed fermentum mi. Pellentesque malesuada ex ut sem congue, vel pulvinar elit venenatis. Curabitur eget metus et augue ultrices dictum. Vivamus pellentesque aliquet enim, eget placerat velit dictum eu. </p>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        const menuBtn = document.querySelector('.menu-btn');
        const navigation = document.querySelector('.navigation');

        menuBtn.addEventListener('click', () => {
            menuBtn.classList.toggle('active');
            navigation.classList.toggle('active');
        });
    </script>
</body>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    header {
        z-index: 999;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 200px;
        transition: .5s ease;
    }

    header .brand {
        color: #fff;
        font-size: 1.5em;
        font-weight: 700;
        text-transform: uppercase;
        text-decoration: none;
    }

    header .navigation {
        position: relative;
    }

    header .navigation .navigation-itens a {
        position: relative;
        color: #fff;
        font-size: 1em;
        font-weight: 500;
        text-decoration: none;
        margin-left: 30px;
        transition: 0.3s ease;
    }

    header .navigation .navigation-itens a:before {
        content: '';
        position: absolute;
        background: #fff;
        width: 0;
        height: 3px;
        bottom: 0;
        left: 0;
        transition: .3s ease;
    }

    header .navigation .navigation-itens a:hover:before {
        width: 100%;
    }

    section {
        padding: 100px 200px;
    }

    .home {
        position: relative;
        width: 100%;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        flex-direction: column;
        background: #bf9850;
    }

    .home:before {
        z-index: 777;
        content: '';
        position: absolute;
        background: rgba(242, 223, 128, .3);
        /*COR DA OPACIDADE DO VIDEO*/
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }

    .home .content {
        z-index: 888;
        color: #fff;
        width: 70%;
        margin-top: 50px;
    }

    @media (max-width: 1040px) {
        header {
            padding: 12px 20px;
        }

        section {
            padding: 100px 20px;
        }

        .home .media-icons {
            right: 15px;
        }

        header .navigation {
            display: none;
        }

        header .navigation.active {
            position: fixed;
            width: 100%;
            height: 100vh;
            top: 0%;
            left: 0;
            background: rgba(1, 1, 1, 0.5);
            transition: .5s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header .navigation .navigation-itens a {
            color: #222;
            font-size: 1.2em;
            margin: 20px;
        }

        header .navigation .navigation-itens a:before {
            background: #222;
            height: 5px;
        }

        header .navigation .navigation-itens {
            background: #fff;
            width: 600px;
            max-width: 600px;
            margin: 20px;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 5px;
            box-shadow: 0 5px 25px rgba(1 1 1 / 20%);
        }

        .menu-btn {
            background: url(menu.png) no-repeat;
            background-size: 30px;
            background-position: center;
            width: 40px;
            height: 40px;
            cursor: pointer;
            transition: 0.3 ease;
        }

        .menu-btn.active {
            z-index: 999;
            background: url(close.png) no-repeat;
            background-size: 25px;
            background-position: center;
            transition: 0.3 ease;
        }
    }
</style>

<style>
    .content .service {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .content .service-image {
        width: 200px;
        height: 200px;
        margin-right: 20px;
        object-fit: cover;
    }

    .content .service-image img {
        display: block;
        width: 100%;
        height: 100%;
    }

    .content .service-text {
        flex: 1;
        padding: 10px;
    }

    .content .service-text h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .content .service-text p {
        font-size: 16px;
        margin-bottom: 0;
    }

    .content .service-image img:hover {
        transform: scale(1.1);
        transition: transform 0.3s ease-in-out;
    }

    .content .service-text:hover {
        box-shadow: 2px 4px 10px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s ease-in-out;
    }
</style>

</html>