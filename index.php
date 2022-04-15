<?php


$num_char      = 21;
$num_hor = 11;
// onehalf_var nantinya nilainya bisa bertambah / berkurang, sedangkan half tetap
$onehalf      = floor($num_char / 2);
$onehalf2      = floor($num_hor / 2);
$onehalf_var = $onehalf;
$char1          = '*';
$char2          = '-';
$char3          = '&nbsp';

echo '<div style="font:bold 16px courier new; line-height:10px">';
// loop baris 21
for ($row = 1; $row <= $num_hor; $row++) {
    echo '<br/>';
    // loop kolom 11
    for ($col = 1; $col <= $num_char; $col++) {
        //jika kol >10 && kurang 11 cetak ---
        if
        (
            $col > $onehalf_var && $col < ($num_char - $onehalf_var)
        ){
            
            echo $char2;
        }
      
        else{
            echo $char1;
        }
    }
    //jika row kurang dari = 5 maka berkurang
    $row <= $onehalf2 ? $onehalf_var-- : $onehalf_var++;
    echo '<br/>';
}
echo '</div>';

?>
