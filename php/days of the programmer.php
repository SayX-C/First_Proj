<?php
if ($year == 1918) {
    return "26.09.{$year}";
}
return ($year < 1918 && $year % 4 == 0)
    || ($year > 1918 && (($year % 400 == 0) || ($year % 100 !== 0 && $year % 4 == 0)))
    ? "12.09.{$year}" : "13.09.{$year}";
