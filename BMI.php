<?php
$gewicht = $_GET["gewicht"];
$lengte = $_GET["lengte_cm"];
$lengte = $lengte / 100;
BMIcalc($gewicht,$lengte);
function BMIcalc($gewicht,$lengte) {
  $som = $gewicht / ($lengte * $lengte);
  echo "Uw BMI is ", round($som, 1);

  if ($som < 18.5) {
    echo " en dat is Ondergewicht";
  }
  if ($som >= 18.5 && $som< 25) {
    echo " en dat is Normaal/gezond";
  }
  if ($som >= 25 && $som < 27) {
    echo " en dat is Licht overgewicht";
  }
  if ($som >= 27 && $som < 30) {
    echo " en dat is Matig overgewicht";
  }
  if ($som >= 30 && $som < 40) {
    echo " en dat is Obesitas";
  }
  if ($som > 40) {
    echo " en dat is Morbide obesitas";
  }
}
 ?>
