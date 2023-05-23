<?php
$dta[0]["NAMA"]="DESICANCI";
$dta[0]["TGL_LAHIR"]= "2003-28-12";
$dta[0]["JKL"]="P";
$dta[0]["ASAL"]="BANGLI";
$dta[0]["HOBI"]="TURU";


$dta[1]["NAMA"] ="CIPTA";
$dta[1]["TGL_LAHIR"]= "2000-25-05";
$dta[1]["JKL"]="L";
$dta[1]["ASAL"]="BANGLI";
$dta[1]["HOBI"]="FUTSAL";


$dta[2]["NAMA"] ="FEBRUARI";
$dta[2]["TGL_LAHIR"]= "2022-02-10";
$dta[2]["JKL"]="LP";
$dta[2]["ASAL"]="BANGLI";
$dta[2]["HOBI"]="REBAHAN";

header ("Content-type:application/json; charset = utf-8");
echo json_encode($dta);

