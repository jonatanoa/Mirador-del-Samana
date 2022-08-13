<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <link rel="stylesheet" href="./index.html">
    <link rel="shortcut icon" href="/images/logo.png" />
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"><!--main-->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"><!--sub-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"><!--description, paragraph-->
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Courgette&family=Patrick+Hand&display=swap" rel="stylesheet"><!--description, title-->
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet"><!--description title-->
    <!--icons-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Galería de fotos</title>
</head>
<body>
    <section class="navigation"> <!--menú-->
        <div class="userBx">
            <div class="imgBx">
                <img class="img" src="images/logo.png">
            </div>
            <p class="titlemenu">¡Bienvenidos!</p>
        </div>
        <div class="menuToggle"></div>
        <div class="menu">
            <li class="list"><a class="link" href="./index.html"><ion-icon name="home-outline"></ion-icon>
                Inicio</a></li>
            <li class="list">
                <a class="link" href="#"><ion-icon name="images-outline"></ion-icon>
                Galeria
                    <li class="list-gastronomy"><a href="#exterior" class="a-gastronomy"><i class="icon-g fa fa-pagelines" aria-hidden="true"></i>Exterior</a></li>
                    <li class="list-gastronomy"><a href="#interior" class="a-gastronomy"><ion-icon class="icon-g" name="bed-outline"></ion-icon>Interior</a></li>
                    <li class="list-gastronomy"><a href="#gastronomia" class="a-gastronomy"><i class="icon-g fa fa-cutlery" aria-hidden="true"></i>Gastronomía</a></li>
                    <li class="list-gastronomy"><a href="#bar" class="a-gastronomy"><ion-icon class="icon-g" name="beer-outline"></ion-icon>Bar</a></li>
                </a></li>
            <li class="list"><a class="link" href="./index.html#about"><ion-icon name="newspaper-outline"></ion-icon>
                ¿Quienes somos?</a></li>
            <li class="list"><a class="link" href="./index.html#ubicacion"><ion-icon name="map-outline"></ion-icon>
                Nuestra ubicación</a></li>
            <li class="list"><a class="link" href="./index.html#reseña"><ion-icon name="chatbox-ellipses-outline"></ion-icon>
                Reseñas</a></li>
            <li class="list"><a class="link" href="./index.html#contacto"><ion-icon name="call-outline"></ion-icon>
                Contactos</a></li>
        </div>
    </section>
    <section class="gallery"> <!--Gallery-->
        <div id="exterior" class="gallery-container"><!--exterior-->
            <h3 class="gallery-title">Exterior</h3>
            <div class="gallery-bx">
                <div class="gallery-card">
                    <a href="images/fotos/65.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/65.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/26.jpg" data-lightbox="Gallery" data-title="Un lugar mágico ">
                        <img class="card" src="images/fotos/26.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/27.jpg" data-lightbox="Gallery">
                        <img class="card img12" src="images/fotos/27.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/3.jpg" data-lightbox="Gallery" data-title="Túnel antes de llegar al hotel">
                        <img class="card img2" src="images/fotos/3.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/4.jpg" data-lightbox="Gallery" data-title="Hermosas cascadas">
                        <img class="card img3" src="images/fotos/4.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/6.jpg" data-lightbox="Gallery" >
                        <img class="card img4" src="images/fotos/6.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/52.jpg" data-lightbox="Gallery" data-title="Balcones donde se respira aire puro">
                        <img class="card img4" src="images/fotos/52.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/5.jpg" data-lightbox="Gallery" >
                        <img class="card img5" src="images/fotos/5.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/7.jpg" data-lightbox="Gallery" >
                        <img class="card img6" src="images/fotos/7.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/8.jpg" data-lightbox="Gallery" data-title="Reuniones de familias y amigos">
                        <img class="card img7" src="images/fotos/8.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/9.jpg" data-lightbox="Gallery" >
                        <img class="card img8" src="images/fotos/9.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/79.jpg" data-lightbox="Gallery"data-title="Vista desde el aire" >
                        <img class="card img8" src="images/fotos/79.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/11.jpg" data-lightbox="Gallery" >
                        <img class="card img9" src="images/fotos/11.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/13.jpg" data-lightbox="Gallery" >
                        <img class="card img10" src="images/fotos/13.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/66.jpg" data-lightbox="Gallery" >
                        <img class="card img4" src="images/fotos/66.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/18.jpg" data-lightbox="Gallery" data-title="Un baño en el río ">
                        <img class="card img11" src="images/fotos/18.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/19.jpg" data-lightbox="Gallery" data-title="El charco del palo">
                        <img class="card img12" src="images/fotos/19.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/20.jpg" data-lightbox="Gallery" data-title="Una tarde en las siete cascadas del espíritu santo">
                        <img class="card img12" src="images/fotos/20.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/24.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/24.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/30.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/30.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/36.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/36.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/37.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/37.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/38.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/38.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/42.jpg" data-lightbox="Gallery" data-title="Camping al aire libre ">
                        <img class="card img12" src="images/fotos/42.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/45.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/45.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/53.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/53.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/56.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/56.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/64.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/64.jpg">
                    </a>
                </div>
            </div>
        </div>
        <div id="interior" class="gallery-container"> <!--room-->
            <h3 class="gallery-title">Interior</h3>
            <div class="gallery-bx">
                <div class="gallery-card">
                    <a href="images/fotos/14.jpg" data-lightbox="Gallery" data-title="Decoración para ocasiones especiales ">
                        <img class="card" src="images/fotos/14.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/17.jpg" data-lightbox="Gallery" >
                        <img class="card img2" src="images/fotos/17.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/28.jpg" data-lightbox="Gallery">
                        <img class="card img3" src="images/fotos/28.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/29.jpg" data-lightbox="Gallery" data-title="Habitaciones impecables ">
                        <img class="card img4" src="images/fotos/29.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/32.jpg" data-lightbox="Gallery" >
                        <img class="card img5" src="images/fotos/32.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/33.jpg" data-lightbox="Gallery" >
                        <img class="card img6" src="images/fotos/33.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/35.jpg" data-lightbox="Gallery" >
                        <img class="card img7" src="images/fotos/35.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/39.jpg" data-lightbox="Gallery" >
                        <img class="card img8" src="images/fotos/39.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/44.jpg" data-lightbox="Gallery" >
                        <img class="card img10" src="images/fotos/44.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/47.jpg" data-lightbox="Gallery" >
                        <img class="card img11" src="images/fotos/47.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/48.jpg" data-lightbox="Gallery" data-title="Habitaciones para tener el descanso que te mereces ">
                        <img class="card img11" src="images/fotos/48.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/51.jpg" data-lightbox="Gallery" >
                        <img class="card img12" src="images/fotos/51.jpg">
                    </a>
                </div>
            </div>
        </div>
        <div id="gastronomia" class="gallery-container"><!--gastronomy-->
            <h3 class="gallery-title">Gastronomía</h3>
            <div class="gallery-bx">
                <div class="gallery-card">
                    <a href="images/fotos/1.jpg" data-lightbox="Gallery" data-title="Preparando la mesa para un delicioso almuerzo">
                        <img class="card" src="images/fotos/1.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/21.jpg" data-lightbox="Gallery" data-title="Ricos tamales ">
                        <img class="card img2" src="images/fotos/21.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/61.jpg" data-lightbox="Gallery" >
                        <img class="card img3" src="images/fotos/61.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/68.jpg" data-lightbox="Gallery" data-title="Tarde de asados">
                        <img class="card img4" src="images/fotos/68.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/73.jpg" data-lightbox="Gallery" data-title="Un rico plato de trucha  &#x1F924">
                        <img class="card img4" src="images/fotos/73.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/74.jpg" data-lightbox="Gallery" >
                        <img class="card img4" src="images/fotos/74.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/75.jpg" data-lightbox="Gallery" >
                        <img class="card img4" src="images/fotos/75.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/80.jpg" data-lightbox="Gallery"  >
                        <img class="card img4" src="images/fotos/80.jpg">
                    </a>
                </div>
                <div class="gallery-card  wide">
                    <a href="images/fotos/81.jpg" data-lightbox="Gallery" data-title="Almuerzo familiar" >
                        <img class="card img4" src="images/fotos/81.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/76.jpg" data-lightbox="Gallery" data-title="Costillas asadas &#128521">
                        <img class="card img4" src="images/fotos/76.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/77.jpg" data-lightbox="Gallery" >
                        <img class="card img4" src="images/fotos/77.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/78.jpg" data-lightbox="Gallery" >
                        <img class="card img4" src="images/fotos/78.jpg">
                    </a>
                </div>
            </div>
        </div>
        <div id="bar" class="gallery-container"><!--bar-->
            <h3 class="gallery-title">Bar</h3>
            <div class="gallery-bx">
                <div class="gallery-card">
                    <a href="images/fotos/23.jpg" data-lightbox="Gallery" data-title="My caption">
                        <img class="card" src="images/fotos/23.jpg">
                    </a>
                </div>
                <div class="gallery-card wide">
                    <a href="images/fotos/10.jpg" data-lightbox="Gallery" data-title="¿Un trago? &#127867">
                        <img class="card img2" src="images/fotos/10.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/2.jpg" data-lightbox="Gallery" data-title="Que tal un Baileys &#127870">
                        <img class="card img3" src="images/fotos/2.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/25.jpg" data-lightbox="Gallery" data-title="My caption">
                        <img class="card img4" src="images/fotos/25.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/55.jpg" data-lightbox="Gallery" data-title="My caption">
                        <img class="card img5" src="images/fotos/55.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/58.jpg" data-lightbox="Gallery" data-title="My caption">
                        <img class="card img6" src="images/fotos/58.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/69.jpg" data-lightbox="Gallery" data-title="My caption">
                        <img class="card img6" src="images/fotos/69.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/70.jpg" data-lightbox="Gallery" data-title="My caption">
                        <img class="card img6" src="images/fotos/70.jpg">
                    </a>
                </div>
                <div class="gallery-card">
                    <a href="images/fotos/71.jpg" data-lightbox="Gallery" data-title="My caption">
                        <img class="card img6" src="images/fotos/71.jpg">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="footer"> <!--footer-->
        <div class="footer-bx">
            <div class="footer-bx-content">
                <div class="footer-bx-content-imgBx">
                    <img class="footer-bx-content-imgBx-img" src="images/logo.png">
                </div>
                <div class="footer-bx-content-bx">
                    <h3 class="footer-bx-content-bx-title">¿Deseas mas información?</h3>
                    <div class="footer-bx-content-bx-contactBx">
                        <div class="footer-bx-content-bx-contactBx-contacts">
                            <ul class="footer-bx-content-bx-contactBx-contacts-icon">
                                <i class="fa fa-phone-square" aria-hidden="true"></i>
                            </ul>
                            <p class="footer-bx-content-bx-contactBx-contacts-p">(+57)3112279163 - (+57)3128461393</p>
                        </div>
                        <div class="footer-bx-content-bx-contactBx-contacts">
                            <ul class="footer-bx-content-bx-contactBx-contacts-icon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </ul>
                            <p class="footer-bx-content-bx-contactBx-contacts-p">luzangelacastro1984@gmail.com</p>
                        </div>
                    </div>
                    <div class="footer-bx-content-bx-desing">
                        <p class="footer-bx-content-bx-desing-p">Creado y diseñado por <a class="footer-bx-content-bx-desing-p-a">Jonatan Osorio A.</a></p>
                    </div>
                </div>
            </div>
            <div class="footer-bx-waves">
                <div class="footer-bx-waves_wave" id="wave1"></div>
                <div class="footer-bx-waves_wave" id="wave2"></div>
                <div class="footer-bx-waves_wave" id="wave3"></div>
                <div class="footer-bx-waves_wave" id="wave4"></div>
            </div>
        </div>

    </section> 


    <!--Scripts-->
    <script src="./js/lightbox-plus-jquery.min.js"></script>
    <script src="./js/lightbox.min.js"></script>
    <script src="./js/App.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let menuToggle = document.querySelector('.menuToggle');
        let navigation = document.querySelector('.navigation');
        menuToggle.onclick = function(){
            navigation.classList.toggle('active')
        }
    </script>
</body>
</html>