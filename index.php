<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>
    <?php

    $age = "19";
    if ($age > "16" and "< 18") {
        echo "Buy Specs";
    } else if ($age > "18")
        echo "Buy Mugs";
    else {
        if ($age > "21")
            echo "Buy Mugs";
    }
    ?>
</p>
</body>
</html>