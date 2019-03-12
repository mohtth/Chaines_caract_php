<?php

$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
$longMessage1 = strlen($message1);                              // Calculer la longueur de la chaîne
    $resultat1 = $longMessage1 / 2;                                // Diviser par 2, tu obtiendras ainsi le "chiffre-clé".
    echo $resultat1, '<br>';

$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$longMessage2 = strlen($message2);                              // Calculer la longueur de la chaîne
    $resultat2 = $longMessage2 / 2;                                 // Diviser par 2, tu obtiendras ainsi le "chiffre-clé".
    echo $resultat2, '<br>';

$message3 = "aopi?sgnirts@#?sedhtg+p9l!";
$longMessage3 = strlen($message3);                              // Calculer la longueur de la chaîne
    $resultat3 = $longMessage3 / 2;                                 // Diviser par 2, tu obtiendras ainsi le "chiffre-clé".
    echo $resultat3, '<br>';


// Récupère ensuite la sous-chaîne de la longueur du chiffre-clé en commençant à partir du 6ème caractère.
$message1 = "0@sn9sirppa@#?ia'jgtvryko1";
    $messageCoupee1 = substr($message1, 5, 13);
    echo $messageCoupee1, '<br>';

$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
    $messageCoupee2 = substr($message2, 5, 23);
    echo $messageCoupee2, '<br>';

$message3 = "aopi?sgnirts@#?sedhtg+p9l!";
    $messageCoupee3 =  substr($message3, 5, 13);
    echo $messageCoupee3, '<br>';

// Remplace les chaînes '@#?' par un espace.
$messageSansSpec1 = str_replace("@#?", " ", $messageCoupee1);
    echo $messageSansSpec1, '<br>';

$messageSansSpec2 = str_replace("@#?", " ", $messageCoupee2); 
    echo $messageSansSpec2, '<br>';

$messageSansSpec3 = str_replace("@#?", " ", $messageCoupee3); 
    echo $messageSansSpec3, '<br>';
    echo  '<br>';
    echo  '<br>';

    // Pour finir, inverse la chaîne de caractères.
$messageEnvers1 = strrev("$messageSansSpec1");
    echo $messageEnvers1, '<br>'; 

$messageEnvers2 = strrev("$messageSansSpec2");
    echo $messageEnvers2, '<br>'; 

$messageEnvers3 = strrev("$messageSansSpec3");
    echo $messageEnvers3, '<br>'; 

?>