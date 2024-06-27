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
       foreach ($array as $num) {
        echo $num . "<br>";
       }
    }

    $nums =[15,4,18,23,10];

    echo "昇順にソートします。<br>";
    sort_2way($nums,"asc");

    echo "降順にソートします。<br>";
    sort_2way($nums,"desc");

        ?>
    </p>
</body>

</html>