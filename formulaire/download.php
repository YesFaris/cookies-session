<?php

// if (isset($_GET['file']) && !empty($_GET['file'])) {
//     $filePath = "./upload/" . $_GET['file'];
//     if(file_exists($filePath)){
//         header("Content-Type : application/octet-stream");
//         header("Content-Disposition : attachment; filename " . basename($filePath));
//         header("Content-Length" . filesize($filePath));
        
//         readfile($filePath);
//     }else {
//         echo "Le fichier n'existe pas";
//     }
// }