<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>

<body>
<?php
$vodkaPrice = 119;
$homelessMoney =25;
$holkaMoney = 17;
$succesfulmanMoney = 40;
$podnikatelMoney = 100;
$neprizpusobiviMoney = 50;
$cigaPrice = 100;
$bezdakKombo = $vodkaPrice+$cigaPrice

$homelessMoney = $homelessMoney + $holkaMoney;
echo "Holčina mu dala $holkaMoney<br>";
$homelessMoney = $homelessMoney + $succesfulmanMoney;
echo "Muž který byl na příjmacím pohovoru a úspěšně ho vzali přihodil dalších $succesfulmanMoney<br>";
$homelessMoney = $homelessMoney + $podnikatelMoney;
echo "Podnikatel který měl přeplněnou peněženku mu dal $podnikatelMoney bankovku<br>";
$homelessMoney = $homelessMoney - $neprizpusobiviMoney;
echo "Pak mu ukradli $neprizpusobiviMoney<br>";
$homelessMoney = $homelessMoney + $bezdakKombo
echo "Bezdomovec si chce koupit vodku a cigára.";
?>

<?php
echo "Bezdomovec má $homelessMoney než jde do večerky.";
?>
<br>
<b>
<?php
if ($homelessMoney >= $vodkaPrice) {
$homelessMoney -= $vodkaPrice;
echo "Koupil si vodku";
?>
<br>
<?php
echo "Má vodku a může pít!";
}
else {echo "Bezdomák nemá prachy. Sorry jakože.";

}
echo "Po návštěvě večerky $homelessMoney";
?>
<?php
    echo "zbytek bezdomovo zisku po návštěvě večerky: $homelessMoney" ;
if
  ($homelessMoney >= $bezdakKombo)
    { $homelessMoney =  $homelessMoney - $bezdakKombo ;
    echo"Bezďák má vodku a cíga a ";                             }
elseif
  ($homelessMoney >= $cigaPrice)
    {$homelessMoney = $homelessMoney - $cigaPrice ;
    echo "Bezďák neměl cash na Vodku tak si koupil jen cíga. ";  }
 else {
      echo "Bezďák odchází s prázdnou. ";
    }
     echo "zbytek bezdomovo zisku po návštěvě večerky: $homelessMoney" ;
 ?>
</body>



</html>
