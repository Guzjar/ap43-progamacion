<?php 
$data="Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";
$pais=explode(";"$data);
$mundo=[];
foreach ($data as $pais) {
    $partes=explode(",",$par);
    if(count($partes)==2){
        $ciudad=$partes[0];
        $pais=$partes[1];
        $mundo[$ciudad]=$pais;
    }
}
var_dump($mundo);