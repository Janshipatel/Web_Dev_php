<?php
$radius=5;
function Areaofcircle($radius)
{
	$pi=3.14;
	$Area=$pi*($radius*$radius);
	return $Area;
}
$cal_area_of_circle=Areaofcircle($radius);
echo "radius is:".$radius."Area of circle is:".$cal_area_of_circle;

?>