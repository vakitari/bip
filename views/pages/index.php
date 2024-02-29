<?php
$view->component('start')

?>

<div class="home-div">

    <p>Интернет магазин Flower - это удобство, скорость, и качество доставки.
    </p>
</div>

<div class="home-inf">
    <div class="inf-div">
        <h2>10</h2>
        <p>лет на рынке</p>
    </div>
    <div class="inf-div">
        <h2>1000+</h2>
        <p>Покупателей в день</p>
    </div>
    <div class="inf-div">
        <h2>100+</h2>
        <p>магазинов по всей стране</p>
    </div>
</div>
<div class="content-home">
    <div class="prod-home">
        <?php
        for ($i = 0; $i < 6; $i++) {
            // code to be executed
        ?>
            <div class="prod-div">
                <img src="views/components/img/Rectangle.png" alt="12312">
                <p>название: жопоглазки</p>
                <p>цена:10000</p>
                <p>кол-во цветов: 10</p>
                <p class="pp">Описание:
                <p>Эти прекрасные цветы расцветают в самую красивую пору, весной когда еще не весь снег расстаял, прекрастные бутоны этого цветка распускаются и все кайфуют</p>
                </p>
                <div class="p_b">
                    <a  class="btn btn-outline-success" type="button" value="купить">купить </a>
                    <a href="/bas/description" class="btn btn-outline-success" type="button" value="Подробнее">Подробнее</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- <div class="prod-div">
            <img src="views/components/img/Rectangle.png" alt="12312">
            <p>название: жопоглазки</p>
            <p>цена:10000</p>
            <p>кол-во цветов: 10</p>
            <p class="pp">Описание:
            <p>Эти прекрасные цветы расцветают в самую красивую пору, весной когда еще не весь снег расстаял, прекрастные бутоны этого цветка распускаются и все кайфуют</p>
            </p>
            <div class="p_b">
                <a class="btn btn-outline-success" type="button" value="купить">купить </a>
                <a class="btn btn-outline-success" type="button" value="Подробнее">Подробнее</a>
            </div>
        </div>
        <div class="prod-div">
            <img src="views/components/img/Rectangle.png" alt="12312">
            <p>название: жопоглазки</p>
            <p>цена:10000</p>
            <p>кол-во цветов: 10</p>
            <p class="pp">Описание:
            <p>Эти прекрасные цветы расцветают в самую красивую пору, весной когда еще не весь снег расстаял, прекрастные бутоны этого цветка распускаются и все кайфуют</p>
            </p>
            <div class="p_b">
                <a class="btn btn-outline-success" type="button" value="купить">купить </a>
                <a class="btn btn-outline-success" type="button" value="Подробнее">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="prod-home">
        <div class="prod-div">
            <img src="views/components/img/Rectangle.png" alt="12312">
            <p>название: жопоглазки</p>
            <p>цена:10000</p>
            <p>кол-во цветов: 10</p>
            <p class="pp">Описание:
            <p>Эти прекрасные цветы расцветают в самую красивую пору, весной когда еще не весь снег расстаял, прекрастные бутоны этого цветка распускаются и все кайфуют</p>
            </p>
            <div class="p_b">
                <a class="btn btn-outline-success" type="button" value="купить">купить </a>
                <a class="btn btn-outline-success" type="button" value="Подробнее">Подробнее</a>
            </div>
        </div>
        <div class="prod-div">
            <img src="views/components/img/Rectangle.png" alt="12312">
            <p>название: жопоглазки</p>
            <p>цена:10000</p>
            <p>кол-во цветов: 10</p>
            <p class="pp">Описание:
            <p>Эти прекрасные цветы расцветают в самую красивую пору, весной когда еще не весь снег расстаял, прекрастные бутоны этого цветка распускаются и все кайфуют</p>
            </p>
            <div class="p_b">
                <a class="btn btn-outline-success" type="button" value="купить">купить </a>
                <a class="btn btn-outline-success" type="button" value="Подробнее">Подробнее</a>
            </div>
        </div>
        <div class="prod-div">
            <img src="views/components/img/Rectangle.png" alt="12312">
            <p>название: жопоглазки</p>
            <p>цена:10000</p>
            <p>кол-во цветов: 10</p>
            <p class="pp">Описание:
            <p>Эти прекрасные цветы расцветают в самую красивую пору, весной когда еще не весь снег расстаял, прекрастные бутоны этого цветка распускаются и все кайфуют</p>
            </p>
            <div class="p_b">
                <a class="btn btn-outline-success" type="button" value="купить">купить </a>
                <a class="btn btn-outline-success" type="button" value="Подробнее">Подробнее</a>
            </div>
        </div>
    </div> -->
</div>
<?php
$view->component('end')

?>