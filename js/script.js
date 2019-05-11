var cookieName = "shoes";
jQuery(document).ready(function($) {
    showCookieOfBasket();

    //появление строки поиска
	$(".menu .search .search-button-disabled").click(function(event) {
		$(".menu .search .search-button-disabled").css("display", "none");
		$(".menu .search .search-button-enabled").css("display", "block");
		$(".menu .search .search-field").fadeIn(200);
    });
    
    //появление и исчезновение корзины покупок
    $(".menu .shop-button .shop-button-item").click(function(event) {
        $(".menu .shop-button .shop-bukket").fadeToggle(200);
    });

    //оформление покупки
    $(".menu .shop-button .shop-button-confirm .shop-button-confirm-item").click(function(event) {
        cleanCookie(cookieName);
        showCookieOfBasket();
    });

	//добавление и отображение cookie в корзине
	$("#single .product .info .buy-box .shop-now").click(function(event) {
		var currentCookie = readCookie(cookieName);
		var shoes = currentCookie == undefined ? [] : JSON.parse(currentCookie);
		shoes.push("запись1");
		var shoesJSON = JSON.stringify(shoes);
		createCookie(cookieName, shoesJSON, 30);

		$(".menu .shop-button .shop-bukket .shop-bukket-items").empty();
		for(var i = 0; i < shoes.length; i++) {
			$(".menu .shop-button .shop-bukket .shop-bukket-items").append(
                '<div class="shop-bukket-item">'+
                    '<div class="item-name">Кроссовки1</div>'+
                    '<div class="item-price">54 грн</div>'+
                '</div>'
            );
		}
	});
});

//отобразить cookie в корзине
function showCookieOfBasket() {
    var currentCookie = readCookie(cookieName);

    if (currentCookie == undefined) {
        $(".menu .shop-button .shop-bukket .shop-bukket-items").empty().append(
            '<p class="isEmpry">Корзина пустая</p>'
        )
    } else {
        var shoes = JSON.parse(currentCookie);

        $(".menu .shop-button .shop-bukket .shop-bukket-items").empty();
        for(var i = 0; i < shoes.length; i++) {
            $(".menu .shop-button .shop-bukket .shop-bukket-items").append(
                '<div class="shop-bukket-item">'+
                    '<div class="item-name">Кроссовки1</div>'+
                    '<div class="item-price">54 грн</div>'+
                '</div>'
        );
    }
    }
}

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