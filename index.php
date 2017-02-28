<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php

    $age = "16";
    if ($age > "16") {
        print "Buy Specs";
    } elseif ($age > "18")
        print "Buy Mugs";
    else {
        if ($age > "21")
            print "Buy Mugs";
    }
    ?>
</p>
</body>
</html>