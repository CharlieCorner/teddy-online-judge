<div class="post">
	<div class="navcenter">
		<a href="index.php">home</a>&nbsp;&nbsp;&nbsp;
		<?php
		if(isset($_SESSION['userID'])){
			/* is logged */

		}else{
			/* is not logged*/
			?><a href="registro.php">registro</a>&nbsp;&nbsp;&nbsp;<?php
		}
		?>
		<a href="problemas.php">problemas</a>&nbsp;&nbsp;&nbsp;
		<a href="enviar.php">enviar solucion</a>&nbsp;&nbsp;&nbsp;
		<a href="runs.php">ejecuciones</a>&nbsp;&nbsp;&nbsp;
		<a href="rank.php">rank</a>&nbsp;&nbsp;&nbsp;
		<a href="contest.php">concursos</a>&nbsp;&nbsp;&nbsp;
		<a href="faq.php">preguntas frecuentes</a>&nbsp;&nbsp;&nbsp;
	    <a href="https://github.com/alanboy/teddy-online-judge/" >github</a>

	</div>
</div>
