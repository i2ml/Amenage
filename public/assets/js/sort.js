$('option.dropdown-item').click(function () {  //sort option selected
    $('option.dropdown-item').removeClass('active');
    $(this).addClass('active');
    let divs;
    switch (this.id) {
        case "alphabeticalOrderOption":
            divs = $("div.aideTechnique");
            let alphabeticallyOrderedDivs = divs.sort(function (a, b) {
                return $(a).find("h5.sortinvert").text().toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") > $(b).find("h5.sortinvert").text().toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") ? 1 : ($(a).find("h5.sortinvert").text().toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") < $(b).find("h5.sortinvert").text().toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") ? -1 : 0);
            });
            $("#container").html(alphabeticallyOrderedDivs);
            break;
        default:
            divs = $("div.aideTechnique");
            let notalphabeticallyOrderedDivs = divs.sort(function (a, b) {
                return $(a).find("h5.sort-noninvert").text().toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") > $(b).find("h5.sort-noninvert").text().toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") ? -1 : ($(a).find("h5.sort-noninvert").text().toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") < $(b).find("h5.sort-noninvert").text().toLowerCase().normalize("NFD").replace(/[\u0300-\u036f]/g, "") ? 1 : 0);
            });
            $("#container").html(notalphabeticallyOrderedDivs);
            break;
    }
});


$('#filterbutton').click(function () { //filter menu appeareance
    if (!$("#filterForm").hasClass("d-none")) {
        if ($("#filterForm:visible").length === 1) {
            $("#filterForm:visible").hide()
        } else {
            $("#filterForm:hidden").show()
        }
    } else {
        $("#filterForm").removeClass("d-none")
    }
});

$(document).ready(
    $('#submit-filter').click(function () { //filter applied
        $.ajax({
            url: 'filter',
            method: 'post',
            data: {
                isReset: false,
                largeurMax: $('#largeurMax').val(),
                longueurMax: $('#longueurMax').val(),
                hauteurMax: $('#hauteurMax').val(),
                prixMax: $('#prixMax').val(),
                supPoidsMax: $('#supPoidsMax').val(),
                poidsMax: $('#poidsMax').val(),
                estAjustable: $('#estAjustable').is(":checked"),
                estPliable: $('#estPliable').is(":checked"),
                solo: $('#solo').is(":checked"),
                rembourse: $('#rembourse').is(":checked"),
                searchInput: $('#searchInput').text(),
                categorie: $('#catid').text(),
                zone: $('#zoneid').text(),
                group: $('#groupid').text()
            },
            success: function (response) {
                $('#container').html(response)
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(jqXHR.responseText)
            }
        });
    })
);

$(document).ready(
    $('#reset-filter').click(function () { //filter applied
        $.ajax({
            url: 'filter',
            method: 'post',
            data: {
                isReset: true,
                largeurMax: null,
                longueurMax: null,
                hauteurMax: null,
                prixMax: null,
                supPoidsMax: null,
                poidsMax: null,
                estAjustable: null,
                estPliable: null,
                solo: null,
                rtotal: null,
                rembourse: null,
                searchInput: $('#searchInput').text(),
                categorie: $('#catid').text(),
                zone: $('#zoneid').text(),
                group: $('#groupid').text()
            },
            success: function (response) {
                $('#container').html(response)
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(jqXHR.responseText)
            }
        });
    })
);
