
<?php include "modules/head.php" ?>

        <!-- site content INIT -->
        <?php include "modules/loader.php" ?>
        <?php include "modules/welcomeVideo.php" ?>
		
		<div class="splitCont">
			<div class="topLanding">
				<div class="logo">
					<img src="img/logo_mapp_wh.png" height="111" width="759" alt="">
				</div>
				<div class="topText">
					<p>Elige el tipo de usuario</p>
				</div>
			</div>
			
			<div id="splitlayout" class="splitlayout">
				<div class="intro">
					<div class="side side-left">
						<div class="intro-content">
							<h1><span><img src="img/ico_co.png" height="70" width="70" alt=""></span><span>Empresas</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
					<div class="side side-right">
						<div class="intro-content">
							<h1><span><img src="img/ico_mod.png" height="70" width="70" alt=""></span><span>Modelos</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
				</div><!-- /intro -->
				<div class="page page-right">
					<div class="page-inner">
						<section>
							<h2>Hola!</h2>
							<p>Ingresa tu código para acceder a la plataforma</p>
							<input type="text" placeholder="Código">
							<div class="clear"></div>
							<a href="firstFomMod.php" class="btn">Ingresar</a>
						</section>
					</div><!-- /page-inner -->
				</div><!-- /page-right -->
				<div class="page page-left">
					<div class="page-inner">
						<section>
							<h2>Lo sentimos</h2>
							<p>En estos momentos estamos desarrollando la interfaz de empresas y la estamos mejorando para tu comididad.</p>
							<p>Gracias poe entendernos y muy pronto tendras acceso aesta parte de la plataforma</p>
						</section>
					</div><!-- /page-inner -->
				</div><!-- /page-left -->
				<a href="#" class="back back-right" title="back to intro">&#62;</a><!-- &rarr; -->
				<a href="#" class="back back-left" title="back to intro">&#60;</a><!-- &larr; -->
			</div><!-- /splitlayout -->
		</div><!-- /container -->
		

        <!-- site content END -->
        
<?php include "modules/foot.php" ?>