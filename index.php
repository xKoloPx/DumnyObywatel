<?php 
    require_once "includes/head.php";
    require_once "map/skrypt-mapy.php"; 
?>
<header>
    <div class="navbar">
        <img id="logo" src="img/logo.png"/>
        <a class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
        <ul>
            <li><a href="#section1">Dumny<br/>Obywatel</a></li>
            <li><a href="#wybor">Wybierz<br/>Województwo</a></li>
            <li><a href="#budzet">Budżet<br/>Obywatelski</a></li>
            <li><a href="#statystyki">Statystyki</a></li>
        </ul>
        </div>
    </div>
</header>
<script src="js/header.js"></script>
<!--Sekcja 1 - Zdjecie Miasta-->
<section id="section1">
    <img src="img/new.jpg"/>
</section>
<!--Sekcja 2 - Dumny Obywatel-->
<section id="section2">
    <div id="icon">
        <img src="icons/people.png"/>
    </div>
    <h1>O Aplikacji</h1>
    <p>Aplikacja Dumny Obywatel pozwala w łatwy i przejrzysty sposób sprawdzić wszelkie informacje dotyczące budżetów obywatelskich z ubiegłego roku w twoim regionie. Dzięki nam jesteś w stanie dowiedzieć się więcej. <br/><a href="#wybor">Wybierz województwo</a> i skorzystaj z naszych wbudowanych narzędzi!</p>
</section>
<section style="height: 300px;"></section>
<hr/>
<section id="wybor" style="height: 200px;"></section>
<!--Sekcja 3 - Mapa-->
<section id="section3">
    <div class="map-cnt">
        <?php
            include "map/mapa.php";
            if(isset($woj)){color();}
        ?>
    </div>
    <h1 class="main-title">Wybierz Województwo</h1>
    <!--Statystyki woj.-->
    <div class="map-data">
        <h2>Nazwa województwa: <strong class="data2"><?php echo @$woj ?></strong></h2>
        <div>
            <strong class="data1">Liczba ludzi w województwie:</strong>
            <strong class="data2"><b><?php echo number_format(@$people, 0, ',', ' ');?></b></strong>
        </div>
        <div>
            <strong class="data1">Powierzchnia województwa:</strong>
            <strong class="data2"><b><?php echo number_format(@$area, 0, ',', ' ') . " km²";?></b></strong>
        </div>
    </div>
    <!-- VERTICAL MENU -->
    <div class="scroll-menu">
        <form action="index.php#wybor" method="GET">
            <button class="click" type="button">Wybierz województwo</button>
            <div class="list">
                <button class="links" name="woj" type="submit" value="Dolnośląskie">Dolnośląskie</button>
                <button class="links" name="woj" type="submit" value="Kujawsko-Pomorskie">Kujawsko-Pomorskie</button>
                <button class="links" name="woj" type="submit" value="Lubelskie">Lubelskie</button>
                <button class="links" name="woj" type="submit" value="Lubuskie">Lubuskie</button>
                <button class="links" name="woj" type="submit" value="Łódzkie">Łódzkie</button>
                <button class="links" name="woj" type="submit" value="Małopolskie">Małopolskie</button>
                <button class="links" name="woj" type="submit" value="Mazowieckie">Mazowieckie</button>
                <button class="links" name="woj" type="submit" value="Opolskie">Opolskie</button>
                <button class="links" name="woj" type="submit" value="Podkarpackie">Podkarpackie</button>
                <button class="links" name="woj" type="submit" value="Podlaskie">Podlaskie</button>
                <button class="links" name="woj" type="submit" value="Pomorskie">Pomorskie</button>
                <button class="links" name="woj" type="submit" value="Śląskie">Śląskie</button>
                <button class="links" name="woj" type="submit" value="Świętokrzyskie">Świętokrzyskie</button>
                <button class="links" name="woj" type="submit" value="Warmińsko-Mazurskie">Warmińsko-mazurskie</button>
                <button class="links" name="woj" type="submit" value="Wielkopolskie">Wielkopolskie</button>
                <button class="links" name="woj" type="submit" value="Zachodnio-Pomorskie">Zachodnio-Pomorskie</button>
            </div>
        </form>
        <form method="POST">
            <?php display();?>
        </form>
    </div>
    <script src="js/menuScroll.js"></script>
</section>
<section style="height: 250px;"></section>
<hr/>
<section id="budzet" style="height: 150px;"></section>
<!--Sekcja 4-->
<script src="js/scroll.js"></script>
<section id="section4">
        <div class="text">
            <h1 class="main-title">Budżet Obywatelski</h1>
            <p class="content">Budżet obywatelski to nieformalny zwrot określający wydzieloną część budżetu samorządu terytorialnego<br>
                (najczęściej budżetu miasta), w ramach którego wyznaczona odgórnie kwota wydatków przeznaczona jest <br>
                na inicjatywy i projekty inwestycyjne bezpośrednio zgłaszane przez społeczeństwo lokalne (indywidualnie lub przez odpowiednie organizacje).

        </div>
</section>
<section style="height: 300px;"></section>
<hr/>
<section id="statystyki" style="height: 150px;"></section>
<!--Sekcja 5-->
<section id="section5">
        <div class="text">
            <h1 class="main-title">Statystyki Polski</h1>
                <div class="stats">
                    <div class="statsRight">
                        <div class="statsImg">
                            <img src="icons/social.gif"/>
                        </div>
                        <h1>Ludność</h1>
                        <hr/>
                        38 036 118
                    </div>
                </div>
                <div class="stats">
                    <div class="statsRight">
                        <div class="statsImg">
                            <img src="icons/money-bag.gif"/>
                        </div>
                        <h1>Budżety O.</h1>
                        <hr/>
                        627,5 mln zł
                    </div>
                </div>
                <div class="stats">
                    <div class="statsRight">
                        <div class="statsImg">
                            <img src="icons/projects.gif"/>
                        </div>
                        <h1>Zreal. Projekty</h1>
                        <hr/>
                        3 300
                    </div>
                </div>
    </div>
</section>
<section style="height: 50px;"></section>
<hr/>
<script src="js/scroll.js"></script>

<?php
    require_once "includes/footer.php";
?>