<!doctype html>
<html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Dijital Pano</title>
    	<link href="<?= site_url(
         "public/assets/css/board.css",
     ) ?>" rel="stylesheet">
    </head>
    <body>
        <div class="dashboard">
            <div class="logo-container">
                <img src="<?= site_url(
                    "public/uploads/logo.png",
                ) ?>" alt="Logo" class="logo">
            </div>

            <div class="container">
                <div id="clock">
                    <div id="time"></div>
                    <div id="date"></div>
                </div>
            </div>

            <div class="announcement-bar">
                <div class="announcement-content">
                    <span class="announcement-text"></span>
                </div>
            </div>
        </div>
        <script src="<?= site_url("public/assets/js/board.js") ?>"></script>
    </body>
</html>
