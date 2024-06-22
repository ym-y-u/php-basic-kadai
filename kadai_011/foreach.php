<!DOCTYPE html>
 <html lang="ja">

  <body>
    <p>
      <?php
      $date = ['name' => '玉ねぎ', 'price' => '200', 'area' =>'北海道'];

      foreach ($date as $key => $value) {
        echo "{$key}:{$value}<br>";
      }
      ?>
    </p>
  </body>
 </html>