
<?php
$user = [
 "nom" => "",
 "prenom" => "",
 "email" => "",
 "telephone" => "",
 "linkedin" => "",
 "github" => "",
 "biographie" => "",
 "loisir1" => "",
 "loisir2" => "",
 "loisir3" => "",
"loisir4" => "",

"language" => [],

"lang" => [],

"frameworks" => [],

"software" => [],

"couleurs" => [],
];
// if (isset($_POST['firstName']) && isset($_POST['lastName'])) {
//     echo $_POST['firstName'];
//     echo '<br />';
//     echo $_POST['lastName'];
// }
if (isset ($_POST['nom'])) {
    $user['nom'] = $_POST['nom'];
}

if (isset ($_POST['prenom'])) {
    $user['prenom'] = $_POST['prenom'];
}
if (isset ($_POST['email'])) {
    $user['email'] = $_POST['email'];
}
if (isset ($_POST['telephone'])) {
    $user['telephone'] = $_POST['telephone'];
}
if (isset ($_POST['linkedin'])) {
    $user['linkedin'] = $_POST['linkedin'];
}
if (isset ($_POST['github'])) {
    $user['github'] = $_POST['github'];
}
if (isset ($_POST['biographie'])) {
    $user['biographie'] = $_POST['biographie'];
}
if (isset ($_POST['loisir1'])) {
    $user['loisir-1'] = $_POST['loisir-1'];
}
if (isset ($_POST['loisir2'])) {
    $user['loisir-2'] = $_POST['loisir-2'];
}
if (isset ($_POST['loisir3'])) {
    $user['loisir-3'] = $_POST['loisir-3'];
}
if (isset ($_POST['loisir4'])) {
    $user['loisir-4'] = $_POST['loisir-4'];
}

if (isset ($_POST['language'])) {
    $user['language'] = $_POST['language'];
}

if (isset ($_POST['lang'])) {
    $user['lang'] = $_POST['lang'];
}

if (isset ($_POST['checkbox'])) {
    $user['checkbox'] = $_POST['checkbox'];
}

if (isset ($_POST['couleurs'])) {
    $user['couleurs'] = $_POST['couleurs'];
}

echo "<pre>";
var_dump($user);
echo "<pre>";

require './cv.phtml'; 
// if isset $_POST[truc]
// alors user[truc] va valloir post de truc