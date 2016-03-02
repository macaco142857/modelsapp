
<?php include("modules/head.php");   $perfil="TRUE";?>

     <!-- site content INIT -->
     <?php include("modules/loader.php"); if(isset($_SESSION["usuarioActual"])){} else header ("Location: indexMod.php"); ?>

     <div id="perspective" class="perspective effect-rotateleft" >
          <?php include "modules/fixElem.php" ?>
          
          <div class="container" >
               <div class="wrapper homeCont"><!-- wrapper needed for scroll -->
                    <!-- * * * * * -->
                    <div class="profWrapper">
                    	<div class="profWrap">
                    		<div class="profDataWrap">
                    			<div class="dataProfTop">
                    				<h1>Tu perfil</h1>
                    			</div>
                    			<div class="dataProfAvatar">
                    				<img src= <?php echo $_SESSION["imgPerfil"]?>  height="400" width="400" alt="">
                    			</div>
                    			<div class="dataProfInfo">
                    				<p class="name"><?php print($_SESSION["nombre"] ." ". $_SESSION["apellido"]) ;?></p>
                    				<p class="age"><?php print($_SESSION["edad"]);?></p>
                    			</div>
                    			<hr>
                    			<div class="dataProfMenu">
                    				<ul>
                    					<li><a href="javascript:;" class="btn js-profPerfil">Tu Perfil</a></li>
                    					<li><a href="javascript:;" class="btn js-profBook">Tu book</a></li>
                    					<li><a href="javascript:;" class="btn js-profEvents">Tus eventos</a></li>
                                             <li><a href="modules/invitarModelo.php" class="btn ">Invitar</a></li>
                    				</ul>
                    			</div>
                    		</div>
                    		<div class="profInfoWrap profInfoWrapDashBoard" style="display:nones;">
                    			<div class="dashCol12">
                                   <?php
                                   //if(!fullData())
                                      echo  
                                        '<div class="dashProf dashProfForm">
                                             No has completado tu perfil completamente, para hacerlo haz <a href="secondFomMod.php">click aquí</a>
                                        </div>'
                                   ?>
                    			</div>
                                   <div class="dashCol4">
                                        <?php
                                        include("/modules/preguntasEvento.php");
                                        include("/modules/personalDataProfile.php"); 
                                        ?>
                                   </div>  

                    			<div class="dashCol8">
                                        <?php include("modules/eventProfile.php") ?>
                    			</div>
                    			<div class="dashCol12">
                    				<div class="dashProf dashProfImgs">
                    					<h1 class="dashTittle">Últimas fotos subidas por ti</h1>
                    					<div class="dashProfImgsItem">
                    						<div class="dashProfImgsItemSide">
                    							<div class="dashImgWrap" style="background-image: url(img/avatar.jpg)"></div>
                    						</div>
                    						<div class="dashProfImgsItemMid">
                    							<div class="dashImgWrap" style="background-image: url(img/test_01.jpg)"></div>
                    							<div class="dashImgWrap" style="background-image: url(img/test_02.jpg)"></div>
                    							<div class="dashImgWrap" style="background-image: url(img/test_03.jpg)"></div>
                    							<div class="dashImgWrap" style="background-image: url(img/test_04.jpg)"></div>
                    						</div>
                    						<div class="dashProfImgsItemSide">
                    							<div class="dashImgWrap" style="background-image: url(img/test_05.jpg)"></div>
                    						</div>
                    						<div class="clear"></div>
                    					</div>
                    				</div>
                    			</div>          				
                    		</div>
                    		<div class="profInfoWrap profInfoWrapDashBook" style="display:none;">
                    			<div class="dashCol12">
                    				<div class="dashProf dashProfForm">
                    					No has completado tu perfil completamente, para hacerlo haz <a href="secondFomMod.php">click aquí</a>
                    				</div>
                    			</div>
                    			<div class="dashCol12">
                    				<div class="dashProf dashProfImgs">
                    					<h1 class="dashTittle">Últimas fotos subidas por ti</h1>
                    					<div class="dashProfImgsItem">
                    						<div class="dashProfImgsItemSide">
                    							<div class="dashImgWrap" style="background-image: url(img/avatar.jpg)"></div>
                    						</div>
                    						<div class="dashProfImgsItemMid">
                    							<div class="dashImgWrap" style="background-image: url(img/test_01.jpg)"></div>
                    							<div class="dashImgWrap" style="background-image: url(img/test_02.jpg)"></div>
                    							<div class="dashImgWrap" style="background-image: url(img/test_03.jpg)"></div>
                    							<div class="dashImgWrap" style="background-image: url(img/test_04.jpg)"></div>
                    						</div>
                    						<div class="dashProfImgsItemSide">
                    							<div class="dashImgWrap" style="background-image: url(img/test_05.jpg)"></div>
                    						</div>
                    						<div class="clear"></div>
                    					</div>
                    				</div>
                    			</div>          				
                    		</div>
                    		<div class="profInfoWrap profInfoWrapDashEvents" style="display:none;">
                    			<div class="dashCol12">
                    				<div class="dashProf dashProfForm">
                    					No has completado tu perfil completamente, para hacerlo haz <a href="secondFomMod.php">click aquí</a>
                    				</div>
                    			</div>
                    			<div class="dashCol12">

                                             <?php include('/modules/event.php');?>
                                             <script type="text/javascript"> </script>
                    			</div>       				
                    		</div>
                    	</div>
                    </div>
                    <!-- * * * * * -->
                </div><!-- wrapper -->
            </div><!-- /container -->

            <?php include "modules/menu.php" ?>
            

        </div>

        
        <!-- site content END -->
        
<?php include "modules/foot.php" ?>
