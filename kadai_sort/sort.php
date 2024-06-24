<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php

        function sort_2way($array,$oder) {
        if ($oder == "asc") {
            sort($array);
        } else if ($oder == "desc"){
            rsort($array);
        }
        return $array;
    }

    $nums =[15,4,18,23,10];

    echo "昇順にソートします。<br>";
    $sorted_nums_asc = sort_2way($nums,"asc");
    foreach ($sorted_nums_asc as $num) {
        echo $num . "<br>";
    }

    echo "降順にソートします。<br>";
    $sorted_nums_asc = sort_2way($nums,"desc");
    foreach ($sorted_nums_asc as $num) {
        echo $num . "<br>";
    }

        ?>
    </p>
</body>

</html>