
let sortOptions = document.getElementsByClassName("dropdown-item");
let aideTechnique = document.getElementsByClassName("aideTechnique");

for (let i = 0; i < sortOptions.length; i++) {
    let element = sortOptions[i];
    element.addEventListener('click', sort);
};

function sort() {
    for (let i = 0; i < sortOptions.length; i++) {
        let element = sortOptions[i];
        element.classList.remove('active');
    };
    this.classList.add('active');
    if(this.id == "alphabeticalOrderOption"){
        var $divs = $("div.aideTechnique");
        var alphabeticallyOrderedDivs = $divs.sort(function (a, b) {
            return $(a).find("h5").text().toLowerCase() > $(b).find("h5").text().toLowerCase();
        });
        $("#container").html(alphabeticallyOrderedDivs);
    }else{
        var $divs = $("div.aideTechnique");
        var notalphabeticallyOrderedDivs = $divs.sort(function (a, b) {
            return $(a).find("h5").text().toLowerCase() < $(b).find("h5").text().toLowerCase();
        });
        $("#container").html(notalphabeticallyOrderedDivs);
    }
  
}

var mylist = $('ul');
var listitems = mylist.children('li').get();
listitems.sort(function(a, b) {
   return $(a).text().toUpperCase().localeCompare($(b).text().toUpperCase());
})
$.each(listitems, function(idx, itm) { mylist.append(itm); });