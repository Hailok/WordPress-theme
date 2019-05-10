jQuery(document).ready(function($) {
	$(".menu .search .search-button-disabled").click(function(event) {
		$(".menu .search .search-button-disabled").css("display", "none");
		$(".menu .search .search-button-enabled").css("display", "block");
		$(".menu .search .search-field").fadeIn(200);
	});

	var count = 0;
	$("#single .product .info .buy-box .shop-now").click(function(event) {
		var cookieName = "shoes";
		var currentCookie = readCookie(cookieName);
		var shoes = currentCookie == undefined ? [] : JSON.parse(currentCookie);
		shoes.push("запись" + count++);
		var shoesJSON = JSON.stringify(shoes);
		createCookie(cookieName, shoesJSON, 30);

		$(".menu .shop-button .shop-bukket").empty();
		for(var i = 0; i < shoes.length; i++) {
			$(".menu .shop-button .shop-bukket").append($("<div></div>").html("<p>" + shoes[i] + "</p>"));
		}
		$(".menu .shop-button .shop-bukket").append($("<div></div>").html("<p>" + currentCookie + "</p>"));
	});
});




function createCookie(name,value,days) {
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        var expires = "; expires=" + date.toGMTString();
    } else {
        var expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return null;
}

function cleanCookie(name) {
    createCookie(name,"",-1);
}