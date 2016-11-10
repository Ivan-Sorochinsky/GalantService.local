<!doctype html>
<html>
<?php include "../forms/header.php" ?>
<script src="common.js"></script>
<body>
<div class="container">
<div class="col-md-11">
    <div class="work">
        <br>
        <h2 class="center naz">Оформление заказа</h2>
        <br>
        <!-- <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Выберите услугу:
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Модернизация ПК и ноутбуков</a></li>
                <li><a href="#">Ремонт компьютеров</a></li>
                <li><a href="#">Ремонт ноутбуков</a></li>
                <li><a href="#">Ремонт мониторов</a></li>
                <li><a href="#">Ремонт ЖК телевизоров</a></li>
                <li><a href="#">Ремонт планшетов</a></li>
                <li><a href="#">Ремонт смартфонов</a></li>
                <li><a href="#">Ремонт техники Apple</a></li>
                <li><a href="#">Восстановление данных</a></li>
                <li><a href="#">Настройка программного обеспечения</a></li>
                <li><a href="#">Настройка интернет сетей</a></li>
            </ul>
        </div>-->

        <!-- Large modal-->

        <div id="myModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    Ваша заявка принята. В скором времени с вами свяжется наш мастер.
                    <div class="col-md-3 buttonhead">
                        <a href="../pages/zacaz.php"><button type="button" class="btn btn-info"><b>Обратный звонок</b></button></a>
                        <a href="../pages/zacaz.php"><button type="button" class="btn btn-info"><b>Закзать ремонт</b></button></a>
                    </div>
                    ...
                </div>
            </div>
        </div>


        <form id="form">
        <p>Имя: </p><p> <input type="text" name="name" placeholder="Ваше имя" required /><br /></p>
        <p>Ваш телефон: </p><p> <input type="text" name="phone" placeholder="Контактный телефон" required /><br /></p>
        <p>Сообщение: </p><p> <textarea rows= "10" cols= "45" name= "message"></textarea></p>
        <button>Отправить</button>
    </form>


    </div>
</div>
    </div>
</body>
<?php include "../forms/footer.php" ?>
</html>