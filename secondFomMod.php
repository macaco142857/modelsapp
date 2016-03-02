<?php include("modules/head.php");  ?> <?#if($_SESSION["gender"]=='F') {}else ?>

<style>
	body {
		overflow: hidden;
		overflow-y: scroll;
		min-height: 590px;
	}
</style>

        <!-- site content INIT -->
        <?php include "modules/loader.php" ?>

        <div class="frmFrstWrap">
        	<div class="fs-form-wrap" id="fs-form-wrap">
				<form id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">
						<li>
							<h1 class="fs-anim-upper" >Hola!</h1>
							<p class="fs-anim-lower" >Para completar tu proceso de inscripción a la plataforma es necesario que respondas el siguiente formulario y nosotros te estaremos contactando lo mas pronto posible para que te unas al equipo de ModelsApp.</p>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">AÑOS DE EXPERIENCIA</label>
							<input class="fs-anim-lower" id="q1" name="exp" type="number" min="0" placeholder="10" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">BUSTO</label>
							<span>
								<input class="fs-anim-lower" id="rngInpt_busto" name="busto" type="range" min="75" max="100" step="5" required/>
								<label id="rngTxt_busto" class="rngTxt fs-anim-lower"></label>
							</span>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">CINTURA</label>
							<span>
								<input class="fs-anim-lower" id="rngInpt_cintura" name="cintura" type="range" min="55" max="90" step="5" required/>
								<label id="rngTxt_cintura" class="rngTxt fs-anim-lower"></label>
							</span>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">CADERA</label>
							<span>
								<input class="fs-anim-lower" id="rngInpt_cadera" name="cadera" type="range" min="80" max="110" step="5" required/>
								<label id="rngTxt_cadera" class="rngTxt fs-anim-lower"></label>
							</span>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">ESTATURA</label>
							<span>
								<input class="fs-anim-lower" id="rngInpt_estatura" name="estatura" type="range" min="1.55" max="1.95" step="0.10" required/>
								<label id="rngTxt_estatura" class="rngTxt fs-anim-lower"></label>
							</span>

						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="...d">COLOR DE OJOS</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="ojosb" name="ojos" type="radio" value="conversion"/><label for="ojosb" class="radio_ojos_verdes">VERDES</label></span>
								<span><input id="ojosc" name="ojos" type="radio" value="social"/><label for="ojosc" class="radio_ojos_azules">AZULES</label></span>
								<span><input id="ojosd" name="ojos" type="radio" value="mobile"/><label for="ojosd" class="radio_ojos_cafes">CAFES</label></span>
								<span><input id="ojose" name="ojos" type="radio" value="mobile"/><label for="ojose" class="radio_ojos_negros">NEGROS</label></span>
								<div class="clear"></div>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="...d">COLOR DE CABELLO</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="cabellob" name="cabello" type="radio" value="conversion"/><label for="cabellob" class="radio_hair_black">NEGRO</label></span>
								<span><input id="cabelloc" name="cabello" type="radio" value="social"/><label for="cabelloc" class="radio_hair_brown">CASTAÑO</label></span>
								<span><input id="cabellod" name="cabello" type="radio" value="mobile"/><label for="cabellod" class="radio_hair_drkBrown">CASTAÑO OSCURO</label></span>
								<span><input id="cabelloe" name="cabello" type="radio" value="mobile"/><label for="cabelloe" class="radio_hair_blond">RUBIO</label></span>
								<span><input id="cabellof" name="cabello" type="radio" value="mobile"/><label for="cabellof" class="radio_hair_red">ROJO</label></span>
								<span><input id="cabellog" name="cabello" type="radio" value="mobile"/><label for="cabellog" class="radio_hair_dye">TINTURADO</label></span>
								<div class="clear"></div>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="...d">TALLA DE CAMISA</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="camisab" name="camisa" type="radio" value="conversion"/><label for="camisab" class="radio-camisa">XS</label></span>
								<span><input id="camisac" name="camisa" type="radio" value="social"/><label for="camisac" class="radio-camisa">S</label></span>
								<span><input id="camisad" name="camisa" type="radio" value="mobile"/><label for="camisad" class="radio-camisa">M</label></span>
								<div class="clear"></div>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="...d">TALLA DE PANTALÓN</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="pantsb" name="pants" type="radio" value="conversion"/><label for="pantsb" class="radio-pantalon">30</label></span>
								<span><input id="pantsc" name="pants" type="radio" value="social"/><label for="pantsc" class="radio-pantalon">32</label></span>
								<span><input id="pantsd" name="pants" type="radio" value="mobile"/><label for="pantsd" class="radio-pantalon">34</label></span>
								<span><input id="pantse" name="pants" type="radio" value="mobile"/><label for="pantse" class="radio-pantalon">36</label></span>
								<div class="clear"></div>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="...d">TALLA DE ZAPATOS</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="shoeb" name="shoe" type="radio" value="conversion"/><label for="shoeb" class="radio-shoe">35</label></span>
								<span><input id="shoec" name="shoe" type="radio" value="social"/><label for="shoec" class="radio-shoe">36</label></span>
								<span><input id="shoed" name="shoe" type="radio" value="mobile"/><label for="shoed" class="radio-shoe">37</label></span>
								<span><input id="shoee" name="shoe" type="radio" value="mobile"/><label for="shoee" class="radio-shoe">38</label></span>
								<span><input id="shoef" name="shoe" type="radio" value="mobile"/><label for="shoef" class="radio-shoe">39</label></span>
								<span><input id="shoeg" name="shoe" type="radio" value="mobile"/><label for="shoeg" class="radio-shoe">40</label></span>
								<div class="clear"></div>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="...d">IDIOMAS</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="idiomab" name="idioma" type="radio" value="conversion"/><label for="idiomab" class="radio-lengEn">INGLES</label></span>
								<span><input id="idiomac" name="idioma" type="radio" value="social"/><label for="idiomac" class="radio-lengFr">FRANCES</label></span>
								<span><input id="idiomad" name="idioma" type="radio" value="mobile"/><label for="idiomad" class="radio-lengAl">ALEMÁN</label></span>
								<span><input id="idiomad" name="idioma" type="radio" value="mobile"/><label for="idiomad" class="radio-lengIt">ITALIANO</label></span>
								<span><input id="idiomad" name="idioma" type="radio" value="mobile"/><label for="idiomad" class="radio-lengPo">PORTUGUÉS</label></span>
								<div class="clear"></div>
							</div>
						</li>
						<!--li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="te contactaremos para terminar tu proceso de inscripción">¿Correo electrónico?</label>
							<input class="fs-anim-lower" id="q5" name="q5" type="number" placeholder="300234567" step="7" min="7" required/>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know what kind of service you need">What's your priority for your new website?</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3b" name="q3" type="radio" value="conversion"/><label for="q3b" class="radio-conversion">Sell things</label></span>
								<span><input id="q3c" name="q3" type="radio" value="social"/><label for="q3c" class="radio-social">Become famous</label></span>
								<span><input id="q3a" name="q3" type="radio" value="mobile"/><label for="q3a" class="radio-mobile">Mobile market</label></span>
							</div>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" data-info="We'll make sure to use it all over">Choose a color for your website.</label>
							<select class="cs-select cs-skin-boxes fs-anim-lower">
								<option value="" disabled selected>Pick a color</option>
								<option value="#588c75" data-class="color-588c75">#588c75</option>
								<option value="#b0c47f" data-class="color-b0c47f">#b0c47f</option>
								<option value="#f3e395" data-class="color-f3e395">#f3e395</option>
								<option value="#f3ae73" data-class="color-f3ae73">#f3ae73</option>
								<option value="#da645a" data-class="color-da645a">#da645a</option>
								<option value="#79a38f" data-class="color-79a38f">#79a38f</option>
								<option value="#c1d099" data-class="color-c1d099">#c1d099</option>
								<option value="#f5eaaa" data-class="color-f5eaaa">#f5eaaa</option>
								<option value="#f5be8f" data-class="color-f5be8f">#f5be8f</option>
								<option value="#e1837b" data-class="color-e1837b">#e1837b</option>
								<option value="#9bbaab" data-class="color-9bbaab">#9bbaab</option>
								<option value="#d1dcb2" data-class="color-d1dcb2">#d1dcb2</option>
								<option value="#f9eec0" data-class="color-f9eec0">#f9eec0</option>
								<option value="#f7cda9" data-class="color-f7cda9">#f7cda9</option>
								<option value="#e8a19b" data-class="color-e8a19b">#e8a19b</option>
								<option value="#bdd1c8" data-class="color-bdd1c8">#bdd1c8</option>
								<option value="#e1e7cd" data-class="color-e1e7cd">#e1e7cd</option>
								<option value="#faf4d4" data-class="color-faf4d4">#faf4d4</option>
								<option value="#fbdfc9" data-class="color-fbdfc9">#fbdfc9</option>
								<option value="#f1c1bd" data-class="color-f1c1bd">#f1c1bd</option>
							</select>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4">Describe how you imagine your new website</label>
							<textarea class="fs-anim-lower" id="q4" name="q4" placeholder="Describe here"></textarea>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">What's your budget?</label>
							<input class="fs-mark fs-anim-lower" id="q5" name="q5" type="number" placeholder="1000" step="100" min="100"/>
						</li-->
					</ol><!-- /fs-fields -->
					<button class="fs-submit" type="submit" onclick="window.location='indexMod.php'">Send answers</button>
				</form><!-- /fs-form -->
			</div>
        </div>

        <!-- site content END -->
        
<?php include "modules/foot.php" ?>