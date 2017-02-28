<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php

    $age = "19";
    if ($age > "16") {
        print "Buy Specs";
    } else if ($age > "18")
        print "Buy Mugs";
    else {
        if ($age > "21")
            print "Buy Mugs";
    }
    ?>
</p>
</body>
</html>