<?php 
$province = array(
    'Zachodnio-Pomorskie' => array(
        'people' => 1701030,
        'area' =>   22897,
        'budget' => 3950000, // 7
        'capital' => 'Szczecin',
        'pkb' => 43150,
        'per' => 2.32,
    ),
    'Świętokrzyskie' => array(
        'people' => 1241546,
        'area' =>   11711,
        'budget' => 7058000, // 6
        'capital' => 'Kielce',
        'pkb' => 53654,
        'per' => 5.68,
    ),
    'Śląskie' => array(
        'people' => 4533565,
        'area' =>   12333,
        'budget' => 89772000, // 24
        'capital' => 'Katowice',
        'pkb' => 36970,
        'per' => 20.0,
    ),
    'Mazowieckie' => array(
        'people' => 5403412,
        'area' =>   35558,
        'budget' => 80686000, // 17
        'capital' => 'Warszawa',
        'pkb' => 83123,
        'per' => 14.92,
    ),
    'Warmińsko-mazurskie' => array(
        'people' => 1428983,
        'area' =>   24173,
        'budget' => 8039000, // 9
        'capital' => 'Olsztyn',
        'pkb' => 36306,
        'per' => 5.63,
    ),
    'Pomorskie' => array(
        'people' => 2333523,
        'area' =>   18321,
        'budget' => 13981000, // 12
        'capital' => 'Gdańsk',
        'pkb' => 50001,
        'per' => 5.99,
    ),
    'Podlaskie' => array(
        'people' => 1181533,
        'area' => 20187,
        'budget' => 15384000, // 7
        'capital' => 'Białystok',
        'pkb' => 37077,
        'per' => 13.02,
    ),
    'Podkarpackie' => array(
        'people' => 2129015,
        'area' =>   17846,
        'budget' => 13119000, // 9
        'capital' => 'Rzeszów',
        'pkb' => 36088,
        'per' => 6.16,
    ),
    'Opolskie' => array(
        'people' => 986506,
        'area' =>   9412,
        'budget' => 5596000, // 6
        'capital' => 'Opole',
        'pkb' => 41080,
        'per' => 5.67,
    ),
    'Lubuskie' => array(
        'people' => 1014548,
        'area' =>   13988,
        'budget' => 13116000, // 5
        'capital' => 'Gorzów Wielkopolski',
        'pkb' => 42755,
        'per' => 12.92,
    ),
    'Lubelskie' => array(
        'people' => 2117619,
        'area' =>   25122,
        'budget' => 25450000, // 15
        'capital' => 'Lublin',
        'pkb' => 35712,
        'per' => 12.02,
    ),
    'Dolnośląskie' => array(
        'people' => 2901225,
        'area' => 19947,
        'budget' => 34020000, // 11
        'capital' => 'Wrocław',
        'pkb' => 57228,
        'per' => 11.73,
    ),
    'Łódzkie' => array(
        'people' => 2466322,
        'area' => 18219,
        'budget' => 61181000, // 10
        'capital' => 'Łódź',
        'pkb' => 48126,
        'per' => 24.81,
    ),
    'Małopolskie' => array(
        'people' => 3400577,
        'area' =>   15183,
        'budget' => 7078000, // 7
        'capital' => 'Kraków',
        'pkb' => 47272,
        'per' => 2.08,
    ),

    'Kujawsko-Pomorskie' => array(
        'people' => 2077775,
        'area' =>   17972,
        'budget' => 19164000, // 9
        'capital' => 'Bydgoszcz',
        'pkb' => 35712,
        'per' => 9.22,
    ),
    'Wielkopolskie' => array(
        'people' => 3493969,
        'area' =>   29826,
        'budget' => 25953000, // 16
        'capital' => 'Poznań',
        'pkb' => 41875,
        'per' => 7.43,
    ),
);



@$woj = $_GET['woj'];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['woj']) && array_key_exists($_GET['woj'], $province)) {
        $people = $province [$_GET['woj']]['people'];
        $area = $province [$_GET['woj']]['area'];
    }
}

function display(){
    if(isset($_GET['woj'])){
        echo  "<button id='buttonSubmit' name='redirect' type='submit' value='1'>Przejdź >></button>";
    }
}
// Kalkulator
@$number = intval($_GET['number']);
if(isset($number)){
    /*if(@$w == 'doln'){
        $result = $number * $province ['Dolnośląskie']['per'];
    }*/
    switch (@$w) {
        case 'zach':
            $result = $number * $province ['Zachodnio-Pomorskie']['per'];
            break;
        case 'swie':
            $result = $number * $province ['Świętokrzyskie']['per'];
            break;
        case 'slas':
            $result = $number * $province ['Śląskie']['per'];
            break;
        case 'mazo':
            $result = $number * $province ['Mazowieckie']['per'];
            break;
        case 'warm':
            $result = $number * $province ['Warmińsko-mazurskie']['per'];
            break;
        case 'pomo':
            $result = $number * $province ['Pomorskie']['per'];
            break;
        case 'podl':
            $result = $number * $province ['Podlaskie']['per'];
            break;
        case 'podk':
            $result = $number * $province ['Podkarpackie']['per'];
            break;
        case 'opol':
            $result = $number * $province ['Opolskie']['per'];
            break;
        case 'lubu':
            $result = $number * $province ['Lubuskie']['per'];
            break;
        case 'lube':
            $result = $number * $province ['Lubelskie']['per'];
            break;
        case 'doln':
            $result = $number * $province ['Dolnośląskie']['per'];
            break;
        case 'lodz':
            $result = $number * $province ['Łódzkie']['per'];
            break;
        case 'malo':
            $result = $number * $province ['Małopolskie']['per'];
            break;
        case 'kuja':
            $result = $number * $province ['Kujawsko-Pomorskie']['per'];
            break;
        case 'wiel':
            $result = $number * $province ['Wielkopolskie']['per'];
            break;
        }
    $tran = @$result * 0.25;
    $gosp = @$result * 0.23;
    $kufi = @$result * 0.21;
    $oswi = @$result * 0.15;
    $tury = @$result * 0.05;
    $kult = @$result * 0.04;
    $pozo = @$result * 0.07;
}
// Kolorowanie mapy
if (isset($woj)){
    switch($woj) {
         case 'Zachodnio-Pomorskie':
            function color(){echo "<style>#POL3142{fill: #5dc776;}</style>";}
            break;
        case 'Świętokrzyskie':
            function color(){echo "<style>#POL3149{fill: #5dc776;}</style>";}
            break;
        case 'Śląskie':
            function color(){echo "<style>#POL3146{fill: #5dc776;}</style>";}
            break;
        case 'Mazowieckie':
            function color(){echo "<style>#POL3148{fill: #5dc776;}</style>";}
            break;
        case 'Warmińsko-mazurskie':
            function color(){echo "<style>#POL3139{fill: #5dc776;}</style>";}
            break;
        case 'Pomorskie':
            function color(){echo "<style>#POL3140{fill: #5dc776;}</style>";}
            break;
        case 'Podlaskie':
            function color(){echo "<style>#POL3150{fill: #5dc776;}</style>";}
            break;
        case 'Podkarpackie':
            function color(){echo "<style>#POL3152{fill: #5dc776;}</style>";}
            break;
        case 'Opolskie':
            function color(){echo "<style>#POL3167{fill: #5dc776;}</style>";}
            break;
        case 'Lubuskie':
            function color(){echo "<style>#POL3143{fill: #5dc776;}</style>";}
            break;
        case 'Lubelskie':
            function color(){echo "<style>#POL3151{fill: #5dc776;}</style>";}
            break;
        case 'Dolnośląskie':
            function color(){echo "<style>#POL3141{fill: #5dc776;}</style>";}
            break;
        case 'Łódzkie':
            function color(){echo "<style>#POL3147{fill: #5dc776;}</style>";}
            break;
        case 'Małopolskie':
            function color(){echo "<style>#POL3170{fill: #5dc776;}</style>";}
            break;
        case 'Kujawsko-Pomorskie':
            function color(){echo "<style>#POL3145{fill: #5dc776;}</style>";}
            break;
        case 'Wielkopolskie':
            function color(){echo "<style>#POL3144{fill: #5dc776;}</style>";}
            break;
        default:
            function color(){}
            break;
    }
}

// Przycisk
if (isset($_POST['redirect'])) {
    switch ($woj) {
        case 'Zachodnio-Pomorskie':
            header("Location: Zachodnio-Pomorskie.php");
            break;
        case 'Świętokrzyskie':
            header("Location: Świętokrzyskie.php");
            break;
        case 'Śląskie':
            header("Location: Śląskie.php");
            break;
        case 'Mazowieckie':
            header("Location: Mazowieckie.php");
            break;
        case 'Warmińsko-mazurskie':
            header("Location: Warmińsko-Mazurskie.php");
            break;
        case 'Pomorskie':
            header("Location: Pomorskie.php");
            break;
        case 'Podlaskie':
            header("Location: Podlaskie.php");
            break;
        case 'Podkarpackie':
            header("Location: Podkarpackie.php");
            break;
        case 'Opolskie':
            header("Location: Opolskie.php");
            break;
        case 'Lubuskie':
            header("Location: Lubuskie.php");
            break;
        case 'Lubelskie':
            header("Location: Lubelskie.php");
            break;
        case 'Dolnośląskie':
            header("Location: Dolnośląskie.php");
            break;
        case 'Łódzkie':
            header("Location: Łódzkie.php");
            break;
        case 'Małopolskie':
            header("Location: Małopolskie.php");
            break;
        case 'Kujawsko-Pomorskie':
            header("Location: Kujawsko-Pomorskie.php");
            break;
        case 'Wielkopolskie':
            header("Location: Wielkopolskie.php");
            break;
        default:
            header("Location: index.php");
            break;
        }
    } 
