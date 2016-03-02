/* MAIN */

$( document ).ready(function() {
	/* Close video*/
		$(".js-closeVideo").click(function() {
			$(".initVideoWrapper").fadeOut();
			$('#initVideo').stop();
		});

	/* Close video*/

		$('#fullpage').fullpage({
			anchors: ['firstPage', 'secondPage', '3rdPage', '4thPage'],
			sectionsColor: ['#000000', '', ''],
			css3: true
		});

		var height = $( document ).height();
		var heightFull = height - 250;

		$(".page .page-inner").css({"height":heightFull + "px"});

	// MODALS	
		$(".js-openModal").click(
									function() {
												var value = $(this).attr("data-id");
												$("." + value).fadeIn();
											    }
								);

	/* BTN DASHBOARD MODEL */
		$(".js-profPerfil").click(function() {
			$(".profInfoWrap").hide();
			$(".profInfoWrapDashBoard").fadeIn();
		});
		$(".js-profBook").click(function() {
			$(".profInfoWrap").hide();
			$(".profInfoWrapDashBook").fadeIn();
		});
		$(".js-profEvents").click(function() {
			$(".profInfoWrap").hide();
			$(".profInfoWrapDashEvents").fadeIn();
		});

		/* BTN ver mas evento */
			$(".js-moreEventInfo").click(function() {
				$(this).hide();
				$(this).parent().find(".profEventsItemDataHide").slideDown("");
			});
			$(".js-minusEventInfo").click(function() {
				$(this).parent().parent().parent().find(".profEventsItemDataHide").hide();
				$(".js-moreEventInfo").fadeIn();
				
			});

	/* RANGE FORM MODEL VALUES */
		var rngValBusto = {
		    "75": "Tu medida de busto esta entre 75 .cm a 79 .cm",
		    "80": "Tu medida de busto esta entre 80 .cm a 84 .cm",
		    "85": "Tu medida de busto esta entre 85 .cm a 89 .cm",
		    "90": "Tu medida de busto esta entre 90 .cm a 94 .cm",
		    "95": "Tu medida de busto esta entre 95 .cm a 99 .cm",
		    "100": "Tu medida de busto esta entre 100 .cm a 105 .cm",
		};
		var rngValCintura = {
		    "55": "Tienes una cintura de 55 .cm a 59 .cm",
		    "60": "Tienes una cintura de 60 .cm a 64 .cm",
		    "65": "Tienes una cintura de 65 .cm a 69 .cm",
		    "70": "Tienes una cintura de 70 .cm a 74 .cm",
		    "75": "Tienes una cintura de 75 .cm a 79 .cm",
		    "80": "Tienes una cintura de 80 .cm a 84 .cm",
		    "85": "Tienes una cintura de 85 .cm a 89 .cm",
		    "90": "Tienes una cintura de 90 .cm a 100 .cm",
		};
		var rngValCadera = {
		    "80": "Tienes una cadera de 80 .cm a 84 .cm",
		    "85": "Tienes una cadera de 85 .cm a 89 .cm",
		    "90": "Tienes una cadera de 90 .cm a 94 .cm",
		    "95": "Tienes una cadera de 95 .cm a 99 .cm",
		    "100": "Tienes una cadera de 100 .cm a 104 .cm",
		    "105": "Tienes una cadera de 105 .cm a 109 .cm",
		    "110": "Tienes una cadera de 110 .cm a 105 .cm",
		};
		var rngValEstatura = {
		    "1.55": "Tu estatura esta entre 1.55 .cm a 1.64 .cm",
		    "1.65": "Tu estatura esta entre 1.65 .cm a 1.74 .cm",
		    "1.75": "Tu estatura esta entre 1.75 .cm a 1.84 .cm",
		    "1.85": "Tu estatura esta entre 1.85 .cm a 1.94 .cm",
		    "1.95": "Tu estatura esta entre 1.95 .cm a 2.04 .cm",
		};
		/*busto*/
		$(function () {
		    $('#rngTxt_busto').text(rngValBusto[$('#rngInpt_busto').val()]);
		    $('#rngInpt_busto').on('input change', function () {
		        $('#rngTxt_busto').text(rngValBusto[$(this).val()]);
		    });

		});
		/*cintura*/
		$(function () {
		    $('#rngTxt_cintura').text(rngValCintura[$('#rngInpt_cintura').val()]);
		    $('#rngInpt_cintura').on('input change', function () {
		        $('#rngTxt_cintura').text(rngValCintura[$(this).val()]);
		    });

		});
		/*cadera*/
		$(function () {
		    $('#rngTxt_cadera').text(rngValCadera[$('#rngInpt_cadera').val()]);
		    $('#rngInpt_cadera').on('input change', function () {
		        $('#rngTxt_cadera').text(rngValCadera[$(this).val()]);
		    });

		});
		/*estatura*/
		$(function () {
		    $('#rngTxt_estatura').text(rngValEstatura[$('#rngInpt_estatura').val()]);
		    $('#rngInpt_estatura').on('input change', function () {
		        $('#rngTxt_estatura').text(rngValEstatura[$(this).val()]);
		    });

		});



});

$(window).load(function() {
    /* * LOADER * */
    $(".LoaderWrap").fadeOut();
});