<?php 
    $w = 'wiel';
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
        <h1>Województwo Wielkopolskie</h1>
        <p>Twoje województwo to wielka historia, wielka przygoda – to region z wieloma cennymi zabytkami, zamkami i pałacami czy atrakcjami dla miłośników turystyki industrialnej; z historyczną pierwszą stolicą Polski w Gnieźnie; województwo obfituje także w cenne obszary przyrodnicze z dwoma parkami narodowymi (Wielkopolski i fragment Drawieńskiego); charakteryzuje się dużym potencjałem dla turystyki aktywnej z Wielką Pętlą Wielkopolski na czele; stolicą regionu jest Poznań – najważniejszy w Polsce ośrodek targowy...</p>
</div>
</section>
<script src="js/scroll.js"></script>
<section style="height: 200px;"></section>
<hr/>
<section id="woj" style="height: 200px;"></section>
<section id="section4p">
    <iframe aria-label="Map" id="datawrapper-chart-mWZom" src="https://datawrapper.dwcdn.net/mWZom/1/" scrolling="no" frameborder="0"></iframe><script type="text/javascript">!function(){"use strict";window.addEventListener("message",(function(e){if(void 0!==e.data["datawrapper-height"]){var t=document.querySelectorAll("iframe");for(var a in e.data["datawrapper-height"])for(var r=0;r<t.length;r++){if(t[r].contentWindow===e.source)t[r].style.height=e.data["datawrapper-height"][a]+"px"}}}))}();</script>
    <div style="height: auto;">
        <h1>Wielkopolskie</h1>
        <p>Siedziba: <a class="data2"><?php echo $province ['Wielkopolskie']['capital'];?></a></p>
        <p>PKB na mieszkanća: <a class="data2"><?php echo number_format($province ['Wielkopolskie']['pkb'], 0, ',', ' ');?></a></p>
    </div>
</section>
<section style="height: 200px;"></section>
<hr/>
<section id="kalk" style="height: 200px;"></section>
<section id="section4">
    <div id="kalkulator">
        <h1>Kalkulator</h1>
        <p>Policz ile przypada budżetów obywatelskich na daną liczbę mieszkańców województwa.</p>
        <form action="Wielkopolskie.php#kalk" method="GET">
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
					<img src="icons/windsock1.png">
					</a>
					<h2>AEROSFERA. Lotnisko rzeczy</h2>
					<p>
                        Nazwa beneficjata: <b>Politechnika Poznańska</b><br>
 	                    Wartość ogółem: <b>21 741 480,00 zł</b><br>
	                    Wydatki kwalifikowalne: <b>21 704 584,00 zł</b><br>
	                    Dofinansowanie: <b>13 078 799,43 zł</b> 
					</p>
				</div>
			</div>
		
			<div class="card">
				<div class="imgBx">
					<a href="#projekty">
					<img src="icons/windsock.png">
					</a>
					<h2>AEROSFERA 2.0</h2>
					<p>
                        Nazwa beneficjata: <b>Politechnika poznańska</b><br>
 	                    Wartość ogółem: <b>6 765 000,00 zł</b><br>
	                    Wydatki kwalifikowalne: <b>6 760 000,00 zł</b><br>
	                    Dofinansowanie: <b>4 070 039 zł</b> 
					</p>				
				</div>	
			</div>	
			
			<div class="card">
				<div class="imgBx">
					<a href="#projekty">
					<img src="icons/medicine-book.png">
					</a>
                    <h2>Budowa i Wyposażenie Centrum Innowacyjnej </h2>
                        Farmaceutycznej i Uniwersytetu Medycznego im. Karola Marcinkowskiego w Poznaniu
					<p>
                        Nazwa beneficjata: <b>Uniwersytet medyczny im.Karola Marcinowskiego w poznaniu</b><br>
 	                    Wartość ogółem: <b>48 501 571,23 zł</b><br>
	                    Wydatki kwalifikowalne: <b>48 499 691,03 zł</b><br>
	                    Dofinansowanie: <b>20 000 075,57 zł</b> 
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
                        <?php echo number_format($province ['Wielkopolskie']['people'], 0, ',', ' ');?>
                    </div>
                </div>
                <div class="stats">
                    <div class="statsRight">
                        <div class="statsImg">
                            <img src="icons/money-bag.gif"/>
                        </div>
                        <h1>Budżety O.</h1>
                        <hr/>
                        <?php echo number_format($province ['Wielkopolskie']['budget'], 0, ',', ' ') . " zł";?>
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