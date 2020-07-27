
$('option.dropdown-item').click(function () {
    $('option.dropdown-item').removeClass('active');
    $(this).addClass('active');
    let divs;
    if (this.id == "alphabeticalOrderOption") {
        divs = $("div.aideTechnique");
        let alphabeticallyOrderedDivs = divs.sort(function (a, b) {
            return $(a).find("h5").text().toLowerCase() > $(b).find("h5").text().toLowerCase() ? 1 : ( $(a).find("h5").text().toLowerCase() < $(b).find("h5").text().toLowerCase() ? -1 :0);
        });
        $("#container").html(alphabeticallyOrderedDivs);
    } else {
        divs = $("div.aideTechnique");
        let notalphabeticallyOrderedDivs = divs.sort(function (a, b) {
            return $(a).find("h5").text().toLowerCase() > $(b).find("h5").text().toLowerCase() ? -1 : ( $(a).find("h5").text().toLowerCase() < $(b).find("h5").text().toLowerCase() ? 1 :0);
        });
        $("#container").html(notalphabeticallyOrderedDivs);
    }
})


$('#filterbutton').click(function () {
    if (!$("#filterForm").hasClass("d-none")) {
        if ($("#filterForm:visible").length === 1) {
            $("#filterForm:visible").hide()
        } else {
            $("#filterForm:hidden").show()
        }
    } else {
        $("#filterForm").removeClass("d-none")
    }
})
