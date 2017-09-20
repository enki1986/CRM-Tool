<?php
session_start();
require_once '../inc/config.inc.php';
require_once '../inc/functions.inc.php';
include '../templates/header.inc.php';;
?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="../css/bootstrap.min.css">
    </head>
    <body>
                   <section id="header">
                        <div class="container-fluid">
                            <div class="row-align-items-center">
                                <div class="section-content">
                                    <h1 class="text-center pagination-centered">Willkommen auf der Viking Beards Administrator Plattform</h1>
                                    <h3 class="text-center pagination-centered">Bitte loggen Sie sich ein!</h3>
                                </div>
                            </div>
                        </div>
                    </section>
         
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="../css/bootstrap.min.css"></script>
    </body>
</html>