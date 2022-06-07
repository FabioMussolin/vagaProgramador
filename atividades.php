<html>
<head>
</head>
<body>
<script language=javascript type="text/javascript">
var data = new Date();

var dia = String(data.getDate()).padStart(2, '0');

var mes = String(data.getMonth() + 1).padStart(2, '0');

var ano = data.getFullYear();

dataAtual = dia + '/' + mes + '/' + ano;

document.write(dataAtual);

</script>
</body>
</html>


<?php

$string1 = "cARAVELAS";
$string2 = "Caravelas Portuguesas";
$string3 = "caravelas";

$StrtoArr1 = preg_split('//u', $string1, -1, PREG_SPLIT_NO_EMPTY);
$StrtoArr2 = preg_split('//u', $string2, -1, PREG_SPLIT_NO_EMPTY);
$StrtoArr3 = preg_split('//u', $string3, -1, PREG_SPLIT_NO_EMPTY);

 $tam1 = count($StrtoArr1);
 $novoTexto1 = "";
 
  $tam2 = count($StrtoArr2);
 $novoTexto2 = "";
 
  $tam3 = count($StrtoArr3);
 $novoTexto3 = "";
 
for($i=0;$i< $tam1;$i++){
    if($i%2 == 0){// par
        $novoTexto1 .= strtoupper($StrtoArr1[$i]);
    }else{
        $novoTexto1 .= strtolower($StrtoArr1[$i]);
    }
}

for($i=0;$i< $tam2;$i++){
    if($i%2 == 0){// par
        $novoTexto2 .= strtoupper($StrtoArr2[$i]);
    }else{
        $novoTexto2 .= strtolower($StrtoArr2[$i]);
    }
}

for($i=0;$i< $tam3;$i++){
    if($i%2 == 0){// par
        $novoTexto3 .= strtoupper($StrtoArr3[$i]);
    }else{
        $novoTexto3 .= strtolower($StrtoArr3[$i]);
    }
}
 
echo $novoTexto1.' - ';
echo $novoTexto2.' - ';
echo $novoTexto3;

?>

