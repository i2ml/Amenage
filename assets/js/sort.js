$('option.dropdown-item').click(function () {  //sort option selected
    $('option.dropdown-item').removeClass('active');
    $(this).addClass('active');
    let divs;
    if (this.id == "alphabeticalOrderOption") {
        divs = $("div.aideTechnique");
        let alphabeticallyOrderedDivs = divs.sort(function (a, b) {
            return $(a).find("h5").text().toLowerCase() > $(b).find("h5").text().toLowerCase() ? 1 : ($(a).find("h5").text().toLowerCase() < $(b).find("h5").text().toLowerCase() ? -1 : 0);
        });
        $("#container").html(alphabeticallyOrderedDivs);
    } else {
        divs = $("div.aideTechnique");
        let notalphabeticallyOrderedDivs = divs.sort(function (a, b) {
            return $(a).find("h5").text().toLowerCase() > $(b).find("h5").text().toLowerCase() ? -1 : ($(a).find("h5").text().toLowerCase() < $(b).find("h5").text().toLowerCase() ? 1 : 0);
        });
        $("#container").html(notalphabeticallyOrderedDivs);
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
        console.log($('#estAjustable'))
        $.ajax({
            url: 'aideTechniques',
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
                solo: $('#solo').is(":checked")
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
            url: 'aideTechniques',
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
                solo: null
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
