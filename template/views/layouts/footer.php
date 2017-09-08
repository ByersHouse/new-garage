<footer>
    <div class="container">
        <div class="footer__phone">
            <div class="header__phoneSpan header__phoneSpan--footer">0 800 754 888</div>
            <div class="header__phoneText header__phoneText--footer">По Украине бесплатно со всех телефонов</div>
        </div>
        <div class="footer__menus">
            <div class="footer__menu">
                <ul class="footer__menuUl">
                    <li class="footer__menuLi"><a href="/page/shipping-details" class="footer__menuLink">Оплата и доставка</a></li>
                    <li class="footer__menuLi"><a href="/page/contacts" class="footer__menuLink">Контакты</a></li>
                    <li class="footer__menuLi"><a href="/reviews" class="footer__menuLink">Отзывы</a></li>
                    <li class="footer__menuLi"><a href="/page/faq" class="footer__menuLink">FAQ</a></li>
                </ul>
            </div>
            <div class="footer__menu footer__menu--last">
                <ul class="footer__menuUl">
                    <li class="footer__menuLi"><a href="#" class="footer__menuLink">Личный кабинет</a></li>
                    <li class="footer__menuLi"><a href="http://company-bh.com/" target="_blank" class="footer__menuLink">Дом покупателя</a></li>
                    <li class="footer__menuLi"><a href="/page/rates" class="footer__menuLink">Тарифы</a></li>
                    <li class="footer__menuLi"><a href="/page/offer" class="footer__menuLink">Публичная оферта</a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="footer__icons">
            <a href="https://www.facebook.com/AutoassistanceOdessa" target="_blank" class="footer__iconsLink"><i class="icon--fb"></i></a>
            <a href="https://www.instagram.com/garage_bh" target="_blank" class="footer__iconsLink"><i class="icon--in"></i></a>
            <a href="https://vk.com/garage_bh" target="_blank" class="footer__iconsLink"><i class="icon--vk "></i></a>
            <a href="javascript:;" class="footer__iconsLink footer__iconsLink--last"><i class="icon--yt "></i></a>
        </div>
        <div class="clearfix"></div>

        <!-- modal1 -->
        <div class="" id="callme-modal" style="display: none;">
            <div class="">
                <span class="close-modal2" id="close-modal-cb2"><a href="javascript:;" rel="modal:close">×</a></span><div id="modal-message22">
                    <h4 class="zoz zoz-blue">Заказ обратного звонка</h4>
                    <input type="hidden" name="action" value="callback">
                    <input type="hidden" name="section" value="index">
                    <div class="row" style="color: #3c68a4;font-size: 21px;text-align: center;padding-bottom: 20px;">
                        <div class="c">
                            <label>
                                <input id="callback-phone" type="text" name="phone" class="mfor" placeholder="Введите Ваш номер телефона" required="" title="067-111-22-33" pattern="0[0-9]{2}[-]{0,1}[0-9]{3}[-]{0,1}[0-9]{2}[-]{0,1}[0-9]{2}" value="+380"></label>
                        </div>
                        <div class="c cc-cc">
                            <label>
                                <a href="javascript:;" class="bluebutton" id="callmeSubmit">Позвоните мне</a></label></div></div></div></div>
        </div>
        <!-- modal1 -->

        <!-- modal2 -->
        <div class="" id="mbcd" style="display: none;">
            <div class="">
                <span class="close-modal2" id="close-modal-cb2"><a href="javascript:;" rel="modal:close">×</a></span>
                <div id="modal-message">
                    <h4 class="zoz zoz-blue">Ваш запрос отправлен</h4>
                    <p class="zoz-blueB">Мы свяжемся с Вами в ближайшее время. Спасибо за обращение!</p>
                </div>

            </div>
        </div>
        <!-- modal2 -->

        <!-- modal2 -->
        <div class="" id="successModal" style="display: none;">
            <div class="">
                <span class="close-modal2" id="close-modal-cb4"><a href="javascript:;" rel="modal:close">×</a></span>
                <div id="modal-message">
                    <h4 class="zoz zoz-blue">Ваш заказ принят</h4>
                    <p class="zoz-blueB">Мы свяжемся с Вами в ближайшее время. Спасибо за покупку!</p>
                    <div class="c cc-cc">
                        <label>
                            <a href="/" class="bluebutton" >ОК</a></label></div>
                </div>

            </div>
        </div>
        <!-- modal2 -->

        <!-- modal2 -->
        <div class="" id="successModal4" style="display: none;">
            <div class="">
                <span class="close-modal2" id="close-modal-cb4"><a href="javascript:;" rel="modal:close">×</a></span>
                <div id="modal-message">
                    <h4 class="zoz zoz-blue">СПАСИБО ЗА ОТЗЫВ</h4>
                    <p class="zoz-blueB">После проверки администрацией Ваш отзыв появится на сайте.</p>
                    <div class="c cc-cc">
                        <label>
                            <a href="/reviews/" class="bluebutton" >ОК</a></label></div>
                </div>

            </div>
        </div>
        <!-- modal2 -->



        <!-- modal3 -->
        <div  id="callme-modal2" style="display: none;">
            <div class="">
                <span class="close-modal2" id="close-modal-cb2"><a href="javascript:;" rel="modal:close">×</a></span><div id="modal-message2">
                    <h4 class="zoz">Пакет добавлен в корзину</h4>
                    <p class="pp40"><a href="/cart/order" class="bluebutton">Оформить заказ</a></p>
                </div></div>
        </div>
        <!-- modal3 -->


    </div>

    <div class="pulse-button" id="callme"><a href="javascript:;"  data-modal="#callme-modal" onclick="" class='fbx'><img src="/template/img/phone-call.png" width="32" height="32" alt="Перезвоните мне"></a></div>
    <div class="footer__bottom"></div>

</footer>
</div>

<?= Config::loadJs() ?>
<?=Storage::get('map') ?>


</body>
</html>