<?php
// правка 33-го коммита ⊗ppSpOtAU_94 №4
$num = 320;
$sum = 0;
$sqnum = sqrt($num);
for ($i = 1; $i <= $sqnum; $i++) {
    if ($num % $i == 0) {
        $sum += $i;
        $div = $num / $i;
        if ($i != $div) {
            $sum += $div;
        }
    }
}
echo $sum;