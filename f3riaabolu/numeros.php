
<?php
function rjc_tofloat($num) {
    $num=trim($num);
    if ($num==='') {return 0;}
    else {
         do {
             $signo=$num[0]; $num=substr($num, 1);
             $Ok=strpos("-+.0123456789",$signo);
         }
         while($num!=='' && $Ok===false);
         if ($signo==='-' || $signo==='+') {$resulta=$num;}
         else if ($signo==='.') {$resulta='0.'.$num; $signo='';}
         else {$resulta=$signo.$num; $signo='';}
         if ($resulta==='') {return 0;}
        $num=$resulta;
        $dotPos = strrpos($num, '.');
        $commaPos = strrpos($num, ',');
        $sep = (($dotPos > $commaPos) && $dotPos) ? $dotPos :
                   ((($commaPos > $dotPos) && $commaPos) ? $commaPos : false);
        if (!$sep) {return floatval($signo.preg_replace("/[^0-9]/", "", $num));}
        return floatval($signo.
                   preg_replace("/[^0-9]/", "", substr($num, 0, $sep)) . '.' .
                   preg_replace("/[^0-9]/", "", substr($num, $sep+1, strlen($num)))
        );
    }
}

?>