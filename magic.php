<?php

$card1 = array(
    array(1, 3, 5),
    array(7, 9, 11),
    array(13, 15, 17),
    array(19, 21, 23),
    array(25, 27, 29)
);

$card2 = array(
    array(2, 3, 6),
    array(7, 10, 11),
    array(14, 15, 18),
    array(19, 22, 23),
    array(26, 27, 30)
);

$card3 = array(
    array(4, 5, 6),
    array(7, 12, 13),
    array(14, 15, 20),
    array(21, 22, 23),
    array(28, 29, 30)
);

$card4 = array(
    array(8, 9, 10),
    array(11, 12, 13),
    array(14, 15, 24),
    array(25, 26, 27),
    array(28, 29, 30)
);

$card5 = array(
    array(16, 17, 18),
    array(19, 20, 21),
    array(22, 23, 24),
    array(25, 26, 27),
    array(28, 29, 30)
);

$value = $_GET['card'];
$answer = 0;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Math Magic Trick</title>
</head>

<body>
    <h1>Math Magic Trick</h1>
    <div class="answers" style="border-top: 3px solid black;">
        <h4>
            <?php
            echo "You have selected : <br />";
            foreach ($value as $checked) {
                echo $checked . "<br />";
                $update = $checked[5];

                for ($update; $update <= 5; $update++) {
                    if ($update == 1) {
                        $answer += $card1[0][0];
                        break;
                    }
                    if ($update == 2) {
                        $answer += $card2[0][0];
                        break;
                    }
                    if ($update == 3) {
                        $answer += $card3[0][0];
                        break;
                    }
                    if ($update == 4) {
                        $answer += $card4[0][0];
                        break;
                    }
                    if ($update == 5) {
                        $answer += $card5[0][0];
                        break;
                    }
                }
            }
            ?>
        </h4>
        <h2>
            <?php
            echo "<br />Your Guessed Number : " .  $answer;
            echo "<br /><br />NOTE : If this number is wrong then please check your selected cards again.";
            ?>
        </h2>
    </div>
</body>

</html>