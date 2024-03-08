

<style>
    .body-1 .swiper {
        width: 500px;
        height: 100%;
    }

    .body-1 .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .body-1 .swiper-slide img {
        display: block;
        width: 500px;
        height: 100%;
        object-fit: cover;
    }

    .swiper-pagination-bullet{
        background-color: #fff;
        width: 10px;
        height: 10px;

    }
</style>

<div class="conteiner" style="max-width: 500px; background-color: #fff;">
    <div class="underhead-add">
        <div class="text">
            <p class="text">Доставка по России - 700 ₽, по Москве - 500 ₽</p>
        </div>
    </div>
    <nav>
        <img src="img/Logo2.png" class="nav-logo">
        <div class="nav-items">
            <img style="max-width: 21px; max-height: 19px;" class="scaled" src="img/heart.svg" alt="heart">
            <div class="shoppingCart scaled">
                <img class="cart-image" src="img/shoping-cart.svg" alt="cart">
                <img class="ellipse" src="img/ellipse.svg" alt="">
                <p>1</p>
            </div>
            <img style="max-width: 21px; max-height: 19px;" class="burger scaled" src="img/burger.svg" alt="menu">
        </div>
    </nav>
    <div style="height: 320px; max-width: 500px;" class="body-1">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div style="background-image:url(img/adobe.jpeg); background-size: cover;" class="swiper-slide"></div>
                <div style="background-image:url(img/adobe2.jpg); background-size: cover;" class="swiper-slide"></div>
                <div style="background-image:url(img/adobe3.jpeg); background-size: cover;" class="swiper-slide"></div>
                <div style="background-image:url(img/adobe.4.jpg); background-size: cover;" class="swiper-slide"></div>
            </div>
        </div>
    </div>
    <div class="body-2" style="display: flex; justify-content: center; width: 100%; margin-bottom: 79px;">
        <div class="body-2-conteiner">
            <div class="body-2-text" style="display: flex; justify-content: center;">
                <p>ПРОИЗВОДИМ ДИЗАЙНЕРСКИЕ ОБОИ</p>
            </div>
            <div style="position: relative" class="ellipses">
                <div style="position: absolute; transform: translateY(20px)" class="swiper-pagination"></div>
            </div>
        </div>
    </div>
