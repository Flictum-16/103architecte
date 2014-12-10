<?php

/*  
   Transformation.php for  in /home/bertra_v/tek_1/Maths/103architecte
   
   Made by Florent Bertrand
   Login   <bertra_v@epitech.net>
   
   Started on  Mon Dec  8 17:34:37 2014 Florent Bertrand
   Last update Mon Dec  8 17:34:41 2014 Florent Bertrand
*/  

// matrice homogène

function	print_m($matrix)
{
  for ($i = 0; $i < 3; $i++)
  {
    echo "\t";
    for ($j = 0; $j < 3; $j++)
      echo number_format($matrix[$i][$j], 3)." ";
    echo "\n";
  }
}

function v_homothetie($Xprev, $Yprev, $Xh, $Yh, $matrix)
{
	echo "homothétie de rapports ".$Xh." et ".$Yh."\n";
  $matrix[0][0] *= $Xh;
  $matrix[1][1] *= $Yh;
  $matrix[0][2] *= $Xh;
  $matrix[1][2] *= $Yh;
  return $matrix;
}

function v_translation($Xprev, $Yprev, $Xt, $Yt, $matrix)
{
	echo "translation du vecteur (".$Xt.",".$Yt.")\n";
  $matrix[0][2] += $Xt;
  $matrix[1][2] += $Yt;
  return $matrix;
}

function v_rotate($Xprev, $Yprev, $angle)
{
	echo "rotation d’angle ".$angle." degrés\n";
}

function v_symetric($Xprev, $Yprev, $angle)
{
	echo "symétrie par rapport à un axe incliné de ".$angle." degrés\n";
}

// On affiche la matrice 



// On affiche la nouvelle position