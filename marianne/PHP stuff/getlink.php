<html>
    <head>
        <title>PHP Get Demo</title>
    </head>

    <body>
        <?php
            if ($_GET)
            {
                echo "Items:" .$_GET['item'] .'<br>';
                echo "Quantity:" .$_GET['quantity'];
            }
            else
            {
                echo "<a href='getlink.php?item=book&quantity=100'>submit</a>";
            }
        ?>
    </body>
</html>