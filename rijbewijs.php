<?php
$min = 17;
echo("hoe oud ben je? ");
$age = readline();
if($min < $age) {
    print("Je mag een rijbewijs halen.");
}
if($min > $age) {
    print("Geen rijbewijs voor jou");
}
?>