<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP関数_ソート関数</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($array, $order) {
      if ($order === TRUE) {
        echo '昇順にソートします。<br>';
        sort($array);
      } else {
        echo '降順にソートします。<br>';
        rsort($array);
      }

      foreach ($array as $value) {
        echo $value . '<br>';
      }
    }

    sort_2way([15, 4, 18, 23, 10], TRUE);
    echo '<br>';
    sort_2way([15, 4, 18, 23, 10], FALSE);
    ?>
  </p>
  
</body>
</html>