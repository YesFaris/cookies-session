<?php
// require("./generic_functions.php");
// L'utiisateur à uploder un fichier
// define("MAX_SIZE", 3000000);
// if (isset($_POST['submit']) && isset($_FILES['photo_profile'])) {
//     $fileName = $_FILES['photo_profile']['name'];
//     $tmpDir = $_FILES['photo_profile']['tmp_name'];
//     // echo "filename = " . $fileName;
//     // echo 'tmpDir = ' . $tmpDir;
//     $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
//     // echo 'file extension = $fileExtension';
//     // fonction qui sauvegarde le fichier à l'endroit désiré.

//     $allowedFiles = ['jpeg', 'png', 'jpg'];
//     if (in_array($fileExtension, $allowedFiles)) {
//         if ($_FILES["photo_profile"]["error"] === 0) {
//             if ($_FILES["photo_profile"]["size"] <= MAX_SIZE) {
//                 move_uploaded_file($tmpDir, "./upload/img-upload-" . time(). '.' . $fileExtension);

//             } else {
//                 echo "Fichier trop volumineux.(>" . MAX_SIZE . "octets)";
//             }
//         } else {
//             echo 'Erreur de chargement du fichier. Reessayez';
//         }
//     } else {
//         echo "Fichier $fileExtension non autorissés !<br>";
//         echo "Formats autorisés : " . implode(" , ", $allowedFiles);
//     }
// } else {
//     header('Location: /index.php?error=no_file_uploaded ');

//     exit;
// }
// récupérer les informations du fichier (nom, extension, chemin)
// sauvegarder le fichier sur le serveur 