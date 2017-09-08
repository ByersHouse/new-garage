<?php Page::render('layouts/header'); ?>

<div class="cart__order">
    <div class="container">
        <div class="block__header">
            <i class="borderBo borderBo2 borderBo3"></i>
            <div class="block__innerText">
                <span class="block__headerRow2 cartorder">Оформление заказа</span>
            </div>
        </div>
        <div class="cartContent">
            <div class="cartContentLeft">
                <div class="cartContentPackage">
                    <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0 ) { ?>
                        <?php if($_SESSION['cart'][0]['item'] == 'econom') { ?>
                            Годовой пакет:   <span class="packageValue packageValue--green"> ЭКОНОМ </span>
                        <?php } else if($_SESSION['cart'][0]['item'] == 'comfort') {  ?>

                            Годовой пакет:   <span class="packageValue packageValue--yellow"> COMFORT </span>
                        <?php } else if($_SESSION['cart'][0]['item'] == 'vip') {  ?>

                            Годовой пакет:   <span class="packageValue packageValue--orange"> VIP </span>
                        <?php } else { ?>

                        <?php } ?>
                    <?php } ?>
                    <span class="chooseAnother"><a href='/'>Выбрать другой пакет</a></span>
                </div>
                <div class="cartContentCard">
                    <img src="img/newcarta.png" />
                </div>
                <div class="cartItogo">

                    <!--Итого: <span class="itogoPrice itogoPrice--green"> 99 <small>грн</small> </span>-->

                    <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0 ) { ?>
                        <?php if($_SESSION['cart'][0]['item'] == 'econom') { ?>
                            Итого: <span class="itogoPrice itogoPrice--green"> <?php echo $_SESSION['cart'][0]['total']; ?> <small>грн</small> </span>
                        <?php } else if($_SESSION['cart'][0]['item'] == 'comfort') {  ?>

                            Итого: <span class="itogoPrice itogoPrice--yellow"> <?php echo $_SESSION['cart'][0]['total']; ?> <small>грн</small> </span>
                        <?php } else if($_SESSION['cart'][0]['item'] == 'vip') {  ?>

                            Итого: <span class="itogoPrice itogoPrice--orange"> <?php echo $_SESSION['cart'][0]['total']; ?> <small>грн</small> </span>
                        <?php } else { ?>

                        <?php } ?>
                    <?php } ?>


                </div>
            </div>
            <div class="cartContentRight">
                <div class="ccu cartContentUser">
                    <div class="ccuH">Персональные данные</div>
                    <div class="ccuC">
                        <label class="ccuCL">
                            <span class="ccuCS ccuC--inline">Ваше полное Имя</span>
                            <span class="errorSpanClass">Это поле обязательное</span>
                            <input type="text" class="ccuCI" id="name" />
                        </label>
                        <label class="ccuCL">
                            <span class="ccuCS ccuC--inline">телефон*</span>
                            <span class="errorSpanClass">Это поле обязательное</span>
                            <input type="text" class="ccuCI" id="phone" />
                        </label>
                        <label class="ccuCL">
                            <span class="ccuCS ccuC--inline">E-mail</span>
                            <span class="errorSpanClass">Это поле обязательное</span>
                            <input type="text" class="ccuCI" id="email" />
                        </label>
                    </div>
                </div>
                <div class="ccu ccu2 cartContentUser">
                    <div class="ccuH">Доставка</div>
                    <div class="ccuC">
                        <label class="ccuCL">
                            <span class="ccuCS ccuC--inline">Город</span>
                            <span class="errorSpanClass">Это поле обязательное</span>
                            <input type="text" class="ccuCI" id="gorod" />
                        </label>
                        <label class="ccuCL">
                            <span class="ccuCS ccuC--inline">Улица</span>
                            <span class="errorSpanClass">Это поле обязательное</span>
                            <input type="text" class="ccuCI" id="street" />
                        </label>
                        <div class="ccuHalf">
                            <label class="ccuCL ccuCL--l1">
                                <span class="ccuCS ccuC--inline">Дом</span>
                                <span class="errorSpanClass">Это поле обязательное</span>
                                <input type="text" class="ccuCI" id="dom" />
                            </label>
                            <label class="ccuCL ccuCL--l1 ccuCL--ll">
                                <span class="ccuCS ccuC--inline">Квартира</span>
                                <input type="text" class="ccuCI" id="flat" />
                            </label>
                        </div>
                    </div>
                </div>

                <div class="ccu cartContentUser">
                    <div class="ccuH">Оплата</div>
                    <div class="ccuC">
                        <label class="ccuCL ">
                            <span class="ccuCS">Выберите способ оплаты</span>
                            <select class="ccuCSS" id="payment">
                                <option value="1">Наличными</option>
                                <option value="2">Картой онлайн</option>
                            </select>
                        </label>

                        <label class="ccuCL ccuCL--abs" >
                            <span class="ccuCS">Комментарии к заказу</span>
                            <textarea class="ccuCT" id="comment"></textarea>
                        </label>

                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="agreement">
    <div class="container">
        <input type="checkbox" name="agree" class="agreeCheck" id="agreed" />
        <span>Я подтверждаю заказ и согласен с условиями <a href="/page/offer" target="_blank">Публичной оферты</a></span>
    </div>
</div>

<div class="buyButton">
    <a href="javascript:;" class="grbg" id="buyCard">Купить</a>
    <div class="hiddenLiqPay" style="display:none"><?php echo $html; ?></div>
</div>

<?php  Page::render('layouts/footer');?>