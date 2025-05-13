<?php

$all1 = current($dbo->query("SELECT SUM(m1) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all2 = current($dbo->query("SELECT SUM(m2) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all3 = current($dbo->query("SELECT SUM(m3) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all4 = current($dbo->query("SELECT SUM(m4) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all5 = current($dbo->query("SELECT SUM(m5) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all6 = current($dbo->query("SELECT SUM(m6) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all7 = current($dbo->query("SELECT SUM(m7) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all8 = current($dbo->query("SELECT SUM(m8) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all9 = current($dbo->query("SELECT SUM(m9) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all10 = current($dbo->query("SELECT SUM(m10) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all11 = current($dbo->query("SELECT SUM(m11) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());
$all12 = current($dbo->query("SELECT SUM(m12) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());


$allIndys = current($dbo->query("SELECT COUNT(*) FROM $tabRes  WHERE  yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI'  ")->fetch());

$allProme = current($dbo->query("SELECT AVG(meta) FROM $tabRes WHERE yearini LIKE '%$year%' AND useresp LIKE '%$serespy%'  AND unidad LIKE '%$clientesu%' AND activo = 'SI' ")->fetch());

$logro1 = $all1/$allIndys;
$result1 = ($logro1/$allProme)*100;

$logro2 = $all2/$allIndys;
$result2 = ($logro2/$allProme)*100;

$logro3 = $all3/$allIndys;
$result3 = ($logro3/$allProme)*100;

$logro4 = $all4/$allIndys;
$result4 = ($logro4/$allProme)*100;

$logro5 = $all5/$allIndys;
$result5 = ($logro5/$allProme)*100;

$logro6 = $all6/$allIndys;
$result6 = ($logro6/$allProme)*100;

$logro7 = $all7/$allIndys;
$result7 = ($logro7/$allProme)*100;

$logro8 = $all8/$allIndys;
$result8 = ($logro8/$allProme)*100;

$logro9 = $all9/$allIndys;
$result9 = ($logro9/$allProme)*100;

$logro10 = $all10/$allIndys;
$result10 = ($logro10/$allProme)*100;

$logro11 = $all11/$allIndys;
$result11 = ($logro11/$allProme)*100;

$logro12 = $all12/$allIndys;
$result12 = ($logro12/$allProme)*100;


    if($logro1 == 0 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 0 & $logro1 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 5 & $logro1 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 10 & $logro1 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 20 & $logro1 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 30 & $logro1 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 40 & $logro1 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 50 & $logro1 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 60 & $logro1 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 70 & $logro1 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 75 & $logro1 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 80 & $logro1 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 85 & $logro1 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 90 & $logro1 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 95 & $logro1 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>01</strong></div></div><?php
        }elseif($logro1 > 98 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>01</strong></div></div><?php
    }
    if($logro2 == 0 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 0 & $logro2 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 5 & $logro2 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 10 & $logro2 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 20 & $logro2 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 30 & $logro2 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 40 & $logro2 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 50 & $logro2 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 60 & $logro2 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 70 & $logro2 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 75 & $logro2 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 80 & $logro2 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 85 & $logro2 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 90 & $logro2 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 95 & $logro2 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>02</strong></div></div><?php
        }elseif($logro2 > 98 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>02</strong></div></div><?php
    }
    if($logro3 == 0 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 0 & $logro3 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 5 & $logro3 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 10 & $logro3 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 20 & $logro3 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 30 & $logro3 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 40 & $logro3 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 50 & $logro3 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 60 & $logro3 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 70 & $logro3 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 75 & $logro3 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 80 & $logro3 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 85 & $logro3 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 90 & $logro3 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 95 & $logro3 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>03</strong></div></div><?php
        }elseif($logro3 > 98 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>03</strong></div></div><?php
    }
    if($logro4 == 0 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 0 & $logro4 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 5 & $logro4 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 10 & $logro4 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 20 & $logro4 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 30 & $logro4 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 40 & $logro4 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 50 & $logro4 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 60 & $logro4 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 70 & $logro4 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 75 & $logro4 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 80 & $logro4 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 85 & $logro4 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 90 & $logro4 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 95 & $logro4 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>04</strong></div></div><?php
        }elseif($logro4 > 98 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>04</strong></div></div><?php
    }
    if($logro5 == 0 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 0 & $logro5 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 5 & $logro5 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 10 & $logro5 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 20 & $logro5 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 30 & $logro5 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 40 & $logro5 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 50 & $logro5 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 60 & $logro5 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 70 & $logro5 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 75 & $logro5 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 80 & $logro5 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>05</strong></div></div><?php
        }elseif($logro5 > 85 & $logro5 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>05</strong></div></div><?php
        }
    
        if($logro5 > 90 & $logro5 <= 95){
      
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>05</strong></div></div><?php
        }
        if($logro5 > 95 & $logro5 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>05</strong></div></div><?php
        }
        if($logro5 > 98 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>05</strong></div></div><?php
    }
    if($logro6 == 0 ){
        ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 0 & $logro6 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 5 & $logro6 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 10 & $logro6 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 20 & $logro6 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 30 & $logro6 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 40 & $logro6 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 50 & $logro6 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 60 & $logro6 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 70 & $logro6 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 75 & $logro6 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 80 & $logro6 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 85 & $logro6 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 90 & $logro6 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 95 & $logro6 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>06</strong></div></div><?php
        }elseif($logro6 > 98 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>06</strong></div></div><?php
    }
    if($logro7 == 0 ){
        ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 0 & $logro7 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 5 & $logro7 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 10 & $logro7 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 20 & $logro7 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 30 & $logro7 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 40 & $logro7 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 50 & $logro7 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 60 & $logro7 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 70 & $logro7 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 75 & $logro7 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 80 & $logro7 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 85 & $logro7 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 90 & $logro7 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 95 & $logro7 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>07</strong></div></div><?php
        }elseif($logro7 > 98 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>07</strong></div></div><?php
    }
    if($logro8 == 0 ){
        ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 0 & $logro8 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 5 & $logro8 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 10 & $logro8 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 20 & $logro8 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 30 & $logro8 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 40 & $logro8 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 50 & $logro8 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 60 & $logro8 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 70 & $logro8 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 75 & $logro8 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 80 & $logro8 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 85 & $logro8 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 90 & $logro8 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 95 & $logro8 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>08</strong></div></div><?php
        }elseif($logro8 > 98 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>08</strong></div></div><?php
    }
    if($logro9 == 0 ){
        ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 0 & $logro9 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 5 & $logro9 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 10 & $logro9 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 20 & $logro9 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 30 & $logro9 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 40 & $logro9 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 50 & $logro9 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 60 & $logro9 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 70 & $logro9 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 75 & $logro9 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 80 & $logro9 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 85 & $logro9 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 90 & $logro9 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 95 & $logro9 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>09</strong></div></div><?php
        }elseif($logro9 > 98 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>09</strong></div></div><?php
    }
    if($logro10 == 0 ){
        ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 0 & $logro10 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 5 & $logro10 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 10 & $logro10 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 20 & $logro10 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 30 & $logro10 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 40 & $logro10 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 50 & $logro10 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 60 & $logro10 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 70 & $logro10 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 75 & $logro10 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 80 & $logro10 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 85 & $logro10 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 90 & $logro10 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 95 & $logro10 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>10</strong></div></div><?php
        }elseif($logro10 > 98 ){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>10</strong></div></div><?php
    }
    if($logro11 == 0 ){
        ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 0 & $logro11 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 5 & $logro11 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 10 & $logro11 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 20 & $logro11 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 30 & $logro11 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 40 & $logro11 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 50 & $logro11 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 60 & $logro11 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 70 & $logro11 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 75 & $logro11 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 80 & $logro11 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 85 & $logro11 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 90 & $logro11 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 95 & $logro11 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>11</strong></div></div><?php
        }elseif($logro11 > 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>11</strong></div></div><?php
    }
    if($logro12 == 0 ){
        ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert0"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 0 & $logro12 <= 5){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert5"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 5 & $logro12 <= 10){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert10"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 10 & $logro12 <= 20){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert20"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 20 & $logro12 <= 30){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert30"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 30 & $logro12 <= 40){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert40"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 40 & $logro12 <= 50){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert50"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 50 & $logro12 <= 60){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert60"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 60 & $logro12 <= 70){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert70"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 70 & $logro12 <= 75){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert75"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 75 & $logro12 <= 80){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert80"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 80 & $logro12 <= 85){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert85"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 85 & $logro12 <= 90){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert90"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 90 & $logro12 <= 95){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert95"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 95 & $logro12 <= 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert98"></div><div class="numes"><strong>12</strong></div></div><?php
        }elseif($logro12 > 98){
            ?><div class="backbarr" id="barr_ago"><div class="barraS porceVert100"></div><div class="numes"><strong>12</strong></div></div><?php
    }

?>
  
     
