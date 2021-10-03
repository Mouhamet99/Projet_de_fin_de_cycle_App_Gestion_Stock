$(document).ready(function () {
	console.log("Gretting from Jquery");
	var n = 0;
	var MedicForm = $("form").attr("name", "medic");
	MedicForm.attr("class", "ajaxForm");

	var checks = $('input[type="checkbox"]');
	var tcr = [];
	var lesid = "";
	var ids = "";

	$("a.printPage").click(function () {
		window.print();
		return false;
	});
	$("#btn_edit").attr("href", "javascript:void(0)");
	$("#btn-remove").attr("href", "javascript:void(0)");
	function actualiser(e) {
		var tbody = $("#table_id tbody");
		tbody.html("");
		tbody.html(
			"{% for medic in " +
				e +
				" %}" +
				"<tr>" +
				'<th scope="col"><input type="checkbox" value={{medic.id}} ></th>' +
				'<th scope="row">{{medic.id}}</th>' +
				"<td>{{medic.dosage}}</td>" +
				"<td>{{medic.pv}}</td>" +
				"<td>{{medic.stock}}</td>" +
				"<td>{{medic.avoir}}</td>" +
				"<td>{{medic.forme}}</td>" +
				"<td>{{medic.dispo}}</td>" +
				"<td>{{medic.cmm}}</td>" +
				"<td>{{medic.seuil}}</td>" +
				"<td>{{medic.min}}</td>" +
				"<td>{{medic.max}}</td>" +
				'<td>{{medic.peremption |date ("d/m/Y")}}</td>' +
				"</tr>" +
				"{% endfor %}"
		);
		console.log(actualiser("Medicform"));
	}

	function WitchChecked() {
		checks.each(function (btn) {
			var val = $(this).attr("value");
			$(this).click(function (e) {
				if ($(this).is(":checked")) {					//si l'elt est coché
					n++;
					if (!tcr.includes(val)) {
						tcr.unshift(val);						//suppression de l'elt au dernier index
					}
				} else {
					n--;
					if (tcr.includes(val)) {					//si la valeur est contenu ds letableau
						var index = tcr.indexOf(val);			//index de l'element
						tcr.splice(index, 1);					//ajout de l'element à 
					}
					console.log("il etait pas checke mais plus");
				}
				var ids = "";
				for (var i = 0; i < tcr.length; i++) {
					if (i == tcr.length - 1) {
						ids = ids + tcr[i];
					} else {
						ids = ids + tcr[i] + RandomText(5);
					}
				}
				console.log("nobre de checkxbox selectionné " + tcr.length);
				if (n == 0) {
					$("#btn_edit").attr("href", "javascript:void(0)");
					$("#btn-remove").attr("href", "javascript:void(0)");
				}
				if (n == 1) {
					var lien = "/stock/" + tcr[0] + "/edit";
					$("#btn_edit").attr("href", lien);
				}
				if (n >= 1) {
					$("#btn-remove").attr("href", "/stock/" + ids + "/remove");
				}
				lesid = ids;
			});
		});
	}
	WitchChecked();

	function RandomText(l) {
		var str = "";
		var chars = "azertyuiopqsdfghjklmwxcvbn";
		for (var i = 0; i < l; i++) {
			str += chars.charAt(Math.floor(Math.random() * chars.length));
		}
		return str;
	}

	$("#btn_edit").click(function (event) {
		var Eurl = $(this).attr("href");
		console.log(checks);

		if (Eurl == "javascript:void(0)") {
			alert("Vous devez choisir un et un seul medicament");
		} else {
			event.preventDefault();
			console.log("je reste sur la page");
			/*	$('#staticBackdropLive').trigger('click');
						$('#staticBackdropLive').modal('show');				*/
			if (tcr.length == 1) {
				if (tcr[0]) {
					console.log("pass1  " + tcr[0]);
					var id = tcr[0];
					var onAjaxFailed = function (jqXHR, textStatus, errorThrown) {
						console.log("AJAX failed!", jqXHR, textStatus, errorThrown);
					};
					var onEditSucess = function (data) {
						console.log(data);
						alert("OK");
						var medic = $.parseJSON(data);
						console.log(medic);
						console.log(data.form);
						alert("Success,Everything is going well ");
					};
					var onEditFail = function (error) {
						alert("Error : request Fail");
						console.log(error);
					};
					$.ajax({
						url: Eurl,
						type: "POST",
						data: JSON.stringify({ id: id }),
						async: true,
						dataType: "json",
						success: onEditSucess,
						error: onAjaxFailed,
					});

					console.log("After ajax");
				} else {
					console.log("Aucun checkbox selectionne");
				}
			} else {
				console.log("nbre d'element du tableau tcr different de 1");
			}
		}
	});

	$("#btn-remove").on("click", function (event) {
		if ($(this).attr("href") == "javascript:void(0)") {
			alert("Vous devez choisir un et un seul medicament");
		} else {
			event.preventDefault();

			if (tcr.length == 0) {
				alert("Aucun medicament selectionne");
				//	actualiser('MedicForm');
			} else {
				if (confirm("Are you sure you want to delete this record?")) {
					for (var i = 0; i < tcr.length; i++) {
						var tr = $("input[value=" + tcr[i] + "]")
							.parent()
							.parent();
						tr.html("");
					}
					/*		 var $row = $(this).parent().parent();
								var id = $row.attr('id');*/
					var data = { str: lesid };
					var Rurl = $("#btn-remove").attr("href");
					console.log(data.str);
					var $i = 0;

					function onSucess(data, status) {
						console.log("Supression effectué");
						console.log(data);

						//console.log(parse(data));
						console.log(status);

						alert("Suppression effectué avec succes");
					}
					function onFail(textStatus) {
						alert("Ajax request failed.");
						console.log("error");
						console.log(textStatus);
					}

					$.ajax({
						type: "POST",
						url: Rurl,
						data: JSON.stringify({ str: lesid }),
						async: true,
						dataType: "json",
						success: onSucess,
						error: onFail,
					});
				}
			}
			$(this).attr("href", "javascript:void(0)");
		}
	});
	function initAjaxForm() {
		$("body").on("submit", ".ajaxForm", function (e) {
			e.preventDefault();
			$.ajax({
				type: $(this).attr("method"),
				url: $(this).attr("action"),
				data: $(this).serialize(),
			})
				.done(function (data) {
					if (typeof data.message !== "undefined") {
						alert(data.message);
					}
				})
				.fail(function (jqXHR, textStatus, errorThrown) {
					if (typeof jqXHR.responseJSON !== "undefined") {
						if (jqXHR.responseJSON.hasOwnProperty("form")) {
							//$('#form_body').html(jqXHR.responseJSON.form);
							console.log(jqXHR.responseJSON.form);
						}
						//    $('.form_error').html(jqXHR.responseJSON.message);
					} else {
						alert(errorThrown);
					}
				});
		});
	}
});
