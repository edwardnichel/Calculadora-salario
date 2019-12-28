<?php 
function calculosalario($a){
  return $a*0.3;
}

function fgts($a){
  return $a*1.05;
}

function salario($a,$b,$c,$d){
  $i1 = $a * $b;
  


  if ($c == "Isalubridade") {
    return $i1 + $d;
  }
  else {
    return $i1*1.3;
  }
}



function inss($a){
  if($a <= 1751){
  $inss = $a * 0.08;
}elseif($a <= 2919){
  $inss = $a * 0.09;
}elseif($a <= 5839){
  $inss = $a * 0.11;
 
}
}

function irrf($a){
  if ($a <= 1903){
        $irrf = 0;
    }elseif($a <= 2826){
        $irrf = $a * 0.075;
    }elseif($a <= 3751 ){
        $irrf = $a * 0.15;
    }elseif($a <= 4664 ){
        $irrf = $a * 0.22;
    }elseif($a >= 4465){
        $irrf = $a * 0.27;

        return $irrf;

    }
}

function sal_filho($a,$b){
  if ($b > 0){
    
    $sal_filhos = $a + ( 45 * $b);
}
}
