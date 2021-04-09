<head>
    <link rel="stylesheet" href="css/forside.css">
</head>

<?php

include('header.php');
?>

<div class="cirkel cirkel1"></div>
<div class="cirkel cirkel2"></div>
<div class="cirkel cirkel3"></div>



<section class="site-wrapper">
    <div class="stripe">
        <div class="kontakt-os">
            <h1 class="overskrift">Velkommen </h2>
        </div>
    </div>

    <div class="upper-text-box">
        <p>Her fremmer vi, at du fortsat kan leve livet meningsfuldt.<br><br>

            Vi leverer med stolthed : <br>
            Privat personlig pleje og praktisk hjælp.<br> <br>

            Du betyder alt for os, og vi vil med et smil arbejde 
            hårdt for at du har det så godt som muligt!</p>
    </div>


    <div class="gg">
        <!-- image slider start -->

        <!--image slider start-->
        <div class="slider">
            <div class="slides">
                <!--radio buttons start-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <!--radio buttons end-->


                <!--slide images start-->
                <div class="slide first">
                    <img src="billeder/aged care.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="billeder/aged care1.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="billeder/aged care2.jpg" alt="">
                </div>
                <!--slide images end-->
            </div>
        </div>

    </div>
    <!--image slider end-->
    <div class="split">
        <div class="content-box1">
            <div class="box-items">
                <i class="fas fa-hand-holding-heart"></i>
                <h4>Personlig hjælp</h4>
            </div>
            <p>Vi hjælper dig med de nære
                og personlige aktiviteter
                som at bade, få tøj på og at
                spise samt sygepleje - med
                respekt og omsorg for dig
                og dine ønsker. </p>
        </div>

        <div class="content-box2">
            <div class="box-items">
                <i class="fas fa-hand-sparkles"></i>
                <h4>Praktisk hjælp</h4>
            </div>
            <p>Vi hjælper dig med tøjvask,
                indkøb, rengøring og andre
                praktiske opgaver.</p>
        </div>
    </div>

</section>










<?php

include('footer.php');
?>