<?php
$ime = $_POST['ime'];
$gost_email = $_POST['email'];
$naslov = $_POST['naslov'];
$poruka = $_POST['poruka'];

$email_stranice = 'leihh2021@gmail.com';

$email_naslov = 'Novi obrazac';

$email_sadrzaj = "Ime gosta: $ime.\n".
                 "Email gosta: $gost_email.\n".
                 "Naslov: $naslov.\n".
                 "Poruka: $poruka.\n";

$za = 'medinahuseih@hotmail.com';

$headers = "Od: $email_stranice \r\n";

$headers .= "Odgovori-Na: $gost_email \r\n";

mail($za,$email_naslov,$email_sadrzaj,$headers);

header("Lokacija: kontakt2.html");
>