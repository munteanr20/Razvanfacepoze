<?php
include_once 'header.php';
?>
    <!-- <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-dragon"></i></button> -->

<div>
    <!-- Image Carousel -->
    <!-- <div class="container">
        <div class="row">
            <div class="col align-self-center"> -->
        <div id="carousel" class="carousel slide w-75 top" data-ride="carousel" data-interval="6500">
            <!-- Carousel Content -->
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img src="img/carousel/1.1.JPG" alt="" class="w-100" height="900">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-8 bg-custom d-none d-lg-block py-3 px-0">
                                    <h1>Razvan Face Poze</h1>
                                    <div class="border-top border-success w-50 mx-auto my-3"></div>
                                    <h3 class="pb-3">Cu pasiune din 2016</h3>
                                    <a href="Despre.php" class="btn btn-info btn-lg mr-2">Despre mine</a>
                                    <a href="https://contar.io/munteanr20" class="btn btn-warning btn-lg ml-2">Contacteaza-ma</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel/1.2.JPG" alt="" class="w-100" height="900">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end text-right">
                                <div class="col-5 bg-custom d-none d-lg-block py-3 px-0 pr-3">
                                    <p class="lead pb-3">Nimeni nu s-a nascut invatat, inca din 2016 experimentez si imi
                                        place ceea ce fac.</p>
                                    <a href="Despre.php" class="btn btn-info btn-lg">Despre mine</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="img/carousel/1.3.JPG" alt="" class="w-100" height="900">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start text-left">
                                <div class="col-4 bg-custom d-none d-lg-block py-3 px-0 pl-3">
                                    <p class="lead pb-3">Incerc sa fac poze de tot felul. De la poze tip portret, la poze
                                    la poze tip peisaj.</p>  
                                    <a href="gallery.php" class="btn btn-warning btn-lg">Proiecte</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Carousel Content -->


            <!-- Previous & Next Buttons -->
            <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
                <span class="fas fa-chevron-left fa-2x"></span>
            </a>
            <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
                <span class="fas fa-chevron-right fa-2x"></span>
            </a>
            <!-- End Previous & Next Buttons -->

        </div>
        <!-- End Image Carousel -->


        <!-- Main Page Heading -->
        <div class="col-12 text-center mt-5">
            <h1 class="pt-4 text-dark">Recenzii</h1>
            <div class=" border-custom-top w-50 mx-auto my-3"></div>
        </div>

        <!-- Three Column Section -->
        <div class="container feedback">
            
            <div class="owl-carousel owl-theme pt-3">
                <div class="card pt-3 mx-auto">
                    <img class="card-img-top px-3" src="img/Poze/Dsc-165.jpg" alt="Cosmin">
                    <div class="card-body center">
                    <h5 class="card-title">"Aproape de o calitate zeiasca, bravo copile."</h5>
                    <p class="card-text italic">"Apreciez ideea asta că mergi cu noi cam pe unde zicem, plus că vii și tu cu idei de locuri. <br>
                        Pozele-s de calitate și îmi plac și unele idei pe care le mai ai gen poziționare și așa"</p>
                    <p class="card-text-footer">Paiu <br> Cosmin-Alin</p>
                    </div>
                </div>

                <div class="card pt-3 mx-auto">
                    <img class="card-img-top px-3" src="img/Poze/Dsc-54.jpg" alt="Stefan">
                    <div class="card-body center">
                    <h5 class="card-title">Calitate maxima</h5>
                    <p class="card-text italic">"Pozele arată de parcă sunt făcute cu telefonul fix, în rest e ok!!"</p>
                    <p class="card-text-footer">Morariu <br> Adrian-Ștefan</p>
                    </div>
                </div>

                <div class="card pt-3 mx-auto">
                    <img class="card-img-top px-3" src="img/Poze/Dsc-17 (2).jpeg" alt="Ovi">
                    <div class="card-body center">
                    <h5 class="card-title">Motto-ul meu în viață</h5>
                    <p class="card-text italic">"<i>Dacă lumea te vorbestepe la spate e limpede că tu ești în fața </i>😎"</p>
                    <p class="card-text-footer">Dumitrașcu <br> Ovidiu-Contantin</p>
                    </div>
                </div>

                <div class="card pt-3 mx-auto">
                    <img class="card-img-top px-3" src="img/Poze/Dsc-89.jpg" alt="Octa">
                    <div class="card-body center">
                    <h5 class="card-title">Calitate maxima</h5>
                    <p class="card-text italic">"Fotograf foarte serios si priceput! Recomand cu incredere!"</p>
                    <p class="card-text-footer">Rotila <br>Octavian</p>
                    </div>
                </div>

                <div class="card pt-3 mx-auto">
                    <img class="card-img-top px-3" src="img/Poze/Dsc-16 (2).jpg" alt="Nico">
                    <div class="card-body center">
                    <h5 class="card-title">Se putea si mai bine</h5>
                    <p class="card-text italic">"Frumos, mai venim, fundalul cam scârțâie, dar data viitoare sperăm că îl ungi cu ceva ulei că tot ai zis că te pricepi, zic."</p>
                    <p class="card-text-footer">Hermeneanu <br> Nicoleta</p>
                    </div>
                </div>

                <div class="card pt-3 mx-auto">
                    <img class="card-img-top px-3" src="img/Poze/Dsc (216 of 460).jpg" alt="Fabi">
                    <div class="card-body center">
                    <h5 class="card-title">"Aproape de o calitate zeiasca, bravo copile."</h5>
                    <p class="card-text italic">"Un vibe genial, asa ies cele mai bune poze, recomand maxim 😉"</p>
                    <p class="card-text-footer">Manole <br> Fabian-Cristian</p>
                    </div>
                </div>

            </div>
        </div>


        <!-- End Three Column Section -->


        <!-- Start Bio -->
        <div class="container my-5 bio">
            <div class="row py-4">

                <div class="col-lg-4 mb-4 my-lg-auto">
                    <h1 class="text-dark font-weight-bold mb-3">Despre mine</h1>
                    <p class="mb-4">&nbsp; Salut, mă numesc Muntean Răzvan și am 19 ani. Sunt student în anul I la facultatea de Inginerie Electrică și Știința Calculatoarelor, 
                                    la Automatică și Informatică Aplicată din cadrul Universității "Transilvania".<br>
                                    &nbsp; Din clasa a 12 am început să dezvolt o pasiune pentru pagini web și modul de construcție a lor, însă până la acest proiect, nu am făcut 
                                    ceva foarte complicat. Însă pe parcurs am început să mă obișnuiesc cu programarea. <br>
                                    &nbsp; Acest site este făcut pentru a-mi arată una din 
                                    pasiunile mele și anume făcutul de poze. Încerc să nu ratez ocazii însă de cele mai multe ori lenea își spune cuvântul.
                    </p>
                    <a href="Despre.php" class="btn btn-outline-dark btn-lg">Mai multe</a>
                </div>

                <div class="col-lg-8"><img class="w-100 despre " src="img/Poze/Eu.jpg" alt=""></div>

            </div>
        </div>
        <div class="container my-5 bio ">
            <div class="row my-4 center">
                <div class="col-12">
                    <h1 class="text-dark font-weight-bold mt-4">Cateva Proiecte</h1>
                </div>
            </div>
            <div class="row my-4 center font-weight-bold black">
                <div class="col-lg-3 col-md-5 col-sm-10 mx-3 my-3 portofoliu radius">
                    <img class="w-100 mt-3 radius" src="img/Poze/Dsc-17 (2).jpeg">
                    <p class="pt-3">Ovidiu - baiat serios care tot timpul incearca sa fie fericit.</p>
                        <div class="overlay">
                            <a href="#" class="btn btn-dark btn-lg">Vezi sedinta</a>
                        </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-10 mx-3 my-3 portofoliu radius">
                    <img class="w-100 mt-3 radius" src="img/Poze/Dsc-54.jpg">
                    <p class="pt-3">Stefan - dornic tot timpul sa faca o poza cu motorul lui. </p>
                    <div class="overlay">
                        <a href="#" class="btn btn-dark btn-lg">Vezi sedinta</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-10 mx-3 my-3 portofoliu radius" >
                    <img class="w-100 mt-3 radius" src="img/Poze/Dsc-91.jpg">
                    <p class="pt-3">Gore - un prieten adevarat, care tot timpul vrea sa ajute. </p>
                    <div class="overlay">
                        <a href="#" class="btn btn-dark btn-lg">Vezi sedinta</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-5 col-sm-10 mx-3 my-3 portofoliu radius"> 
                    <img class="w-100 mt-3 radius" src="img/Poze/Dsc-165.jpg">
                    <div class="overlay">
                        <a href="#" class="btn btn-dark btn-lg">Vezi sedinta</a>
                    </div>
                    <p class="pt-3">Cosmin - este cel mai recunoscator pentru pozele pe care i le-am facut</p>

                </div>
                <div class="col-lg-3 col-md-5 col-sm-10 mx-3 my-3 portofoliu radius"> 
                    <img class="w-100 mt-3 radius blur" src="img/Poze/DSC11 (12 of 12).jpg">
                    <div class="overlay">
                        <a href="#" class="btn btn-dark btn-lg">Vezi sedinta</a>
                    </div>
                    <p class="pt-3">Iarna - un anotimp care nu a fost prezent in adevaratul sens al lui anul trecut.</p>
                    
                </div>
                <div class="col-lg-3 col-md-5 col-sm-10 mx-3 my-3 portofoliu radius"> 
                    <img class="w-100 mt-3 radius" src="img/Poze/FTM_6130 (2).jpg">
                    <p class="pt-3">Eu - autorul acestei pagini si al acestui proiect, si baiatul din spatele camerei.</p>
                    <div class="overlay">
                        <a href="#" class="btn btn-dark btn-lg">Vezi sedinta</a>
                    </div>
                </div>
            </div>
        </div>
        
        <button onclick="topFunction()" id="go-top-link" class="btn btn-dark btn-lg" title="Go to top">
            <i class="fas fa-dragon"></i>
        </button>
    <!-- End Bio-->

    <!-- Start Two Column Section -->

    <!-- End Two Column Section -->


    <!-- Start Jumbotron -->

    <!-- End Jumbotron -->
    </div>

    <!-- Start Footer -->
<footer class=" py-5">
    <div class="container py-0 my-auto">
        <div class="row text-light text-center justify-content-center">
            <div class="col-12 dunga rotund">
                <div class="row justify-content-center py-3">
                    <div class="col align-self-start col-sm-12 col-lg-3 my-auto">
                        <img class="social my-auto" src="img/emoji/camera.png" alt="">
                        <a href="https://www.facebook.com/rzvphotograpy" target="_blank"><i class="fab fa-facebook social my-auto"></i></a>
                    </div>
                    <div class="col-sm-10 col-md-8 col-lg-6">
                        <h4>Despre proiect </h4>
                        <p class="my-auto"> A pornit de la ideea unui prieten, pentru a invata mai mult, 
                            insa a inceput sa imi placa și chiar cred că are potențial.
                        </p>
                    </div>
                    <div class="col align-self-end col-sm-12 col-lg-3 my-auto">
                        <a href="https://www.instagram.com/razvan.face.poze/?hl=ro" target="_blank"><i class="fab fa-instagram social my-auto"></i></a>
                        <img class="social my-auto" src="img/emoji/ozn.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- End Footer -->


    <!-- Start Socket -->
    <div class="socket text-light py-3">
        <div class="row">
            <div class="col align-self-start col-sm-6 my-sm-auto">
                <p class="text-left p-2  my-auto">
                    &copy; <a href="https://www.facebook.com/razvan.muntean.710" target="_blank">Muntean Razvan</a>
                </p>
            </div>
            <div class="col align-self-end col-sm-6 my-sm-auto">
                    <p class="text-center text-md-right pr-2 my-auto ">
                        <a href="https://contar.io/munteanr20" target="_blank">
                            Pentru mai multe optiuni de contact &nbsp
                            <img class="contact" src="img/emoji/contar.png">
                    </a>
                    </p>
            </div>
        </div>
    </div>

    <!-- End Socket -->

    <!-- Script Source Files -->

    <!-- Icons-->
    <script src="https://kit.fontawesome.com/fe5b3b8712.js" crossorigin="anonymous"></script>
    <!-- jQuery -->
    <script src="js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src= "js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <!-- Bootstrap 4.5 JS -->
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js" type="text/javascript"></script>
    <!-- Owl Carousel JS-->
    <script src="js/owl.carousel.js" type="text/javascript"></script>
    <!-- Font Awesome -->
    <script src="js/all.min.js" type="text/javascript"></script>

    <!-- End Script Source Files -->

    <!-- Script code-->
    <script>
          $('.owl-carousel').owlCarousel({
            loop:false,
            margin:10,
            // nav:true,
            responsive:{
                0:{
                    items:1
                },
                700:{
                    items:2
                },
                1000:{
                    items:3
                }
            }
        })

    //Get the button
    var mybutton = document.getElementById("go-top-link");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    </script>
    
</body>

</html>
