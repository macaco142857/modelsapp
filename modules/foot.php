    <!-- MODALS -->
        <div class="modalBg initSesion">
            <div class="modalCont">
                <p>Coloca tu usuario y contraseña</p>
                <form action="modules/acces.php" method="POST">
                    <label for="user">usuario</label>
                    <input type="text" name="user">
                    <label for="pass">contraseña</label>
                    <input type="password" name="pass">
                    <div class="clear"></div>
                    <input type="submit" class="btn sndSession">  <!-- onclick="event.preventDefault();window.location='profile.php' >-->
                </form>
            </div>
        </div>
    <!-- END MODALS -->/

        <!--  -->
		<script src="js/vendor/jquery-1.11.3.min.js"></script>
        <!--  -->
        <script src="js/jquery.fullPage.js"></script>
        <script src="js/classie.js"></script>
        <!--  -->
        <script src="js/selectFx.js"></script>
        <script src="js/fullscreenForm.js"></script>
        <!-- /* * classie scripts * * */ -->
        <script src="js/fullPageForm.js"></script>
        <script src="js/menu.js"></script>
        <script src="js/cbpSplitLayout.js"></script>
        <!--  -->
        <script src="js/main.js"></script>

    </body>
    <?php include("portero.php"); ?>
</html>