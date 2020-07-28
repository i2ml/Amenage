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

        let test = $('#validationCustom01').val();

        $.ajax({
            url: 'aideTechniques',
            method: 'post',
            data: {
                isReset: false,
                test: 1
            },
            success: function (response) {
                $('#container').html(response)
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown)
            }
        });
    }));

$(document).ready(
    $('#reset-filter').click(function () { //filter applied

        let test = $('#validationCustom01').val();

        $.ajax({
            url: 'aideTechniques',
            method: 'post',
            data: {
                isReset: true,
                test: 1
            },
            success: function (response) {
                $('#container').html(response)
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert(errorThrown)
            }
        });
    }))
