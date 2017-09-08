<?php Page::render('layouts/header'); ?>

<div class="reviews">
    <div class="container">
        <div class="block__header">
            <i class="borderBo borderBo2 borderBo3"></i>
            <div class="block__innerText">
                <span class="block__headerRow2 cartorder">Отзывы</span>
            </div>
        </div>
        <div class="revContainer">

            <?php $i = 1; ?>
            <?php foreach($reviews as $review) { ?>
                <?php if(($i==1) || ($i%2) == 1) { $class = 'revOne--left'; } else { $class = 'revOne--right';  } ?>
                <div class="revOne <?php echo $class; ?>">
                    <div class="revOne__image">
                        <img src="/template/img/usericon.png" />
                    </div>
                    <div class="revOne__text">
                        <div class="revOne__textTop">
                            <span class="revOne__textTop"><?=$review['name']; ?>, <?=$review['car']; ?></span>
                            <?= Reviews::formRate($review['rate']); ?>
                        </div>
                        <div class="revOne__textBot">
                            <div class="revOne__reviewText"><?=$review['review']; ?></div>
                            <div class="revOne__textDate"><?= Reviews::formatDate($review['date']); ?></div>
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>




        </div>

            <div class="pagination">

                 <?=$pagination   ?>

                </ul>
            </div>



        <div class="whiteReview">
            <div class="block__header">
                <i class="borderBo borderBo2 borderBo3"></i>
                <div class="block__innerText">
                    <span class="block__headerRow2 cartorder">Оставить отзыв</span>
                </div>
            </div>

            <div class="whiteReview__container">
                <div class="wrLeft">
                    <label class="ccuCL ccuCLRe">
                        <span class="ccuCS">Имя</span>
                        <span class="errorSpanClass2">Это поле обязательное</span>
                        <input type="text" class="ccuCI" id="r_name">
                    </label>
                    <label class="ccuCL ccuCLRe">
                        <span class="ccuCS">Какой у Вас автомобиль?</span>
                        <span class="errorSpanClass2">Это поле обязательное</span>
                        <input type="text" class="ccuCI" id="r_car">
                    </label>
                    <label class="ccuCL ccuCLRe">
                        <span class="ccuCS">Адрес электронной почты</span>
                        <span class="errorSpanClass2">Это поле обязательное</span>
                        <input type="text" class="ccuCI" id="r_email">
                    </label>

                    <div class="ccCap ccuCLRe">
                        <span class="errorSpanClass2 esc3">Это поле обязательное</span>
                        <input class="capInput" type="text" id="r_captcha" />
                        <?='<img src="' . $_SESSION['captcha']['image_src'] . '" alt="CAPTCHA" />'; ?>
                    </div>
                </div>

                <div class="wrRight ccuCLRe ">
                    <div class="rw__rating">
                        <div class="r_title">Рейтинг:</div>
                        <a href="javascript:;"><i class="star star1" data-rate="1"></i></a>
                        <a href="javascript:;"><i class="star star2" data-rate="2"></i></a>
                        <a href="javascript:;"><i class="star star3" data-rate="3"></i></a>
                        <a href="javascript:;"><i class="star star4" data-rate="4"></i></a>
                        <a href="javascript:;"><i class="star star5 checked" data-rate="5"></i></a>
                    </div>
                    <span class="errorSpanClass2">Это поле обязательное</span>
                    <textarea class="rw__textarea" id="r_review"></textarea>
                    <a href="javascript:;" class="bluebutton lr" id="leftReview">оставить отзыв</a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>


    </div>
</div>
<?php  Page::render('layouts/footer');?>