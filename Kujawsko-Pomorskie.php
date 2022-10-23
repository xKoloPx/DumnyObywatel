<?php 
    $w = 'kuja';
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
            <li><a href="#woj">O Województwie</a></li>
            <li><a href="#kalk">Kalkulator<br/>Budżetów</a></li>
            <li><a href="#projekty">Projekty</a></li>
            <li><a href="index.php">Powrót</a></li>
        </ul>
        </div>
    </div>
</header>
<script src="js/header.js"></script>
<!--Sekcja 1 - Zdjecie Miasta-->
<section id="section1">
    <img src="img/new.jpg"/>
</section>

<section id="section3p">
<hr>
<div class="text">
        <h1>Województwo Kujawsko Pomorskie</h1>
        <p>Twoje województwo obfituje w zabytki prasłowiańskie, znane uzdrowiska i atrakcje przyrodnicze; położona jest tam perła architektury gotyckiej - Toruń, którego starówka wraz z Ratuszem z XIV w., kamieniczkami i fragmentami murów zamkowych została wpisana na listę UNESCO...</p>
</div>
</section>
<script src="js/scroll.js"></script>
<section style="height: 200px;"></section>
<hr/>
<section id="woj" style="height: 200px;"></section>
<section id="section4p">
    <iframe aria-label="Map" id="datawrapper-chart-ngtRM" src="https://datawrapper.dwcdn.net/ngtRM/1/" scrolling="no" frameborder="0"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();</script>
    <div style="height: auto;">
        <h1>Kujawsko-Pomorskie</h1>
        <p>Siedziba: <a class="data2"><?php echo $province ['Kujawsko-Pomorskie']['capital'];?></a></p>
        <p>PKB na mieszkanća: <a class="data2"><?php echo number_format($province ['Kujawsko-Pomorskie']['pkb'], 0, ',', ' ');?></a></p>
    </div>
</section>
<section style="height: 200px;"></section>
<hr/>
<section id="kalk" style="height: 200px;"></section>
<section id="section4">
    <div id="kalkulator">
        <h1>Kalkulator</h1>
        <p>Policz ile przypada budżetów obywatelskich na daną liczbę mieszkańców województwa.</p>
        <form action="Kujawsko-Pomorskie.php#kalk" method="GET">
            <input type="number" name="number" value="0" placeholder="Liczba mieszkańców"/>
            <button type="submit">Oblicz</button><br/>
            <p>Budżet na <?php echo $number;?> mieszkańców: <a><?php echo number_format($result, 2, ',', ' ') . " zł";?></a></p>
        </form>
        <h2>W dziedzinach:</h2>
            <p>Transport i łączność (25%): <a><?php echo number_format($tran, 2, ',', ' ') . " zł";?></a></p>
            <p>Gospodarka komunalna i ochrona środowiska (23%): <a><?php echo number_format($gosp, 2, ',', ' ') . " zł";?></a></p>
            <p>Kultura fizyczna (21%): <a><?php echo number_format($kufi, 2, ',', ' ') . " zł";?></a></p>
            <p>Oświata i wychowanie (15%): <a><?php echo number_format($oswi, 2, ',', ' ') . " zł";?></a></p>
            <p>Turystyka (5%): <a><?php echo number_format($tury, 2, ',', ' ') . " zł";?></a></p>
            <p>Kultura i ochrona dzedzictwa narodowego (4%): <a><?php echo number_format($kult, 2, ',', ' ') . " zł";?></a></p>
            <p>Pozostale zadania (7%): <a><?php echo number_format($pozo, 2, ',', ' ') . " zł";?></a></p>
    </div>
</section>
<section  style="height: 200px;"></section>
<hr/>
<section id="projekty" style="height: 200px;"></section>
<section id="section6p">
<div class="text">
        <h1 class="main-title">Projekty województwa</h1>
        <p class="content">Projekty pokazane poniżej są jedynie przykładami wielu projektów realizowanych w województwie.<br>
             Więcej projektów znajdziesz na stronie budżetów obywatelskich Twojego województwa!</p>
</div>
<div class="container">
					
			<div class="card">
				<div class="imgBx">
					<a href="#projekty">
					<img src="icons/people2.png">
					</a>
					<h2>Kujawsko-Pomorskie – rozwój poprzez kulturę</h2>
					<p>Beneficjent: <b>Województwo Kujawsko-Pomorskie</b><br>
	                Wartość projektu: <b>ponad 14,2 mln zł</b><br>
	                Dofinansowanie z Unii Europejskiej: <b>ponad 3,3 mln zł</b>
					</p>
				</div>
			</div>
		
			<div class="card">
				<div class="imgBx">
					<a href="#projekty">
					<img src="icons/shield.png">
					</a>
					<h2>Zakup pojazdów dla jednostek OSP</h2>
					<p>
                    Beneficjent: <b>Oddział wojewódzki związku OSP RP woj. Kujawsko-Pomorskiego</b><br>
	                Wartość projektu: <b>ponad 10,7 mln zł zł</b><br>
	                dofinansowanie z Unii Europejskiej: <b>ponad 6,9 mln zł</b>
					</p>				
				</div>	
			</div>	
			
			<div class="card">
				<div class="imgBx">
					<a href="#projekty">
					<img src="icons/monument.png">
					</a>
					<h2>Wsparcie opieki nad zabytkami województwa kujawsko-pomorskiego</h2>
					<p>
                    Beneficjent: <b>Województwo Kujawsko-Pomorskie</b><br>
	                Wartość projektu: <b>ponad 9 mln zł</b><br>
	                Dofinansowanie z Unii Europejskiej: <b>ponad 6,3 mln zł</b>
				</div>	
			</div>	
		</div>
</section>
<section style="height: 50px;"></section>
    <hr/>
<section style="height: 50px;"></section>


<?php
    require_once "includes/footer.php";
?>