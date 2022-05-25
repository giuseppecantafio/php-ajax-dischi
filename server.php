<?php
include __DIR__ . '/database.php';

$filteredByGenre = [];

if (isset($_GET['genre'])) {
    foreach ($dischi as $disco){
        if ($disco['genre'] == $_GET['genre']){
            $filteredByGenre[] = $disco;
        }
    } 
} else {

    $filteredByGenre = $dischi;
}
header('Content-Type: application/json');

echo json_encode($filteredByGenre);

?>