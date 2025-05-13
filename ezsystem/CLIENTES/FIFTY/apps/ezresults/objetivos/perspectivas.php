<?php 
require_once '../varSQL/dbmysql.php';


?>

<section id="tablaKPIS">

    <table id="tablataKPIS">
        
        <tr id="columnasFun">
            <th id="colkpisimg"></th>
            <th id="colkpis"></th>
        </tr>

        <section id="calcs">

            <?php



                     ////////////////VALIDACIONES
                    $valkpis = "SELECT * FROM $alobj WHERE yearini LIKE '%$year%' AND useresp LIKE '%$dueno%' AND activo = 'SI' ";
                    $qvalkpis = $dbo->query($valkpis);
                    while ($fila= $qvalkpis->fetch(PDO::FETCH_ASSOC)) {

                     
                        $nameobj = $fila['objetivo'];
                    //    $idobj = $fila['idobj'];

                        if(empty($periodo)){


                            /////////////////////////////////FINANCIERA  

                            $allcumpleFb = current($dbo->query("SELECT COUNT(*) FROM $alobj WHERE yearini LIKE '%$year%'
                            AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%FINANCIERA%'   AND activo = 'SI'")->fetch());

                            $sumacumpleFb = current($dbo->query("SELECT SUM(cumple) FROM $alobj WHERE yearini LIKE '%$year%'
                          AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%FINANCIERA%'   AND activo = 'SI'")->fetch());



                            /////////////////////////////////PROCESOS

                            
                            $allcumplepro = current($dbo->query("SELECT COUNT(*) FROM $alobj WHERE yearini LIKE '%$year%'
                            AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%PROCESOS%' AND activo = 'SI'  ")->fetch());

                            $sumapro = current($dbo->query("SELECT SUM(cumple) FROM $alobj WHERE yearini LIKE '%$year%'
                             AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%PROCESOS%' AND activo = 'SI'  ")->fetch());

                            /////////////////////////////////CLIENTE

                                                    
                            $allcumplecli = current($dbo->query("SELECT COUNT(*) FROM $alobj WHERE yearini LIKE '%$year%'
                           AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%CLIENTE%' AND activo = 'SI'  ")->fetch());

                            $sumacli = current($dbo->query("SELECT SUM(cumple) FROM $alobj WHERE yearini LIKE '%$year%'
                            AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%CLIENTE%' AND activo = 'SI' ")->fetch());

                            /////////////////////////////////CRECIMIENTO

                                                                            
                            $allcumpleCre = current($dbo->query("SELECT COUNT(*) FROM $alobj WHERE yearini LIKE '%$year%'
                           AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%CRECIMIENTO%' OR perspectiva LIKE '%DESARROLLO%' AND activo = 'SI'  ")->fetch());

                            $sumaCre = current($dbo->query("SELECT SUM(cumple) FROM $alobj WHERE yearini LIKE '%$year%'
                           AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%CRECIMIENTO%' OR perspectiva LIKE '%DESARROLLO%'  AND activo = 'SI' ")->fetch());

                        }else{

                            /////////////////////////////////FINANCIERA  

                            $allcumpleFb = current($dbo->query("SELECT COUNT($conmes) FROM $alobj WHERE yearini LIKE '%$year%'
                           AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%FINANCIERA%' AND activo = 'SI' ")->fetch());

                            $sumacumpleFb = current($dbo->query("SELECT SUM($conmes) FROM $alobj WHERE yearini LIKE '%$year%'
                           AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%FINANCIERA%' AND activo = 'SI' ")->fetch());



                            /////////////////////////////////PROCESOS

                        
                        
                            $allcumplepro = current($dbo->query("SELECT COUNT($conmes) FROM $alobj WHERE yearini LIKE '%$year%'
                          AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%PROCESOS%' AND activo = 'SI'  ")->fetch());

                            $sumapro = current($dbo->query("SELECT SUM($conmes) FROM $alobj WHERE yearini LIKE '%$year%'
                           AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%PROCESOS%' AND activo = 'SI'")->fetch());

                            /////////////////////////////////CLIENTE

                                                    
                            $allcumplecli = current($dbo->query("SELECT COUNT($conmes) FROM $alobj WHERE yearini LIKE '%$year%'
                          AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%CLIENTE%' AND activo = 'SI' ")->fetch());

                            $sumacli = current($dbo->query("SELECT SUM($conmes) FROM $alobj WHERE yearini LIKE '%$year%'
                            AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%CLIENTE%' AND activo = 'SI' ")->fetch());

                            /////////////////////////////////CRECIMIENTO

                                                                            
                            $allcumpleCre = current($dbo->query("SELECT COUNT($conmes) FROM $alobj WHERE yearini LIKE '%$year%'
                            AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%CRECIMIENTO%' OR perspectiva LIKE '%DESARROLLO%'  AND activo = 'SI' ")->fetch());

                            $sumaCre = current($dbo->query("SELECT SUM($conmes) FROM $alobj WHERE yearini LIKE '%$year%'
                            AND useresp LIKE '%$dueno%' AND perspectiva LIKE '%CRECIMIENTO%' OR perspectiva LIKE '%DESARROLLO%'  AND activo = 'SI' ")->fetch());

                        }

                    }       

                
        


 
            ?>

        </section>

            <tr>
            
                <td id="kpis">
                    <?php

                        if(!empty($sumacumpleFb)){
                            $desemfin = $sumacumpleFb/$allcumpleFb;
                            echo number_format($desemfin, 2) . '%';
                        }else{
                            $desemfin = 'NE';
                            echo $desemfin;
                        }
                    ?>
                </td>
                <td id="kpisimg"><img src="../img/ICONOS/persFinan1.svg" id="kpifin" class="kpisimg"></td>
            </tr>

            <tr>
            
                <td id="kpis">
                    <?php                
                    
                        if(!empty($sumapro)){
                            $desempro = $sumapro/$allcumplepro;
                            echo number_format($desempro, 2) . '%';
                        }else{
                            $desempro = 'NE';
                            echo $desempro;                        
                        }                                                    
                    
                    ?>
                </td>
                <td id="kpisimg"><img src="../img/ICONOS/proces1.svg" id="kpipro" class="kpisimg"></td>
            </tr>

            <tr>
               
                <td id="kpis">
                    <?php                
                    
                        if(!empty($sumacli)){
                            $desemcli = $sumacli/$allcumplecli;
                            echo number_format($desemcli, 2) . '%';
                        }else{
                            $desemcli = 'NE';
                            echo $desemcli;                        
                        }         
                    
                    ?>
                </td>
                <td id="kpisimg"><img src="../img/ICONOS/cliente1.svg" id="kpicli" class="kpisimg"></td>
            </tr>


            <tr>
               
                <td id="kpis">
                    <?php
                
                        if(!empty($sumaCre)){
                            $desemcre = $sumaCre/$allcumpleCre;
                            echo number_format($desemcre, 2) . '%';
                        }else{
                            $desemcre = 'NE';
                            echo $desemcre;                        
                        }         

                    ?>
                </td>
                <td id="kpisimg"><img src="../img/ICONOS/persCreci1.svg" id="kpicre" class="kpisimg"></td>
            </tr>


            <?php


        ?>
        
            
    </table>

    

</section>