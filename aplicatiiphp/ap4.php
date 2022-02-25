<?php
$combustibil= 55;
$viteza = rand (40,80);
while ($combustibil >=0){


    if($viteza >=60): ?>
        <p style= 'color:red'>Ati depasit viteza legala 50km/h!</p>

    <?php endif;?>
    <?php if ($combustibil >=10 && $combustibil % 5 ==1):?>
    <p>Mergi Prudent! Viata are prioritate </p>
    <?php elseif ($combustibil >=2 && $combustibil <10):?>
    <p style='color:orange'>Va rog sa alimentati!</p>
    <?php elseif($combustibil <=1):?>
    <p style='color:red'> Trebuie sa ne oprim!</p>
    <?php die; endif;?>
    <?php
    $combustibil = $combustibil-2;



}
?>