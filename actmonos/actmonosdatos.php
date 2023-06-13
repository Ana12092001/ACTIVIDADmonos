            <?php
                //echo$_POST["Palabras"],"<br>";
                $pal=$_POST["Palabras"];
                $caracper = '0123456789abcdefghijklmnñopqrstuvwxyzABCDFGHIJKLMNÑOPQRSTUVWXYZ';
                $long=50;
                //echo substr(str_shuffle($caracper), 0, $long);
                function generarcadena($caracper,$long){
                    $long = strlen ($caracper);
                    $cadenaal = '';
                    for($c=0; $c < $long; $c++){
                        $cadenaal .= $caracper [random_int(0, $long -1)];
                        
                    }
                   
                    return $cadenaal;
                }
                $array= array ('A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','X','Y','Z');
                //echo $array; 
                $random= generarcadena($caracper,$long);
                //echo $random;
                $separadorran = explode ($random,$random);
                //echo $separadorran[0];
                $separador = explode ($random,$pal);
                echo $separador[0];
                //echo $separador[1];
                $saludo= array($random);
                $saludo2 = array ($separador);
                $saludoChido = array_merge ($saludo,$saludo2);
                echo $saludoChido[0];
            ?>
            <style>
            body{
			background-color: pink;

		    }
            </style>

           