<?php
session_start();
?>
<form action="" method="get">
<input name="id" type="text" />
<input type="submit" name="submit" id="submit" value="Enviar" />
</form>
<?php
if (isset($_GET['submit'])){
	$nota = $_GET['id']; 
	if($nota>=2&&$nota%2==0&&$nota<=10&& (filter_var($nota,FILTER_VALIDATE_INT))){  	  
//Tomar output y guardar en array.        
	   $_SESSION['index'][]=$nota ;	   
//Explorar array	 
		 foreach( $_SESSION['index'] as $nota ) {
            echo "Ingrese al array y tengo el ID: $nota <br/>"; //formato necesario
         }
	 }
}
?>