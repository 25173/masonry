<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<h1>afbeeldingen van Timothy</h1>

    <div id="gallerij">
        <div class="grid">
            <?php
            for ($i = 1; $i < 27; $i++){
                echo "<div class=\"item photo\">
                <div class=\"content\">
                    <div class=\"title\">
                        <h3>".$i ." : title</h3>
                    </div>
                    <img class=\"photothumb\" src=\"afb/".$i. ".jpg\" alt=\"team".$i."\">
                    <div class=\"desc\">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce facilisis fringilla laoreet. Mauris mattis enim ut felis consectetur, vitae lacinia enim auctor. Aenean vitae fermentum odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dictum non orci ut dignissim. Fusce fermentum felis aliquam, mattis nibh ut, faucibus leo. Sed lectus libero, volutpat at eros quis, venenatis tempus neque. Nulla vel .</p>
                    </div>
                </div>
            </div>";
            }
            ?>
        </div>
    </div>
    <footer></footer>
<script src="java.js"></script>
</body>
</html>