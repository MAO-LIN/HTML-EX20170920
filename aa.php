<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:11
 */
?>
<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <?php
        for($r=0;$r<=255;$r+=22) {
            echo "<table>";
            for ($g = 0; $g <= 255; $g += 22) {
                echo "<tr>";
                for ($b = 0; $b <= 255; $b += 22) {
                    echo "<td bgcolor='rgb($r $g $b)'></td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
        ?>
</body>
</html>
