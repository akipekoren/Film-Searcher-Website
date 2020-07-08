<?php

function getName ($genre , $new_g, $counter)
{

if ($counter < 2)
{

if (strpos($genre, '|') !== false)
{


$pos = strpos($genre, '|');

$the_rest = substr($genre, $pos + 1 , strlen($genre));


if ($counter != 0)
{
	$new_g = $new_g .", ". substr($genre, 0 , $pos) ;
}
else
{
	$new_g = substr($genre, 0 , $pos);
}

$counter++;
$new_g  = getName($the_rest, $new_g,$counter);
}

else
{

$new_g = $genre;
}

}

return $new_g;

}


function check_Color ($color_name)

{

	if ($color_name === "Color")
	{
		return "Colorful";
	}

	else
	{
		return $color_name;
	}


}

function year_arrange($year)
{

	return substr($year, 0, 4);
}





?>