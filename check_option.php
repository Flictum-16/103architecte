<?php

 	/*
	check_option.php for  in /home/bertra_v/tek_1/Maths/103architecte
   
	Made by Florent Bertrand
	Login   <bertra_v@epitech.net>
   
	Started on  Mon Dec  8 14:14:35 2014 Florent Bertrand
 	Last update Mon Dec  8 14:45:22 2014 Florent Bertrand
	*/

include 'Transformation.php';

// check les options passés en paramètre, création matrice finale et affichage des résultats 

if (count($argv) > 4) 
{
	$matrix_u = array(array(1.000, 0.000, 0.000), array(0.000, 1.000, 0.000), array(0.000, 0.000, 1.000));
	for ($i = 3; $i < count($argv);)
	{
		if (!strcmp("T", $argv[$i]))
		{
			if (empty($argv[$i + 1]) == true || empty($argv[$i + 2]) == true)
			{
				echo "Please put two parameter to use 'T' option";
				exit(0);
			}
			if ((is_numeric($argv[$i + 1]) === true) && (is_numeric($argv[$i + 2])=== true))
			{
				$matrix_t = v_translation($argv[$i + 1], $argv[$i + 2]);
				$matrix_u = matrix_product($matrix_u, $matrix_t);
				$i = $i + 3;
			}
			else
			{
				echo "One parameter : '".$argv[$i + 1]."', '".$argv[$i + 2]."' isn't a number";
				exit(1);
			}
		}
		else if (!strcmp("H", $argv[$i]))
		{
			if (empty($argv[$i + 1]) == true || empty($argv[$i + 2]) == true)
			{
				echo "Please put two parameters to use 'H' option";
				exit(2);
			}
			if ((is_numeric($argv[$i + 1]) === true) && (is_numeric($argv[$i + 2])=== true))
			{
				$matrix_h = v_homothetie($argv[$i + 1], $argv[$i + 2]);
				$matrix_u = matrix_product($matrix_u, $matrix_h);
				$i = $i + 3;
			}
			else
			{
				echo "One parameter : '".$argv[$i + 1]."', '".$argv[$i + 2]."' isn't a number";
				exit(3);
			}
		}
		else if (!strcmp("R", $argv[$i])) 
		{
			if (empty($argv[$i + 1]) == true)
			{
				echo "Please put a parameters to use 'R' option";
				exit(4);
			}
			if ((is_numeric($argv[$i + 1]) === true))
			{
				$matrix_r = v_rotate($argv[$i + 1], $matrix_u);
				$matrix_u = matrix_product($matrix_u, $matrix_r);
				$i = $i + 2;
			}
			else
			{
				echo "The parameter : '".$argv[$i + 1]."' isn't a number";
				exit(5);
			}
		}
		else if (!strcmp("S", $argv[$i])) 
		{
			if (empty($argv[$i + 1]) == true)
			{
				echo "Please put a parameter to use 'S' option";
				exit(4);
			}
			if ((is_numeric($argv[$i + 1]) === true))
			{
				$matrix_s = v_symetric($argv[$i + 1], $matrix_u);
				$matrix_u = matrix_product($matrix_u, $matrix_s);
				$i = $i + 2;
			}
			else
			{
				echo "The parameter : '".$argv[$i + 1]."' isn't a number";
				exit(5);
			}	
		}
		else
		{
			echo "Error, invalid option : '".$argv[$i]."'' You can only use 'T','H','R','S' option.";
			exit(6);
		}
	}
	$x_point =  $argv[1] * $matrix_u[0][0] + $argv[2] * $matrix_u[1][0] + 1 * $matrix_u[2][0];
 	$y_point =  $argv[1] * $matrix_u[0][1] + $argv[2] * $matrix_u[1][1] + 1 * $matrix_u[2][1];
  	$z_point =  $argv[1] * $matrix_u[0][2] + $argv[2] * $matrix_u[1][2] + 1 * $matrix_u[2][2];
	print_m($matrix_u);
	echo "(".$argv[1].",".$argv[2].") => (".number_format($x_point, 3).",".number_format($y_point, 3).")";
}
else
{
	echo "Usage : {./103architecte} {point1} {point2} {Option} {argument's option}";
	exit(7);
}
?>