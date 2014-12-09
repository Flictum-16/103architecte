<?php

/*  
   Transformation.php for  in /home/bertra_v/tek_1/Maths/103architecte
   
   Made by Florent Bertrand
   Login   <bertra_v@epitech.net>
   
   Started on  Mon Dec  8 17:34:37 2014 Florent Bertrand
   Last update Mon Dec  8 17:34:41 2014 Florent Bertrand
*/  

// matrice homogène
$Homo_mat = array(array(1.000, 0.000, 0.000), array(0.000, 1.000, 0.000), array(0.000, 0.000, 1.000));

;

function v_homothetie($Xprev, $Yprev, $Xh, $Yh)
{
	echo "homothétie de rapports ".$Xh." et ".$Yh."\n";
}

function v_translation($Xprev, $Yprev, $Xt, $Yt)
{
	echo "translation du vecteur (".$Xt.",".$Yt.")\n";
}

function v_rotate($Xprev, $Yprev, $angle)
{
	echo "rotation d’angle ".$angle." degrés\n";
}

function v_symetric($Xprev, $Yprev, $angle)
{
	echo "symétrie par rapport à un axe incliné de ".$angle." degrés\n";
}