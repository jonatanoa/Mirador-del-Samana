<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- fonts -->
    <link rel="shortcut icon" href="/images/logo.png" />
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet"><!--main-->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet"><!--sub-->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"><!--description, paragraph-->
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Courgette&family=Patrick+Hand&display=swap" rel="stylesheet"><!--description, title-->
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet"><!--description title-->
    <!--icons-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Mirador del Samaná</title>
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
            <li class="list"><a class="link" href="#inicio"><ion-icon name="home-outline"></ion-icon>
                Inicio</a></li>
            <li class="list"><a class="link" href="./gallery.html"><ion-icon name="images-outline"></ion-icon>
                Galeria</a></li>
            <li class="list"><a class="link" href="#about"><ion-icon name="newspaper-outline"></ion-icon>
                ¿Quienes somos?</a></li>
            <li class="list"><a class="link" href="#ubicacion"><ion-icon name="map-outline"></ion-icon>
                Nuestra ubicación</a></li>
            <li class="list"><a class="link" href="#reseña"><ion-icon name="chatbox-ellipses-outline"></ion-icon>
                Reseñas</a></li>
            <li class="list"><a class="link" href="#contacto"><ion-icon name="call-outline"></ion-icon>
                Contactos</a></li>
        </div>
    </section>
    <header id="inicio" class="header"> <!--header-->
        <div class="heading-primary">
            <div class="heading-imgBx">
                <img src="images/logo.png" class="header-logo">
            </div>
            <h1 class="heading-primary-main">
               <sup>Mirador</sup> de <sub>Samaná</sub>
            </h1>  			
            <h2 class="heading-primary-sub">
                Quien no crea en la magia, <br> es porque en nuestro Hotel <br>no ha tenido estancia.
            </h2>
        </div>
        <!--waves-->
    </header>
    <main>
        <section id="about" class="description"> <!--description-->
            <h2 class="description-title">Un poco de nosotros...</h2> 
            <div class="description-descriptionbx bx">
                <div class=" description-descriptionbx-card">
                    <img class=" description-descriptionbx-card_img" src="images/hotel.png" alt="QUIENES SOMOS">
                    <h3 class=" description-descriptionbx-card_title">¿Quienes somos?
                        <p class=" description-descriptionbx-card_title-paragraph">Somos un hotel que ofrecemos servicio de 
                            alojamiento rural, en el municipio de Nariño Antioquia a
                            orillas del rio Samaná, vereda puente linda. <br> Nuestras instalaciones  
                            y habitaciones son rusticas, construidas en guadua y con vista al rio;  
                            además nuestro restaurante cuenta con gran reconocimiento en la región por
                            la buena sazón y variedad de las comidas.
                        </p>
                    </h3>
                </div>
                <div class=" description-descriptionbx-card">
                    <img class=" description-descriptionbx-card_img" src="images/alojamiento.png" alt="Misión">
                    <h3 class=" description-descriptionbx-card_title">Misión
                        <p class=" description-descriptionbx-card_title-paragraph">Proporcionar servicio de alojamiento a turistas y 
                            visitantes en un ambiente natural y acogedor donde 
                            encontraran mucho aseo y limpieza, acompañado de buen servicio 
                            en armonía con la naturaleza, rodeado de montañas.
                        </p>
                    </h3>
                </div>
                <div class=" description-descriptionbx-card">
                    <img class=" description-descriptionbx-card_img" src="images/objetivo.png" alt="Visión">
                    <h3 class=" description-descriptionbx-card_title">Visión
                        <p class=" description-descriptionbx-card_title-paragraph">Somos una familia que ofrecemos, servicio 
                                de alojamiento y restaurante en el municipio
                             de Nariño Antioquia a 10 minutos de
                              los termales del Espíritu Santo. 
                              Queremos ser reconocidos a nivel 
                              municipal y regional como una de las 
                              mejores opciones para los turistas que 
                              visitan nuestro destino turístico de Antioquia.
                        </p>
                    </h3>
                </div>
                <div class=" description-descriptionbx-card card4">
                    <img class=" description-descriptionbx-card_img" src="images/valores.png" alt="Valores">
                    <h3 class=" description-descriptionbx-card_title">Valores
                        <p class=" description-descriptionbx-card_title-paragraph-values">
                            Ambiente Familiar <br>
                            Buena Sazón<br>
                            Aseo y limpieza<br>
                            Calidad Humana <br>
                            Honradez
                        </p>
                    </h3>
                </div>
            </div>
        </section>
        
        <section id="ubicacion" class="location"> <!--location-->
            <h3 class="location-title">Nuestra Ubicación</h3>
            <div class="location-locationbx">
                <img class="location-locationbx-bridgeImg" src="images/puente.jpg" alt="">
                <div class="location-locationbx-mapbx">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5873.764535723569!2d-75.11745799070431!3d5.56764462356536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e46d78f1aa0bdcd%3A0xfee884c696c1ddfe!2sHotel%20El%20Mirador%20Del%20Samana!5e1!3m2!1ses-419!2sco!4v1657327066086!5m2!1ses-419!2sco" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>

        <section id="reseña" class="comments"> <!--comments-->
            <h3 class="comments-title">Experiencias de nuestros clientes</h3>
            <div class="comments-commentsbx">
                <div class="card"><!--card1-->
                    <div class="card-imgbx">
                        <img class="card-imgbx_img-1" src="images/angie.jpeg" alt="Ana">
                    </div>
                    <div class="card-content"> 
                        <div class="card-content-bx">
                            <h3 class="card-content-bx_name"><sup>Angie</sup>Loaiza <sub>V.</sub><br><span class="card-content-bx_name-occupation">(Docente)</span></h3>
                            <p class="card-content-bx_description">
                                ¡Todo Perfecto! Es la primera vez que vengo 
                                y la verdad es que tanto mi familia y yo hemos 
                                estado estupendamente. El paisaje que se logra ver 
                                desde el hotel es hermoso, además no hay nada más lindo 
                                que dormir cómoda en medio de la naturaleza. <br>
                                Infinitas gracias. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card"><!--card2-->
                    <div class="card-imgbx">
                        <img class="card-imgbx_img-2" src="images/ana.jpeg" alt="Ana Maria">
                    </div>
                    <div class="card-content"> 
                        <div class="card-content-bx">
                            <h3 class="card-content-bx_name"><sup>Ana</sup>Maria<sub>Cadavid</sub><br><span class="card-content-bx_name-occupation" >(Auxiliar Administrativo)</span></h3>
                            <p class="card-content-bx_description">
                                Me encanta la ubicación del Hotel porque está 
                                exactamente al lado de un bonito rio, que junto con su 
                                limpieza y su gran comida, hacen que uno quiera quedarse más 
                                por mucho más tiempo de lo planeado. <br><br>
                                Seguramente volveré, lo recomiendo totalmente.                                
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card"><!--card3-->
                    <div class="card-imgbx">
                        <img class="card-imgbx_img-3" src="images/arturo.jpeg" alt="Jenifer">
                    </div>
                    <div class="card-content"> 
                        <div class="card-content-bx">
                            <h3 class="card-content-bx_name"><sup>Carlos</sup>A.<sub>Gil</sub><br><span class="card-content-bx_name-occupation">(Barbero)</span></h3>
                            <p class="card-content-bx_description">
                                Quedé supremamente feliz con este lugar porque el personal que atiende 
                                este hotel sabe con gran precisión como se debe atender una persona. 
                                Siempre están dispuestos a ayudar y a brindarle confort y comodidad a 
                                quien se aloja en él. Su actitud de servicio es su mejor cualidad.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section> 

        <section id="contacto" class="icons icons-bx_img"> <!--ContactUs-->
            <h3 class="icons-title">Contactanos</h3>
            <div class="icons-bx">
                <div class="icons-bx_content">
                    <ul class="icon-ul">
                        <li class="icon-ul__li">
                            <a href="https://www.facebook.com/hotelmiradordelsamana" target="_blank">
                                <span class="icon-ul__li--span"></span>
                                <span class="icon-ul__li--span"></span>
                                <span class="icon-ul__li--span"></span>
                                <span class="icon-ul__li--span"></span>
                                <span  class="fa fa-facebook icon-ul__li--span" aria-hidden="true"></span>
                            </a>
                        </li>
                        
                        <li class="icon-ul__li">
                            <a href="https://api.whatsapp.com/send?phone=573112279163&text=Saludos" target="_blank">
                                <span class="icon-ul__li--span"></span>
                                <span class="icon-ul__li--span"></span>
                                <span class="icon-ul__li--span"></span>
                                <span class="icon-ul__li--span"></span>
                                <span  class="fa fa-whatsapp icon-ul__li--span" aria-hidden="true"></span>
                            </a>
                        </li>
        
                        <li class="icon-ul__li">
                            <a href="https://www.instagram.com/hotelelmiradordelsamana/" target="_blank">
                                <span class="icon-ul__li--span"></span>
                                <span class="icon-ul__li--span"></span>
                                <span class="icon-ul__li--span"></span>
                                <span class="icon-ul__li--span"></span>
                                <span  class="fa fa-instagram icon-ul__li--span" aria-hidden="true"></span>
                            </a>
                        </li>
                    </ul>
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
                        <div class="btn-gallery">
                            <h3 class="btn-title"> Te invitamos a conocer nuestra hermosa galería de fotos<h3>
                            <div class="btnBx">
                                <a href="./gallery.html" class="btn3">Galeria</a>
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
    </main>
    
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