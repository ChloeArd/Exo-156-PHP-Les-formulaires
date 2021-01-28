<?php

$prenom = trim(strip_tags($_POST['username']));

    if (!isset($_POST['username'])){
        header("Location: index.php?error=1");
    }
    else{
        echo "Prénom : $prenom <br>";
    }

    if ($prenom === "james"){
        echo "Bond, James Bond";
    }
    else {
        echo "Bonjour $prenom";
    }