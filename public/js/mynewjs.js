$.noConflict();
jQuery(document).ready(function($) {
    var checks = $('input[type="checkbox"]');
    var tcr = [];
    var lesid = "";
    var n = 0;
    $("#bdc-join").attr("href", "javascript:void(0)");
    var active_link = null == active_link ? null : active_link;
    var bdc = $('table #btn-join-bdc');
    var bdc_state = $('table .etat');
    console.log(bdc.length, bdc_state.length);
    // bdc.each(function() {
    //     var index = bdc.index($(this));
    //     var state = bdc_state.get(index)
    //     if(/Terminée/.test(state.html() ))
    //         console.log(index);
    //     $(this).click(function(e) {
    //         e.preventDefault();
    //         $("#factureAlert").modal("show");

            
    //     });
    // });
    //////////////////////////////////////////////////////////  
    ///////// Pour la gestion du menu (apparence)/////////////
    /////////////////////////////////////////////////////////
    const host ='http://localhost:8000'
    const Redirect_Link = {
        'btn_stock': host,
        'btn_entree': '',
        'btn_sortie': '',
    }
    //#007bff
    // var links = $('.user-panel .info a')
    // links.each(function(e){
    //     $(this).on('ckick',function(e){
    //         $(this).preventDefault()
    //             console.log($(this).attr('href'))
    //         })
    // })


    ////////////////////////////////////////////////////////////////////////  
    ///////// Pour alerter la suppression d'un bdc déja régler /////////////
    ///////////////////////////////////////////////////////////////////////
    var btn_alert_remove = $('#btn-not-remove-bdc')
    var btn_alert_join = $('#btn-not-join-bdc')
    btn_alert_remove.on('click',function(e){
        e.preventDefault()
        $("#factureAlert").modal("show");
    })
    btn_alert_join.on('click', function(e){
        e.preventDefault()
        modal.empty();
        const message =$("<p></p>").text("Ce bon de commande a été déja réglé");
        modal.append(message);
        modal.modal("show");
        $('.modal-footer button').on("click",function(e) {
            e.preventDefault()
            modal.modal("hide");
            message =$("<p></p>").text("Cette action ne peut se faire. Verfiez que le bon est bien autorisé ou qu'il n'est pas joint à aucune facture");
            modal.append(message);
        })
    })

    //////////////////////////////////////////////////////////  
    ///////// Affichage du loader dans lapage de connexion //////
    /////////////////////////////////////////////////////////
    $("#login_form").on('submit', function(e) {
        $(".SpinnerLoader").css("visibility", "visible");                                       
    })
    $(".displayLoader,a.nav-link").on('click', function(e) {
         $(".SpinnerLoader").css("visibility", "visible");                                       
    })
   

    /// //////////////////////////////////////////////////////////  
    ///////// Pour la mise à jour du champ total /////////////
    /////////////////////////////////////////////////////////

    var qtt = $('.td-qtt input[type="number"]')
    var prices = $('.td-price input')
    var totals = $('.td-total input[type="number"]')
    var ttc = $('p#ttc span').get(0) !== "undefined" ? $('p#ttc span'): $('.td-net-a-payer input')


    var ttc_value
    var remove_items = $("td a#remove-item")
    function updateTtc(e) {
        if(prices && qtt) {
            ttc_value = 0;                            
            for (let i = qtt.length - 1; i >= 0; i--) {
                if(qtt.get(i).value !== "" && prices.get(i).value !== "") {
                    ttc_value += parseInt(totals.get(i).value)
                }
            }
            ttc.html(ttc_value) 
        }
    }
    function updateFields(e) {
        if(prices && qtt) {
            let index = qtt.index(this) !== -1 ? qtt.index(this): prices.index(this)
            if(qtt.get(index).value !== "" && prices.get(index).value !== "") {
                totals.get(index).value = parseInt(prices.get(index).value) * parseInt(qtt.get(index).value);
            }else{
                totals.get(index).value = ""
            }
            if(typeof ttc !== "undefined") updateTtc()
        }
    }
    function updatePricesQttFields() {
        prices.each(function(e){
             $(this).on('input',updateFields)    
        })
        qtt.each(function(e){
             $(this).on('input',updateFields)    
        })
    }
   
    remove_items.each(function(){
        $(this).on('click',function () {
            $(this).closest("tr").fadeOut().remove();
            updateTtc()
        })
    })
    /*$('#example1,#table_id0').DataTable({
        "scrollY": "300px", "scrollCollapse": true,"paging": true,
        "oLanguage": {
            "oPaginate": {
                "sPrevious": "<---",
                "sNext": "--->" "sEmptyTable": "Pas de medicament trouvé",
            },
            "sSearch": "rechercher :",
            "sInfo": "Got a total of _TOTAL_ entries to show (_START_ to _END_)",
                },
            });*/
    //fonction pour designer les items selectionnes
    var highlight = function() {}
    checks.closest('tr').css("background-color", "rgba(0,0,0,.05)");
    //fonction pour verifier quels sont les elemeents selectionnés
    function WitchChecked() {
        checks.each(function(btn) {
            var val = $(this).attr("value");
            $(this).click(function(e) {
                if ($(this).is(":checked")) {
                    n++;
                    if (!tcr.includes(val)) {
                        tcr.unshift(val);
                    }
                } else {
                    n--;
                    if (tcr.includes(val)) {
                        var index = tcr.indexOf(val);
                        tcr.splice(index, 1);
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
                console.log("nombre de checkxbox selectionné " + tcr.length);
                if (n !== 1) {
                    $("#bdc-join").attr("href", "javascript:void(0)");
                } else {
                    var lien = "/bon/" + tcr[0] + "/facture";
                    $("#bdc-join").attr("href", lien);
                }
                lesid = ids;
                console.log(lesid);
            });
        });
    }
    WitchChecked();
    /* function calculTotal(e, id_tr) {
        var tr_parent = $("tbody tr[id='" + id_tr + "]");

        console.log(tr_parent);

        var input_elt = tr_parent.find('input[type="number"]');
        var val_prix = input_elt[0].attr("value");
        var val_qtt = input_elt[1].attr("value");
        var total = $("tr.td_cache td").replace(/_name_/g, id_tr);

        var val_total = $("#bon_listItem_0_prixUnitaire;");
        var val_qtt = $("#bon_listItem_0_quantite");
        var index = listItem.data("index");
    } 
    */
    // function pour ajouter par defaut un item
    function addOneItem() {
        var save_bdc = $("button#save-bdc");
        console.log(" Nbre de tr" + $("#table-bdc tbody tr").length);
        if ($(".tr-item").length == 0) {
            save_bdc.attr("disabled", "disabled");
            $("#add-new-item").trigger("click");
        } else {
            save_bdc.removeAttr("disabled");
        }
    }
    //appel de la fonction pour ajouter un item par defaut
    //addOneItem();
    console.log($(".tr-item .td-qtt input").length);
 /*   $(".tr-item .td-qtt input").on("keyup", function(e) {
        //recuperation de son contenu
        var value = $(this).val();
        //recuperer l'element total
        var total_item = $(".tr-item .td-total input");
        //mettre à jour la valeur de total
        total_item.val(value);
        var price_item = $(".tr-item .td-price input");
        var qtt_item = $(".tr-item .td-qtt input");
    }).keyup();*/

    function addItem(e, table, bdc) {
        e.preventDefault();
        var td0 = $("<td>", {
            class: "td-check"
        });
        var input_td0 = $("<input>", {
            type: "checkbox"
        });
        td0.append(input_td0);
        if (table == 'facture') {
            var listItem = $("#facture");
            var td1 = $("<td>", {
                class: "td-dci "
            });
            var td2 = $("<td>", {
                class: "td-qtt edit-width"
            });
            var td3 = $("<td>", {
                class: "td-price"
            });
            var td5 = $("<td>", {
                class: "td-total"
            });
            if (bdc == true) {
                var td2b = $("<td>", {
                    class: "td-recu edit-width"
                });
                var td3b = $("<td>", {
                    class: "td-pa"
                });
            }
        } else if (table == 'sorties') {
            var listItem = $("#sorties");
            var td1 = $("<td>", {
                class: "td-dci"
            });
            var td2 = $("<td>", {
                class: "td-qtt  edit-width"
            });
            var td3 = $("<td>", {
                class: "td-service "
            });
            var td4 = $("<td>", {
                class: "td-demandeur"
            });
        }
        var prototype = $("<tr>", {
            class: "tr-item"
        });
        if (table == 'facture') {
            var tbody = $("#facture tbody tr:last-child");
            var index = listItem.data("index");
            var prototype_dci = listItem.data("prototype-dci").replace(/__name__/g, index);
            var prototype_pu = listItem.data("prototype-pu").replace(/__name__/g, index);
            var prototype_qtt = listItem.data("prototype-qtt").replace(/__name__/g, index);
            var prototype_totalBdc = listItem.data("prototype-totalbdc").replace(/__name__/g, index);
        } else if (table == 'sorties') {
            var tbody = $("#sorties tbody tr:last-child");
            var index = listItem.data("index");
            var prototype_dci = listItem.data("prototype-dci").replace(/__name__/g, index);
            var prototype_qtt = listItem.data("prototype-qtt").replace(/__name__/g, index);
            var prototype_service = listItem.data("prototype-service").replace(/__name__/g, index);
            var prototype_demandeur = listItem.data("prototype-demandeur").replace(/__name__/g, index);
        }
        console.log("ca passe");
        prototype.attr("id", index);
        if (bdc == true) {
            var prototype_recu = listItem.data("prototype-recu").replace(/__name__/g, index);
            var prototype_pa = listItem.data("prototype-pa").replace(/__name__/g, index);
        }
        var td_cache = $("tr.td_cache").clone().find("td");
        var td_actions = td_cache[0];
        if (table == 'facture') {
            var td_index = "t" + index;
            td1.append(prototype_dci);
            td2.append(prototype_pu);
            td3.append(prototype_qtt);
            td5.append(prototype_totalBdc);
            if (bdc == true) {
                td2b.append(prototype_recu);
                td3b.append(prototype_pa);
            }
        } else if (table == 'sorties') {
            td1.append(prototype_dci);
            td2.append(prototype_qtt);
            td3.append(prototype_service);
            td4.append(prototype_demandeur);
        }
        if (bdc == false && table == 'facture') {
            prototype.append(td0, td1, td2, td3, td5, td_actions);
        } else if ((bdc == true && table == 'facture')) {
            prototype.append(td0, td1, td2, td2b, td3, td3b, td5, td_actions);
        } else {
            prototype.append(td0, td1, td2, td3, td4, td_actions);
        }
        var lines = $(".tr-item").attr("id", index);
        listItem.data("index", index + 1);
        tbody.before(prototype);
    }
    //evenement pour l'ajout d'une nouvelle ligne pour ajout de medicament dans un bon de commande
    $("#add-new-item").on("click", function(e) {
        addItem(e, 'facture', false);
        qtt = $('.td-qtt input[type="number"]')
        prices = $('.td-price input')
        totals = $('.td-total input[type="number"]')
        ttc = $('p#ttc span').get(0) !== "undefined" ? $('p#ttc span'): $('.td-net-a-payer input')
        updatePricesQttFields()
    });
    //evenement pour l'ajout d'une nouvelle ligne pour ajout de medicament dans une facture
    $("#add-new-item-to-facture").on("click", function(e) {
        addItem(e, 'facture', true);
        qtt = $('.td-qtt input[type="number"]')
        prices = $('.td-price input')
        totals = $('.td-total input[type="number"]')
        ttc = $('p#ttc span').get(0) !== "undefined" ? $('p#ttc span'): $('.td-net-a-payer input')
        updatePricesQttFields()
    });
    //evenement pour ajout d'une nouvelle ligne dans une sortie
    $("#add-new-item-to-sortie").on("click", function(e) {
        addItem(e, 'sorties', false);
    });
    console.log("after evenement add");

    $(".removals button#remove-item").on("click", function(e) {
        /*var tr = $(this).parent().parent();
        tr.fadeOut(250);
        tr.remove();*/
        e.preventDefault();
        var listItem = $("#facture");
        //$(this).closest("#item").fadeOut().remove();
        $(this).closest("tr").fadeOut().remove();
        console.log("One item removed ");
    });

    $("#btn_edit").on("click", function() {
        var titre = $("#staticBackdropLive .modal-content modal-body .title");
        if (titre.text() == "Veillez choisir un medicament") {
            alert("Edit Pas Bien ;c'est bon!!!!");
        }
        if ($('#staticBackdropLive form[name="medic"]') !== null) {
            $("#staticBackdropLive").modal("show");
        }
        $("#staticBackdropLive").modal("show");
    });
    //pour les operations sur les medicaments
    $("#table_id").on("click", "#btn_edit_med", function(e) {
        e.preventDefault();
        var link = $(this).attr("href");
        var f = $('#staticBackdropLive form[name="medic"]');
        if (f.attr("action") == link) {
            $("#staticBackdropLive").modal("show");
        } else {
            $.ajax({
                type: "POST",
                url: link,
                dataType: "json",
                data: {},
                beforeSend: function() {
                    $(".SpinnerLoader").css("visibility", "visible");
                },
                success: function(data) {
                    if (typeof data.reponse !== "undefined") {
                        /* window.location.reload(); */
                        $("#staticBackdropLive").modal("show");
                    } else {
                        $(".modal-content#modal_edit_content").html(data.renduForEdit);
                        $("#staticBackdropLive").modal("show");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert("error \n" + textStatus);
                },
                complete: function() {
                    $(".SpinnerLoader").css("visibility", "hidden");
                }
            });
        }
        console.log("after ajax");
    });
    $("#table_id").on("click", "#btn_remove_med", function(e) {
        e.preventDefault();
        var tr = $(this).parent().parent();
        var link = $(this).attr("href");
        tr.fadeOut(250);
        tr.remove();
        console.log(link + " + btn_remove_med");
        $.ajax({
            type: "POST",
            url: link,
            dataType: "json",
            data: {},
            contentType: "application/json; charset=utf-8",
            beforeSend: function() {
                $(".SpinnerLoader").css("visibility", "visible");
            },
            success: function(data) {
                console.log(data.suppression);
                $("#table_id").ajax.reload();
                alert("suppression  effectué avec succes ");
                window.location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                //alert("error \n" + textStatus);
                console.log("status: " + textStatus);
                console.log("erreur:" + JSON.stringify(errorThrown));
            },
            complete: function() {
                $(".SpinnerLoader").css("visibility", "hidden");
            }
        });
    });
    ////////// fin eveneement sur les medicaments//////////
    ///                                             ///////
    //////////////////////////////////////////////////////
    /////// Pour les operations de fournisseurs///////////
    /////////////////////////////////////////////////////
    $("#table_privider").on("click", "#btn_edit_four", function(e) {
        e.preventDefault();
        var link = $(this).attr("href");
        var f = $('#staticBackdropLive form[name="medic"]');
        console.log(link);
        if (f.attr("action") == link) {
            $("#staticBackdropLive").modal("show");
        } else {
            $.ajax({
                type: "POST",
                url: link,
                dataType: "json",
                data: {},
                beforeSend: function() {
                    $(".SpinnerLoader").css("visibility", "visible");
                },
                success: function(data) {
                    if (typeof data.reponse !== "undefined") {
                        console.log(data.reponse);
                        /* window.location.reload(); */
                        $("#staticBackdropLive").modal("show");
                    } else {
                        //alert("succes mais pas de reponse" + data.form);
                        $(".modal-content").html(data.renduForEdit);
                        $("#staticBackdropLive").modal("show");
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert("error \n" + textStatus);
                },
                complete: function() {
                    $(".SpinnerLoader").css("visibility", "hidden");
                },
            });
        }
        console.log("after ajax");
    });
    $("#table_privider").on("click", "#btn_remove_four", function(e) {
        e.preventDefault();
        var tr = $(this).parent().parent();
        tr.fadeOut(250);
        tr.remove();
        var link = $(this).attr("href");
        console.log(link + " + btn_remove_med");
        $.ajax({
            type: "POST",
            url: link,
            dataType: "json",
            data: {},
            beforeSend: function() {
                $(".SpinnerLoader").css("visibility", "visible");
            },
            success: function(data) {
                alert("succes effectué avec succes ");
                console.log(data);
                var formulaire = $("#staticBackdropLive");
                window.location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("error \n" + textStatus);
            },
            complete: function() {
                $(".SpinnerLoader").css("visibility", "hidden");
            },
        });
    });
    // fin evenement sur les medicaments
    // Operation pour les bons de commande et facture
    function handlebonFactureModal(e) {
        e.preventDefault();
        var link = $(this).attr("href");
        var f = $("#bon-facture");
        var modal = $("#bon-facture>.modal-dialog");
        console.log(modal.is(":empty"));
        if (active_link == link) {
            $("#bon-facture").modal("show");
        } else {
            $.ajax({
                type: "POST",
                url: link,
                dataType: "json",
                beforeSend: function() {
                    $(".SpinnerLoader").css("visibility", "visible");
                },
                success: function(data) {
                    //	if (typeof data.reponse !== "undefined") {
                    /* window.location.reload(); */
                    modal.empty();
                    modal.append(data.bon_data);
                    active_link = link;
                    $("#bon-facture").modal("show");
                    $("button#print").on("click", function() {
                        console.log(this.html);
                        printJS({
                            printable: data.bon_data,
                            type: "json",
                            header: '<div class="logo"><h1>Clinique Yaye Marie</h1><img src="https://placeimg.com/100/100/any" alt="image dillustration du logo de lentreprise"></div>',
                            gridStyle: "border: 2px solid #3971A5;",
                        });
                    });
                    /*} else {
                    	alert("succes mais pas de reponse" + data.reponse);
                    	modal.empty();
                    	modal.append(data.bdc);
                    	$("#bon-facture").modal("show");
                    }*/
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert("error: " + textStatus);
                },
                complete: function() {
                    $(".SpinnerLoader").css("visibility", "hidden");
                },
            });
        }
        console.log("after ajax request for bdc/bdc");
    }
    $("#table-bdc").on("click", "#btn-show-bdc", handlebonFactureModal);
    $("#table-bdl").on("click", "#btn-show-bdl", handlebonFactureModal);
    $("button#print-bdc").on("click", function() {
        console.log(this.html);
        printJS({
            printable: data.bdc,
            type: "json",
            header: '<div class="logo"><h1>Clinique Yaye Marie</h1><img src="https://placeimg.com/100/100/any" alt="image dillustration du logo de lentreprise"></div>',
            gridStyle: "border: 2px solid #3971A5;",
        });
    });
/////////////////////////////////////////////////////////////
////////////////function pour la suppression d'un bon/////////////////////
////////////////////////////////////////////////////////////
    function removeThisBdc(e) {
        e.preventDefault();
        var link = $(this).attr("href");
        var tr = $(this).parent().parent();
        tr.fadeOut(250);
        tr.remove();
        console.log(link + " <== btn-remove-bdc");
        $.ajax({
            type: "POST",
            url: link,
            dataType: "json",
            data: {},
            beforeSend: function() {
                $(".SpinnerLoader").css("visibility", "visible");
            },
            success: function(data) {
                //alert("suppression  effectué avec succes ");
                console.log(data);
                window.location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert("error \n" + textStatus);
            },
            complete: function() {
                $(".SpinnerLoader").css("visibility", "hidden");
            },
        });
        console.log("after ajax devare request for bdc");
    }
    //$("#table-bdc").on("click", "#btn-remove-bdc", removeThisBdc);

    //fin operations pour les bon de commande
    //Actualisations automatique du prix total
    $("#bdc-join").on("click", function(event) {
        var url = $(this).attr("href");
        console.log(checks);
        if (url == "javascript:void(0)") {
            alert("Vous devez choisir un et un seul boon de commande");
        } else {
            event.preventDefault();
            console.log("je reste sur la page");
            /*	$('#staticBackdropLive').trigger('click'); 
            		$('#staticBackdropLive').modal('show');				*/
            if (tcr.length == 1) {
                if (tcr[0]) {
                    console.log("pass1  " + tcr[0]);
                    var id = tcr[0];
                    var onAjaxFailed = function(jqXHR, textStatus, errorThrown) {
                        console.log("AJAX failed!", jqXHR, textStatus, errorThrown);
                    };
                    var onEditSucess = function(data) {
                        console.log(data);
                        alert("OK");
                        var medic = $.parseJSON(data);
                        alert("Success,Everything is going well ");
                    };
                    var onEditFail = function(error) {
                        alert("Error : request Fail");
                        console.log(error);
                    };
                    $.ajax({
                        url: url,
                        type: "POST",
                        data: JSON.stringify({
                            id: id
                        }),
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
    $("#myForm").submit(function(e) {
        e.preventDefault(); //empêcher une action par défaut
        var form_url = $(this).attr("action"); //récupérer l'URL du formulaire
        var form_method = $(this).attr("method"); //récupérer la méthode GET/POST du formulaire
        var form_data = $(this).serialize(); //Encoder les éléments du formulaire pour la soumission
        $.ajax({
            url: form_url,
            type: form_method,
            data: form_data
        }).done(function(response) {
            $("#res").html(response);
        });
    });
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */
    //--------------
    //- AREA CHART -
    //--------------
    // Get context with jQuery - using jQuery's .get() method.
    /*
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
    var mydataChart = [{
        value: 300,
        color: "#560620",
        highlight: "#560620",
        label: "Red"
    }, {
        value: 50,
        color: "#fff",
        highlight: "#560620",
        label: "Green"
    }, {
        value: 100,
        color: "#560620",
        highlight: "#560620",
        label: "Yellow"
    }];
    var areaChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Digital Goods',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgba(60,141,188,0.8)',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: [28, 48, 40, 19, 86, 27, 90]
        }, {
            label: 'Electronics',
            backgroundColor: 'rgba(210, 214, 222, 1)',
            borderColor: 'rgba(210, 214, 222, 1)',
            pointRadius: false,
            pointColor: 'rgba(210, 214, 222, 1)',
            pointStrokeColor: '#c1c7d1',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data: [65, 59, 80, 81, 56, 55, 40]
        }, ]
    }
    var areaChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
            display: false
        },
        title: {
            display: true,
            position: 'bottom',
            text: 'Her is the title',
        },
        scales: {
            xAxes: [{
                gridLines: {
                    display: false,
                }
            }],
            yAxes: [{
                gridLines: {
                    display: false,
                }
            }]
        }
    }
    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
    })
    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false
    var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
    })
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData = {
        labels: ['Gyneco', 'Odonto', 'Cardio', 'Dent', 'Labo', 'Soin', ],
        datasets: [{
            data: [700, 500, 400, 600, 300, 100],
            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }]
    }
    var donutOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    })
    //-------------
    //- MY DONUT CHART -
    //-------------
    var cty = $('#myChart').get(0).getContext("2d");
    var myChartOption = {
        pointDotRadius: 3,
        bezierCurve: true,
        datasetFill: true,
        datasetStroke: true,
        scaleShowVerticalLines: false,
        scaleShowHorizontalLines: false,
        pointDotStrokeWidth: 4,
        fillColor: "rgba(220,220,220,0.2)",
        scaleGridLineColor: "black"
    }
    new Chart(cty, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
    });
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData = donutData;
    var pieOptions = {
        maintainAspectRatio: false,
        responsive: true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
    })
    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0
    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
    }
    new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
    })
    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)
    var stackedBarChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            xAxes: [{
                stacked: true,
            }],
            yAxes: [{
                stacked: true
            }]
        }
    }
    new Chart(stackedBarChartCanvas, {
        type: 'bar',
        data: stackedBarChartData,
        options: stackedBarChartOptions
    })
	*/
    
	//  $("#table_id").DataTable({
	//   "responsive": true, "lengthChange": false, "autoWidth": false,
	//   "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
	
	// 		"oLanguage": {
	// 		  "oPaginate": {
	// 		    "sPrevious": "<---",
	// 		    "sNext": "--->" ,"sEmptyTable": "Pas de medicament trouvé",
	// 		},
	// 		"sSearch": "rechercher :",
	// 		"sInfo": "Got a total of _TOTAL_ entries to show (_START_ to _END_)",
	// 		}
	
	// }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
	// $('#table_id').DataTable({
	// 	"paging": true,
	// 	"lengthChange": false,
	// 	"searching": false,
	// 	"ordering": true,
	// 	"info": true,
	// 	"autoWidth": true,
	// 	"responsive": true,
	// })
});