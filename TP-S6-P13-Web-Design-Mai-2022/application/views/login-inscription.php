<div class="page-content">
		<div class="form-v8-content">
			<div class="form-left">
            <img src="<?php echo images_url("aa.jpg"); ?>" alt="form">
			</div>
			<div class="form-right">
				<div class="tab">
					<div class="tab-inner">
						<button class="tablinks" onclick="openCity(event, 'sign-in')">Administrateur</button>
					</div>
				</div>
				<form class="form-detail" action="<?php echo site_url("Controller/verifLoginAdmin"); ?>" method="post">
					<div class="tabcontent" id="sign-in">
						<div class="form-row">
							<label class="form-row-inner">
								<input type="text" name="nom" id="full_name_1" class="input-text" required>
								<span class="label">Nom</span>
		  						<span class="border"></span>
							</label>
						</div>
					
						<div class="form-row">
							<label class="form-row-inner">
								<input type="password" name="mdp" id="password_1" class="input-text" required>
								<span class="label">Mot de Passe</span>
								<span class="border"></span>
							</label>
						</div>
						
						<div class="form-row-last">
							<input type="submit" name="register" class="register" value="Se connecter">
						</div>
					</div>
				</form>
            
              
			</div>
		</div>
	</div>