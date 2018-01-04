<?php include_once "includes/incluir-declaracion-documento.php"; ?>
	<div class="container-fluid" id="tablero">
		<div class="row zona-jugadores">
			<div class="col-sm-6 text-left">
				<i class="fas fa-user-circle"></i>
				<span>jugador</span>
				<span><i class="fas fa-caret-square-right"></i> 18</span>
			</div>
			<div class="col-sm-6 text-right">
				<span>10 <i class="fas fa-caret-square-left"></i></span>
				rival
				<i class="fas fa-user-circle"></i>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">
				<br>
				<div class="row" id="fila_rival">
					<div class="col-sm-3" align="center">
						<div class="carta text-center comun">
							<img src="img/cartas/9-Barrarroso.jpg" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">
						<div class="carta comun">
							<img src="img/cartas/2-lechuga01.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">
						<div class="carta rara">
							<img src="img/cartas/3-Nuuuuuul.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">						
						<div class="carta especial">
							<img src="img/cartas/4-maquinote19.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>		
					</div>
				</div>
				<br>
				<div class="row" id="fila_jugador">
					<div class="col-sm-3" align="center">
						<div class="carta epica">
							<img src="img/cartas/5-yyamicloud.jpg" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">
						<div class="carta legendaria">
							<img src="img/cartas/6-D4_Ghost.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">
						<div class="carta especial">
							<img src="img/cartas/7-Phoenix.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
					<div class="col-sm-3" align="center">
						<div class="carta legendaria">
							<img src="img/cartas/8-mine_g.png" class="img-fluid">
							<br>							
							<i class="fas fa-utensil-spoon"></i> 3
							
							<i class="fas fa-shield-alt"></i> 4
							
							<i class="fas fa-heart"></i> 3
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 text-center" id="mano-jugador">
				<div class="row">
					<div class="col" id="boton-mano-arriba">
						<i class="fas fa-caret-up fa-2x"></i>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<i class="fas fa-user-circle fa-2x"></i>
						<p>
							Rival
						</p>
						<h2>18</h2>
						<i class="fas fa-chevron-circle-up"></i>
						<h6><small>cartas restantes</small></h6>
					</div>
				</div>
				<div class="row">
					<div class="col" id="boton-mano-abajo">
						<i class="fas fa-caret-down fa-2x"></i>
					</div>
				</div>
			</div>
		</div>		
	</div>
<?php include_once "includes/incluir-cierre-documento.php"; ?>