$('option.dropdown-item').click(function () {
    $('option.dropdown-item').removeClass('active');
    $(this).addClass('active');
    if (this.id == "alphabeticalOrderOption") {
        let $divs = $("div.aideTechnique");
        let alphabeticallyOrderedDivs = $divs.sort(function (a, b) {
            return $(a).find("h5").text().toLowerCase() > $(b).find("h5").text().toLowerCase();
        });
        $("#container").html(alphabeticallyOrderedDivs);
    } else {
        let $divs = $("div.aideTechnique");
        let notalphabeticallyOrderedDivs = $divs.sort(function (a, b) {
            return $(a).find("h5").text().toLowerCase() < $(b).find("h5").text().toLowerCase();
        });
        $("#container").html(notalphabeticallyOrderedDivs);
    }
});

$('#filterbutton').click(function () {
    if($("#filterForm:visible").length === 1){
        $("#filterForm:visible").hide()
    }else{
        $("#filterForm:hidden").show()
    }
});
