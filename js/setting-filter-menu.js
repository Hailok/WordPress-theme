var currentHostname = window.location.hostname;
var currentURL = window.location.href;
var currentSlugs = selectCategorySlagInLink(currentURL).split("/");
var links = document.querySelectorAll(".filter-panel .menu-item a");

for (var i = 0; i < links.length; i++) {
    var currentSlugsBuffer = currentSlugs.slice();
    var linkElem = links[i];
    var linkValue = linkElem.getAttribute("href");
    var linkSlug = selectCategorySlagInLink(linkValue);

    var currentSlugIndex = currentSlugsBuffer.indexOf(linkSlug)
    if (currentSlugIndex != -1) {
        currentSlugsBuffer.splice(currentSlugIndex, 1);
        linkElem.setAttribute("href", "/category/" + currentSlugsBuffer.join("/"));
        linkElem.classList.add("selected");
        continue;
    }

    linkElem.setAttribute("href", linkSlug);
}

var orderbyElem = document.querySelector(".orderby .orderby-item");

if (currentURL.indexOf("from-new") != -1) {
    orderbyElem.selectedIndex = 0;
} else if (currentURL.indexOf("from-cheap-to-expensive") != -1) {
    orderbyElem.selectedIndex = 1;
} else if (currentURL.indexOf("from-expensive-to-cheap") != -1) {
    orderbyElem.selectedIndex = 2;
}

orderbyElem.onchange = function() {
    console.log(orderbyElem.selectedIndex);
    var orderby = orderbyElem.selectedIndex;

    switch (orderby) {
       case 0:
           orderby = "from-new";
           break;
        case 1:
           orderby = "from-cheap-to-expensive";
           break;
        case 2:
           orderby = "from-expensive-to-cheap";
           break;
    }

    window.location.assign("?orderby=" + orderby);
}

//определение слагов в ссылке категории
function selectCategorySlagInLink(link) {
    var beginOfSlags = link.indexOf("category") + 8;
    return link.slice(beginOfSlags + 1, link.length - 1);
}