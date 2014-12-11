<?php

/*  
   Transformation.php for  in /home/bertra_v/tek_1/Maths/103architecte
   
   Made by Florent Bertrand
   Login   <bertra_v@epitech.net>
   
   Started on  Mon Dec  8 17:34:37 2014 Florent Bertrand
   Last update Mon Dec  8 17:34:41 2014 Florent Bertrand
*/  

// produit matriciel

function matrix_product($matrix1, $matrix2)
{
  $matrix_result = array(array(0.000, 0.000, 0.000), array(0.000, 0.000, 0.000), array(0.000, 0.000, 0.000));
  $matrix_result[0][0] = $matrix1[0][0] * $matrix2[0][0] + $matrix1[0][1] * $matrix2[1][0] + $matrix1[0][2] * $matrix2[2][0];
  $matrix_result[0][1] = $matrix1[0][0] * $matrix2[0][1] + $matrix1[0][1] * $matrix2[1][1] + $matrix1[0][2] * $matrix2[2][1];
  $matrix_result[0][2] = $matrix1[0][0] * $matrix2[0][2] + $matrix1[0][1] * $matrix2[1][2] + $matrix1[0][2] * $matrix2[2][2];
  $matrix_result[1][0] = $matrix1[1][0] * $matrix2[0][0] + $matrix1[1][1] * $matrix2[1][0] + $matrix1[1][2] * $matrix2[2][0];
  $matrix_result[1][1] = $matrix1[1][0] * $matrix2[0][1] + $matrix1[1][1] * $matrix2[1][1] + $matrix1[1][2] * $matrix2[2][1];
  $matrix_result[1][2] = $matrix1[1][0] * $matrix2[0][2] + $matrix1[1][1] * $matrix2[1][2] + $matrix1[1][2] * $matrix2[2][2];
  $matrix_result[2][0] = $matrix1[2][0] * $matrix2[0][0] + $matrix1[2][1] * $matrix2[1][0] + $matrix1[2][2] * $matrix2[2][0];
  $matrix_result[2][1] = $matrix1[2][0] * $matrix2[0][1] + $matrix1[2][1] * $matrix2[1][1] + $matrix1[2][2] * $matrix2[2][1];
  $matrix_result[2][2] = $matrix1[2][0] * $matrix2[0][2] + $matrix1[2][1] * $matrix2[1][2] + $matrix1[2][2] * $matrix2[2][2];
  return $matrix_result;
}

// Affichage matrice

function	print_m($matrix)
{
  for ($i = 0; $i < 3; $i++)
  {
    echo "\t";
    for ($j = 0; $j < 3; $j++)
      echo number_format($matrix[$j][$i], 3)." ";
    echo "\n";
  }
}

function v_homothetie($Xh, $Yh)
{
	echo "homothétie de rapports ".$Xh." et ".$Yh."\n";
  $matrix_h = array(array(1.000, 0.000, 0.000), array(0.000, 1.000, 0.000), array(0.000, 0.000, 1.000));
  $matrix_h[0][0] = $Xh;
  $matrix_h[1][1] = $Yh;
  return $matrix_h;
}

function v_translation($Xt, $Yt)
{
	echo "translation du vecteur (".$Xt.",".$Yt.")\n";
  $matrix_t = array(array(1.000, 0.000, 0.000), array(0.000, 1.000, 0.000), array(0.000, 0.000, 1.000));
  $matrix_t[2][0] = $Xt;
  $matrix_t[2][1] = $Yt;
  return $matrix_t;
}

function v_rotate($angle)
{
	echo "rotation d’angle ".$angle." degrés\n";
  $angle_rad = deg2rad($angle);
  $matrix_r = array(array(1.000, 0.000, 0.000), array(0.000, 1.000, 0.000), array(0.000, 0.000, 1.000));
  $matrix_r[0][0] = cos($angle_rad);
  $matrix_r[1][0] = -sin($angle_rad);
  $matrix_r[0][1] = sin($angle_rad);
  $matrix_r[1][1] = cos($angle_rad);
  return $matrix_r;
}

function v_symetric($angle)
{
	echo "symétrie par rapport à un axe incliné de ".$angle." degrés\n"; 
  $angle_rad = deg2rad($angle);
  $matrix_s = array(array(1.000, 0.000, 0.000), array(0.000, 1.000, 0.000), array(0.000, 0.000, 1.000));
  $matrix_s[0][0] = cos($angle_rad * 2);
  $matrix_s[0][1] = sin($angle_rad * 2);
  $matrix_s[1][0] = sin($angle_rad * 2);
  $matrix_s[1][1] = -cos($angle_rad * 2);
  return $matrix_s;
}
?>