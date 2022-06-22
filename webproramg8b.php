<?php

// This function stores transpose
// of A[][] in B[][]
function transpose(&$A, &$B)
{
	$N = 4;
	for ($i = 0; $i < $N; $i++)
		for ($j = 0; $j < $N; $j++)
			$B[$i][$j] = $A[$j][$i];
}

// Driver code
$A = array(array(1, 1, 1, 1),
		array(2, 2, 2, 2),
		array(3, 3, 3, 3),
		array(4, 4, 4, 4));

$N = 4;

transpose($A, $B);

echo "Result matrix is \n";
for ($i = 0; $i < $N; $i++)
{
	for ($j = 0; $j < $N; $j++)
	{
		echo $B[$i][$j];
		echo " ";
	}
	echo "\n";
}

// This code is contributed
// by Shivi_Aggarwal
?>

