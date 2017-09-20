<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css"> 
        <link href="../css/style.css" rel="stylesheet">
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../admin/index.php"><img src="../files/vikings-logo.jpg" width="40" height="40" class="d-inline-block align-top"> Viking Beards</a>
                </div>                
                <?php if (!is_checked_in()): ?>
                    <div id="navbar" class="navbar-collapse collapse">
                        <form class="navbar-form navbar-right" action="login.php" method="post">
                            <button type="submit" class="btn btn-success">Login</button>
                        </form>
                    </div>
                    </form>
                </div>
            <?php else: ?>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">     
                        <li><a href="../admin/internal.php">Interner Bereich</a></li>       
                        <li><a href="../admin/settings.php">Einstellungen</a></li>
                        <li><a href="../admin/logout.php">Logout</a></li>
                    </ul>   
                </div>
            <?php endif; ?>
        </div>
    </nav>