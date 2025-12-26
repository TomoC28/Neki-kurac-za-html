<?php
$ime = "Tomislav";
$prezime = "Cvjetovic";
$godine = 21;
echo("Ja sam $ime $prezime i imam $godine godina.");
echo var_dump($ime);
echo var_dump($prezime);
echo var_dump($godine);
$ocjena=5;
function opisOcjene($ocjena){
switch($ocjena){
    case 1:
        echo"Nedovoljan\n";
        break;
    case 2:
        echo"Dovoljan\n";
        break;
    case 3:
        echo"Dobar\n";
        break;
    case 4:
        echo"Vrlo dobar\n";
        break;
    case 5:
        echo"Odličan\n";
        break;
    default:
        echo "OCJENA NIJE VALJANA\n";
}
}

$ocjene=[1,2,3,2,4,3,5,1];

echo"<br>";
for ($x = 1; $x <= 100; $x++) {
  echo "$x ";
}
$x=0;
echo"<br>";
while($x < 100){
    if($x%2 !=0){
        echo"$x<br>";
    }
    $x++;
}

function zbroj($a,$b){
    return($a+$b);
}
$b1=3;
$b2=5;
$rez=zbroj($b1,$b2);
echo"zbroj $b1 i $b2 je $rez";
echo"<br><br>";
$brojevi=[1,2,3,4,5,6,7,8,9,10];
foreach ($brojevi as $b) {
    if($b%2==0){
        echo"broj $b je paran<br>";
    }
    else{
        echo"broj $b je neparan<br>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="z.css">
    <script src="zjava.js"></script>
</head>
<body onload="funkcija()">
    <p>
        <?php
        echo"JA SAM CVJETKOSLAV";
        ?>
        <table>
            <th>OCJENA</th>
            <th>OPIS</th>
        <?php
        foreach($ocjene as $c){
            echo"<tr>";
            echo"<td>$c</td>";
            echo"<td>";
            opisOcjene($c);
            echo"</td>";
            echo"</tr>";

        }
        ?>
        </table>
    </p>
</body>
</html>