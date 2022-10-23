<?php 
    $w = 'lubu';
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
        <h1>Województwo Lubuskie</h1>
        <p>Twoje województwo to najbardziej zalesione województwo w Polsce, bogate w atrakcje przyrodnicze z parkiem narodowym na czele (Ujście Warty), atrakcje zabytkowe (np. Zamek w Łagowie) i pomilitarne (Międzyrzecki Rejon Umocniony); w regionie jest też obiekt wpisany na listę UNESCO – Park Mużakowski; województwo ma dwie stolice: Zielona Góra i Gorzów Wielkopolski...</p>
</div>
</section>
<script src="js/scroll.js"></script>
<section style="height: 200px;"></section>
<hr/>
<section id="woj" style="height: 200px;"></section>
<section id="section4p">
    <iframe aria-label="Map" id="datawrapper-chart-23B0K" src="https://datawrapper.dwcdn.net/23B0K/1/" scrolling="no" frameborder="0"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();</script>
    <div style="height: auto;">
        <h1>Lubelskie</h1>
        <p>Siedziba: <a class="data2"><?php echo $province ['Lubuskie']['capital'];?></a></p>
        <p>PKB na mieszkanća: <a class="data2"><?php echo number_format($province ['Lubuskie']['pkb'], 0, ',', ' ');?></a></p>
    </div>
</section>
<section style="height: 200px;"></section>
<hr/>
<section id="kalk" style="height: 200px;"></section>
<section id="section4">
    <div id="kalkulator">
        <h1>Kalkulator</h1>
        <p>Policz ile przypada budżetów obywatelskich na daną liczbę mieszkańców województwa.</p>
        <form action="Lubuskie.php#kalk" method="GET">
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
					<img src="icons/cryptographic-signature.png">
					</a>
					<h2>Autonomiczny system kryptograficzny</h2>
					<p> ze wsparciem dla bezpiecznej dystrybucji kluczy jednorazowych<br>
                    w doświadczalno-produkcyjnej instalacji otrzymywania katalizatorów i nośników ceramicznych<br>
                    Beneficjent: <b>4 system Polska sółka z ograniczoną odpowiedzialnością</b><br>
	                Wartość ogółem: <b>2 831 758,11 zł</b><br>
	                Wydatki kwalifikowalne: <b>2 547 781,71 zł</b><br>
	                Dofinansowanie: <b>1 923 761,82</b>
					</p>
				</div>
			</div>
		
			<div class="card">
				<div class="imgBx">
					<a href="#projekty">
					<img src="icons/energy-drink.png">
					</a>
					<h2>Nowatorska technologia wytwarzania energii</h2>
					<p>
                    cieplnej i elektrycznej z biomasy<br>
                    Beneficjent: <b>Ensore Spółka z ograniczoną odpowiedzialnością</b><br>
	                Wartość ogółem: <b>7 960 975,65 zł</b><br>
	                Wydatki kwalifikowalne: <b>6 362 451,07 zł</b><br>
	                Dofinansowanie: <b>3 719 280,43</b>
					</p>				
				</div>	
			</div>	
			
			<div class="card">
				<div class="imgBx">
					<a href="#projekty">
					<img src="icons/fire.png">
					</a>
					<h2>Stworzenie innowacyjnej jednoskrzydłowej klapy dymowej</h2>
					<p>jako rezultat badań przemysłowych i prac rozwojowych firmy Pram Polska Sp. z o.o.<br>
                    Beneficjent: <b>Pram Polska sółka z ograniczoną odpowiedzialnością</b><br>
	                Wartość ogółem: <b>356 058 zł</b><br>
	                Wydatki kwalifikowalne: <b>257 708 zł</b><br>
	                Dofinansowanie: <b>171 144,57 zł</b>
				</div>	
			</div>	
		</div>
</section>
<script src="js/scroll.js"></script>
<section style="height: 200px;"></section>
<hr/>
<section id="statystyki" style="height: 200px;"></section>
<section id="section5">
        <div class="text">
            <h1 class="main-title">Statystyki Województwa</h1>
                <div class="stats">
                    <div class="statsRight">
                        <div class="statsImg">
                            <img src="icons/social.gif"/>
                        </div>
                        <h1>Ludność</h1>
                        <hr/>
                        <?php echo number_format($province ['Lubuskie']['people'], 0, ',', ' ');?>
                    </div>
                </div>
                <div class="stats">
                    <div class="statsRight">
                        <div class="statsImg">
                            <img src="icons/money-bag.gif"/>
                        </div>
                        <h1>Budżety O.</h1>
                        <hr/>
                        <?php echo number_format($province ['Lubuskie']['budget'], 0, ',', ' ') . " zł";?>
                    </div>
                </div>
                <div class="stats">
                    <div class="statsRight">
                        <div class="statsImg">
                            <img src="icons/projects.gif"/>
                        </div>
                        <h1>Zreal. Projekty</h1>
                        <hr/>
                        ≈ 200
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