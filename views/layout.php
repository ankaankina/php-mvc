<DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <link rel="stylesheet" href="css/custom.css">
        </head>
        <body>
            <div class="container">
                <header>
                    <ul class="nav nav-pills nav-stacked navbar-left">
                        <li role="presentation" class="active">
                            <a href='/'>Главная</a>
                        </li>
                        <li role="presentation">
                            <a href='?controller=pages&action=newQuest'>Новая задача</a>
                        </li>
                    </ul>
                </header>

                <main>
                    <?php require_once('routes.php'); ?>

                    <footer>

                    </footer>
                </main>
            </div>
        <body>
    <html>
