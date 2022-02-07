<?php
include_once 'header.php';
?>
        <div class="wrapper">
            <div class="gallery-container container my-5 bio">
                <div class="row my-4 center">
                    <div class="col-12">
                        <h1 class="text-dark font-weight-bold mt-4">Proiecte</h1>
                    </div>
                </div>
            <div class="row my-4 center font-weight-bold black">
                <?php
                include_once 'includes/dbh1.inc.php';

                $sql = "SELECT * FROM gallery ORDER BY idGallery DESC;";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){
                    echo 'Sesiunea sql a dat gresi!';
                } else{
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo 
                        '<div class="col-lg-3 col-md-5 col-sm-10 mx-3 my-3 portofoliu radius">
                                <a href="#">
                                    <img class="w-100 mt-3 radius" src="img/gallery/'.$row["imgFullNameGallery"].'"/>
                                </a>
                                <div class="desc pt-3">
                                    <h3>'.$row["titleGallery"].' </h3>
                                    <p>'.$row["descGallery"].'</p>
                                </div> 
                        </div>';
                    }
                }
                 ?>
                </div>
            </div>
        <?php

        if (isset($_SESSION['useruid']) && $_SESSION['useruid'] == 'Admin'){
            echo
                '<div class="container my-5 bg-dark center col-4">
                     <div class="row my-4 center">
                        <form action="includes/gallery-upload.inc.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="filename" class="text-capitalize col-10 mt-3 mb-2 py-2" placeholder="Numele...">
                            <input type="text" name="filetitle" class="text-capitalize col-10 my-2 py-2" placeholder="Data si titlul sedintei...">
                            <input type="text" name="filedesc" class=" col-10 my-2 py-2" placeholder="Descrierea sedintei...">
                            <input type="file" name="file" class="text-light col-10 my-2 py-2">
                            <button type="submit" name="submit" class="col-7 my-2 py-2 btn-info">Incarca</button>
                        </form>
                    </div>
                </div>';
        }
        ?>
           
        </div>
    </section>

    <<button onclick="topFunction()" id="go-top-link" class="btn btn-dark btn-lg" title="Go to top">
        <i class="fas fa-dragon"></i>
    </button>
    </div>


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
                        <h4>Despre sedinte</h4>
                        <p class="my-auto"> Nu sunt foarte cunoscut, si pentru asta, le scriu persoanelor cu care ma cunosc
                            daca vor o sedinta, si majoritatea accepta. Rareori se intampla sa primesc eu mesaje de la altii,
                            dar imi place sa fac poze, si accept tot timpul!
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

    <script src="https://kit.fontawesome.com/fe5b3b8712.js" crossorigin="anonymous"></script>

    <script>
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