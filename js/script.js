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
        var currentCookie = readCookie(cookieName);
		var shoes = currentCookie == undefined ? [] : JSON.parse(currentCookie);

        if(
            $(".menu .shop-button .shop-button-confirm input.your-name").val() != "" &&
            $(".menu .shop-button .shop-button-confirm input.telephone-number").val() != "" &&
            $(".menu .shop-button .shop-button-confirm input.address").val() != ""
            ) {
            cleanCookie(cookieName);
            showCookieOfBasket();
        }


        $(".menu .shop-button .shop-button-confirm input.your-name").val();
        $(".menu .shop-button .shop-button-confirm input.telephone-number").val();
        $(".menu .shop-button .shop-button-confirm input.address").val();
    });

	//добавление и отображение cookie в корзине
	$("#single .product .buy-box .shop-now").click(function(event) {
		var currentCookie = readCookie(cookieName);
		var shoes = currentCookie == undefined ? [] : JSON.parse(currentCookie);
		shoes.push([
            $(".product .info .title").text(),
            parseFloat($(".product .price").text()),
        ]);
		var shoesJSON = JSON.stringify(shoes);
		createCookie(cookieName, shoesJSON, 30);
        $(".menu .shop-button .shop-button-confirm textarea.order-list").val("");
		$(".menu .shop-button .shop-bukket .shop-bukket-items").empty();
		for(var i = 0; i < shoes.length; i++) {
			$(".menu .shop-button .shop-bukket .shop-bukket-items").append(
                '<div class="shop-bukket-item">'+
                    '<div class="item-name">' + shoes[i][0] + '</div>'+
                    '<div class="item-price">' + shoes[i][1] + ' ₴</div>'+
                '</div>'
            );
            $(".menu .shop-button .shop-button-confirm textarea.order-list").val(
                $(".menu .shop-button .shop-button-confirm textarea.order-list").val() + "\n" + (i + 1) + ") Название: " + shoes[i][0] + "\nЦена: " + shoes[i][1] + " грн"
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

        $(".menu .shop-button .shop-button-confirm textarea.order-list").val("");
        $(".menu .shop-button .shop-bukket .shop-bukket-items").empty();
        for(var i = 0; i < shoes.length; i++) {
            $(".menu .shop-button .shop-bukket .shop-bukket-items").append(
                '<div class="shop-bukket-item">'+
                    '<div class="item-name">' + shoes[i][0] + '</div>'+
                    '<div class="item-price">' + shoes[i][1] + ' ₴</div>'+
                '</div>'
            );
            $(".menu .shop-button .shop-button-confirm textarea.order-list").val(
                $(".menu .shop-button .shop-button-confirm textarea.order-list").val() + "\n" + (i + 1) + ") Название: " + shoes[i][0] + "\nЦена: " + shoes[i][1] + " грн"
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