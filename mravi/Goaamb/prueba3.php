<?php
$n1 = 0;
if (fscanf(STDIN, "%d", $n1) == 1) {
    $m = array();
    $a = 0;
    $b = 0;
    $x = 0;
    $t = 0;
    
    for ($i = 0; $i < $n1; $i ++) {
        for ($j = 0; $j < $n1; $j ++) {
            if (! isset($m[$i])) {
                $m[$i] = array();
            }
            $m[$i][$j] = array(
                0,
                0
            );
        }
    }
    
    for ($i = 0; $i < $n1 - 1; $i ++) {
        if (fscanf(STDIN, "%d%d%d%d", $a, $b, $x, $t) == 4) {
            $m[$a - 1][$b - 1] = array(
                $x,
                $t
            );
        }
    }
    $cadena="";
    $elementos=array();
    
    for ($i = 0; $i < $n1; $i++) {
        $cadena.="%d";
    }
    
    $elementos=fscanf(STDIN, $cadena);
    if (count($elementos)>0) {
        $sumas = array();
        for ($i = count($m) - 1; $i >= 0; $i --) {
            $m[$i][$i] = 0;
            $mayor = 0;
            for ($j = 0; $j < count($m[$i]); $j ++) {
                if ($j > 0 && $i != $j && isset($m[$i][$j]) && $m[$i][$j][0] > 0) {
                    if ($m[$i][$j][1] == 0) {
                        $elementos[$i] = floatval($elementos[$j]) * 100 / $m[$i][$j][0];
                    } else {
                        $elementos[$i] = sqrt(floatval($elementos[$j])) * 100 / $m[$i][$j][0];
                    }
                    if ($mayor < $elementos[$i]) {
                        $mayor = $elementos[$i];
                    }
                }
            }
            if ($mayor > 0) {
                $elementos[$i] = $mayor;
            }
        }
        
        print(round($elementos[0], 3) . "\n");
    }
}

?>
