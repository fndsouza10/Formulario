<?php
$folderPath = 'C:\xampp\htdocs'; // Substitua pelo caminho absoluto da pasta que deseja limpar
$daysThreshold = 60;

$currentDate = new DateTime();
$files = scandir($folderPath);

foreach ($files as $filename) {
    $filePath = $folderPath . DIRECTORY_SEPARATOR . $filename;

    if (is_file($filePath)) {
        $creationTime = filectime($filePath);
        $fileDate = new DateTime('@' . $creationTime);
        $diff = $fileDate->diff($currentDate);
        $daysDifference = $diff->days;

        if ($daysDifference > $daysThreshold) {
            unlink($filePath);
            echo "Arquivo $filename apagado.\n";
        }
    }
}
?>
