<?php
$dta["NAMA"] ="DESICANCI";
$dta["TGL_LAHIR"]= "2003-28-12";
$dta["JKL"]="P";
$dta["ASAL"]="BANGLI";
$dta["HOBI"]="TURU";

header ("Content-type:application/json; charset = utf-8");
echo json_encode($dta);

