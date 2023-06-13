<!DO
echo '<link href="../css/Diseñoactmonos.css" type="text/css" rel="stylesheet">';
<html>
    <head>
	<style>
		body{
			background-color: pink;
		}

		h3{
    		text-align: justify;		
    		background-color: rgb(228, 228, 175);
   		 }
		body{
			background-color: pink;

		}

	</style>
        <title>ActMonos</title>
    </head>
    <body>
        <h3>Taller de escritura de monos</h3>
		<<img  src="/img/monolindo.jpg" alt="fotodemi" width="300" height="200">
        <form   action="./actmonosdatos.php" method="post" target"_blank">
        <fieldset>		
			<legend>SELECIONA LAS PLABRAS</legend>
            <label for"Introducelaspalbras">Introducelaspalbras
			<input id="Introducelaspalbras" type="text" name="Palabras" require>
			</label><br><br>
			<label for"Modo">Modo</label>
			<select id="Modo">Modo
				<option value="Normal">Normal</option>
				<option value="Palabras">Palabras</option>
				<option value="Orden">Orden</option>
			</select><br><br>
            <label for"Zonahoraria">Zonahoraria</label>
			<select id="Zonahoraria">Zonahoraria
				<option value="NewYork">NewYork</option>
				<option value="China">China</option>
				<option value="Francia">Francia</option>
                <option value="México">México</option>
			</select><br><br>
			<button>Enviar</button>
            <?php
            $dato =$_POST
            ?>
		</fieldset>
        </form>    
    </body>
    
</html>