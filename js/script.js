var cookieName = "shoes";

jQuery(document).ready(function($) {
    showCookieOfBasket();

    //переключение между меню и лого
    $(".open-menu-button .open-menu-button-item").click(function(event) {
        if (getComputedStyle(document.querySelector(".menu .logo-menu-wrap .logo")).display == "flex") {
            $(".menu .logo-menu-wrap .logo").css("display", "none");
            $(".menu .logo-menu-wrap .menu-list").css("display", "flex");
        } else {
            $(".menu .logo-menu-wrap .menu-list").css("display", "none");
            $(".menu .logo-menu-wrap .logo").css("display", "flex");
        }
    });

    //появление фильтра
    $(".menu .filter-button .filter-button-item").click(function(event) {
		$("#archive .filter-panel").fadeToggle(200);
    });

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

        if (
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
        $(".menu .shop-button .shop-button-item .counterItems").text(shoes.length);
		var shoesJSON = JSON.stringify(shoes);
		createCookie(cookieName, shoesJSON, 30);
        $(".menu .shop-button .shop-button-confirm textarea.order-list").val("");
		$(".menu .shop-button .shop-bukket .shop-bukket-items").empty();
		for(var i = 0; i < shoes.length; i++) {
			$(".menu .shop-button .shop-bukket .shop-bukket-items").append(
                '<div class="shop-bukket-item" data-index="' + i + '">'+
                    '<div class="item-name">' + shoes[i][0] + '</div>'+
                    '<div class="item-price">' + shoes[i][1] + ' ₴</div>'+
                '</div>'
            );
            $(".menu .shop-button .shop-button-confirm textarea.order-list").val(
                $(".menu .shop-button .shop-button-confirm textarea.order-list").val() + "\n" + (i + 1) + ") Название: " + shoes[i][0] + "\nЦена: " + shoes[i][1] + " грн"
            );
        }
        setRemoveFunc();
    });
});

//отобразить cookie в корзине
function showCookieOfBasket() {
    var currentCookie = readCookie(cookieName);
    var shoes = JSON.parse(currentCookie);

    if (shoes == undefined || shoes.length <= 0) {
        $(".menu .shop-button .shop-button-item .counterItems").text("0");
        $(".menu .shop-button .shop-bukket .shop-bukket-items").empty().append(
            '<p class="isEmpty">Корзина пустая</p>'
        )
    } else {
        $(".menu .shop-button .shop-button-item .counterItems").text(shoes.length);
        
        $(".menu .shop-button .shop-button-confirm textarea.order-list").val("");
        $(".menu .shop-button .shop-bukket .shop-bukket-items").empty();
        for(var i = 0; i < shoes.length; i++) {
            $(".menu .shop-button .shop-bukket .shop-bukket-items").append(
                '<div class="shop-bukket-item" data-index="' + i + '">'+
                    '<div class="item-name">' + shoes[i][0] + '</div>'+
                    '<div class="item-price">' + shoes[i][1] + ' ₴</div>'+
                '</div>'
            );
            $(".menu .shop-button .shop-button-confirm textarea.order-list").val(
                $(".menu .shop-button .shop-button-confirm textarea.order-list").val() + "\n" + (i + 1) + ") Название: " + shoes[i][0] + "\nЦена: " + shoes[i][1] + " грн"
            );
        }
        setRemoveFunc();
    }
}

//добавить функцию удаления из корзины
function setRemoveFunc() {
    var shop_bukket_items = document.querySelectorAll(".shop-bukket-items .shop-bukket-item");
  
    for (var i = 0; i < shop_bukket_items.length; i++) {
        shop_bukket_items[i].onclick = function () {
            var currentCookie = readCookie(cookieName);
            var shoes = currentCookie == undefined ? [] : JSON.parse(currentCookie);
            shoes.splice(this.dataset.index, 1);
            var shoesJSON = JSON.stringify(shoes);
            createCookie(cookieName, shoesJSON, 30);
            showCookieOfBasket();
        }
    }
}

//отображение количества товаров к розине
function setCountThings() {

}