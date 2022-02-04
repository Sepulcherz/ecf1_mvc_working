<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= $data['page_title'] . " | " . WEBSTITE_NAME ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav id="navbar"><img src="./assets/imgs/LogoAfpa.png" alt="logo de L'AFPA" />



            <div class="links"><a href='home'>Home</a> <a href='about'>About</a>
                <?php

                if (isset($_SESSION['user_name'])) { ?>
                    <a href="profile">My Profile</a>
                <?php } else { ?>
                    <a href='login'>Connection</a>
                <?php } ?>

                <?php

                if (isset($_SESSION['user_name'])) { ?>
                    <a href="upload">Upload</a>
                <?php } else { ?>
                    <a href='signup'>Signup</a>
                <?php } ?>
            </div>
        </nav>
    </header>