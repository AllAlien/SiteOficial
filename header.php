	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div id="img-logo"></div>
					
				</div>
				<div class="col-md-6">
					
					<div id="menu-navegation">
						<ul class="list-inline">
							<li ><a class="itens-menu"href="index.php">HOME</a></li>
							<li ><a class="itens-menu"href="servicos.php">SERVIÇOS</a></li>
							<li>
							<button id="myModalSolicitarServices" 
							data-toggle="modal" data-target="#solicitarServices" 
							class="btn btn-success">
							SOLICITAR
							</button>

									<?php include_once 'modal-services.php'; ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>