<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			

			
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>Iniciando Sesión...</span>
			</div>
		</div>
		<a href="#" >
				<img alt="" src="portada.jpg" hspace="330px">
			</a>
			<div class="login-content">
			<p class="description">Estimado usuario, inicie sesion para acceder al área MAESTRO!</p>
		</div>
	</div>
	
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form action="secure_login.php" method='post' id="bb">				
				<div class="form-group">					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
							<input type="text" placeholder="Usuario" class="form-control" name="user_id_auth" id="textfield" data-rule-minlength="6" data-rule-required="true">
					</div>
				</div>				
								
				<div class="form-group">					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						<input type="password" name="pass_key" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Contraseña">
					</div>				
				</div>
				
				<div class="form-group">
					<button type="submit" name="btnLogin" class="btn btn-primary">
						Iniciar Sesión
						<i class="entypo-login"></i>
					</button>
				</div>
				<div class="form-group">
					<a href = "../index.html" type="submit" name="btnLogin" class="btn btn-primary">
						REGRESAR
					</a>
				</div>
			</form>
		
				
		</div>
		
	</div>
	
</div>

