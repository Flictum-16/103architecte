<?php

 /*
	check_option.php for  in /home/bertra_v/tek_1/Maths/103architecte
   
	Made by Florent Bertrand
	Login   <bertra_v@epitech.net>
   
	Started on  Mon Dec  8 14:14:35 2014 Florent Bertrand
 	Last update Mon Dec  8 14:45:22 2014 Florent Bertrand
*/

include 'Transformation.php';

// check option  

if (count($argv) > 4) 
{
	for ($i = 3; $i < count($argv);)
	{
		if (!strcmp("T", $argv[$i]))
		{
			if (empty($argv[$i + 1]) == true || empty($argv[$i + 2]) == true)
			{
				echo "Please put a parameter to use 'T' option";
				exit(0);
			}
			if ((is_numeric($argv[$i + 1]) === true) && (is_numeric($argv[$i + 2])=== true))
			{
				v_translation($argv[1], $argv[2], $argv[$i + 1], $argv[$i + 2]);
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
				v_homothetie($argv[1], $argv[2], $argv[$i + 1], $argv[$i + 2]);
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
				echo "Please put two parameters to use 'R' option";
				exit(4);
			}
			if ((is_numeric($argv[$i + 1]) === true))
			{
				v_rotate($argv[1], $argv[2], $argv[$i + 1]);
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
				v_symetric($argv[1], $argv[2], $argv[$i + 1]);
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
}
else
{
	echo "Usage : {./103architecte} {point1} {point2} {Option} {argument's option}";
	exit(7);
}

?>