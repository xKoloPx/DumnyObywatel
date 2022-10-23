<?php 
    $w = 'slas';
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
        <h1>Województwo Śląskie</h1>
        <p>W Twoim województwie panuje pozytywna energia dla każdego turysty, który odnajdzie tu coś dla siebie: góry i górskie kurorty, uzdrowiska, rozbudowane aglomeracje z ośrodkami kultury i rozrywki, a także atrakcje industrialne ze Szlakiem Zabytków Techniki na czele, obejmującym swym zasięgiem prawie cały region i Kopalnią ołowiu, srebra i cynku w Tarnowskich Górach, wpisaną na listę UNESCO; dodatkowo smaczna kuchnia i wiele terenów zielonych; województwo śląskie to bogaty w atrakcje turystyczne region ze stolicą w Katowicach...</p>
</div>
</section>
<script src="js/scroll.js"></script>
<section style="height: 200px;"></section>
<hr/>
<section id="woj" style="height: 200px;"></section>
<section id="section4p">
    <iframe aria-label="Map" id="datawrapper-chart-YFDP5" src="https://datawrapper.dwcdn.net/YFDP5/1/" scrolling="no" frameborder="0"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();</script>
    <div style="height: auto;">
        <h1>Śląskie</h1>
        <p>Siedziba: <a class="data2"><?php echo $province ['Śląskie']['capital'];?></a></p>
        <p>PKB na mieszkanća: <a class="data2"><?php echo number_format($province ['Śląskie']['pkb'], 0, ',', ' ');?></a></p>
    </div>
</section>
<section style="height: 200px;"></section>
<hr/>
<section id="kalk" style="height: 200px;"></section>
<section id="section4">
    <div id="kalkulator">
        <h1>Kalkulator</h1>
        <p>Policz ile przypada budżetów obywatelskich na daną liczbę mieszkańców województwa.</p>
        <form action="Śląskie.php#kalk" method="GET">
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
					<img src="icons/tiktok.png">
					</a>
					<h2>50 twarzy DIGCOMPA. Zintegrowany projekt wsparcia w zakresie TIK</h2>
					<p>Nazwa beneficjata: <b>ATFORUM DAMIAN DMUCHOWSKI</b><br>
 	                    Wartość ogółem: <b>466 906.25 zł</b><br>
	                    Wydatki kwalifikowalne: <b>466 906.25 zł</b><br>
	                    Dofinansowanie: <b>420 126.25 zł</b> 
					</p>
				</div>
			</div>
		
			<div class="card">
				<div class="imgBx">
					<a href="#projekty">
					<img src="icons/growth.png">
                </a>
					<h2>Utworzenie funduszu Invento Capital inwestującego w projekty badawczo-rozwojowe</h2>
					<p>
                        Nazwa beneficjata: <b>UE</b><br>
 	                    Wartość ogółem: <b>43 500 000,00 zł</b><br>
	                    Wydatki kwalifikowalne: <b>43 800 000,00 zł</b><br>
	                    Dofinansowanie: <b>34 800 000,00 zł</b> 
					</p>				
				</div>	
			</div>	
			
			<div class="card">
				<div class="imgBx">
					<a href="#projekty">
					<img src="icons/job.png">
					</a>
                    <h2>Poprawa zdolności do zatrudnienia osób poszukujących pracy</h2>
                    i pozostających bez zatrudnienia - projekty pozakonkursowe EURES
					<p>
                        Nazwa beneficjata: <b>Ue</b><br>
 	                    Wartość ogółem: <b>495 393,75 zł</b><br>
	                    Wydatki kwalifikowalne: <b>493 393,00</b><br>
	                    Dofinansowanie: <b>421 084,69 zł</b> 
					</p>	
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
                        <?php echo number_format($province ['Śląskie']['people'], 0, ',', ' ');?>
                    </div>
                </div>
                <div class="stats">
                    <div class="statsRight">
                        <div class="statsImg">
                            <img src="icons/money-bag.gif"/>
                        </div>
                        <h1>Budżety O.</h1>
                        <hr/>
                        <?php echo number_format($province ['Śląskie']['budget'], 0, ',', ' ') . " zł";?>
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