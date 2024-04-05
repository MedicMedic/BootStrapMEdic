<html>
    <head>
        <title>PHP POST Demo</title>
    </head>

    <body>
        <?php
            $print = $_POST['fname'];

            echo "Text successfully transferred using POST: $print";
        ?>
    </body>
</html>