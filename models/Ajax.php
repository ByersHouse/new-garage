<?php

class Ajax extends Model
{


    public function Ajax()
    {
        parent::__construct();
        include_once ROOT . "/template/libs/captcha/simple-php-captcha.php";

        #Captcha---------------------------------

        if (isset($_POST['checkCap'])) {
            if ($_SESSION['captcha']['code'] == $_POST['checkCap']) {
                echo 'correct';
                exit;
            } else {
                echo $_SESSION['captcha']['code'] . '<br>';
                echo $_POST['checkCap'];
            }
        }

        if (isset($_POST['updateCap'])) {

            $_SESSION['captcha'] = simple_php_captcha();
            echo $_SESSION['captcha']['image_src'];
        }
        #-------------/Captcha---------------------------------
        #-------------Review-----------------------------------

        if (isset($_POST['makeReview'])) {
            $name = $_POST['name'];
            $car = $_POST['car'];
            $email = $_POST['email'];
            $rate = $_POST['rate'];
            $comment = $_POST['comment'];
            $dater = date("Y-m-d H:i:s");

            $q = 'INSERT INTO reviews SET name = ?, car = ?, email = ?, rate = ?, review = ?, status = ?, `date` = ?';
            $qr = $this->db;
            $qr = $qr->prepare($q);
            $qr->execute([$name, $car, $email, $rate, $comment, 0, $dater]);

            echo 'success';
            exit;
        }

        #-------------/Review-----------------------------------
        #-------------Package-----------------------------------
        if (isset($_POST['package'])) {

            unset($_SESSION['cart']);
            $cart = [];


            if ($_POST['package'] == 'econom') {
                $price = 99;
            } else
                if ($_POST['package'] == 'comfort') {
                    $price = 550;
                } else
                    if ($_POST['package'] == 'vip') {
                        $price = 9988;
                    } else {
                        $price = 'fail';

                        echo "error";
                        exit;
                    }

            $package = $_POST['package'];
            $total = $price;

            $cart[] = ['item' => $package, 'total' => $total];

            $_SESSION['cart'] = $cart;

            echo '<a href="/cart/order" class="header__cartLink"><i class="icon icon--cart"></i><span class="cartdivider"></span><span class="cartcount">' . count($_SESSION['cart']) . '</span><span class="hiddenText">Оформить заказ</span></a>';
            exit;
        }
        #-------------/Package-----------------------------------

        if (isset($_POST['payCash'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            $city = $_POST['city'];
            $street = $_POST['street'];
            $dom = $_POST['dom'];
            $flat = $_POST['flat'];

            $comment = $_POST['comment'];

            $body = "<b>МЕТОД ОПЛАТЫ: НАЛИЧНЫМИ ПРИ ПОЛУЧЕНИИ</b><br>";
            $body .= "<b>Полное имя: </b>" . $name . "<br>";
            $body .= "<b>Телефон: </b>" . $phone . "<br>";
            $body .= "<b>Email: </b>" . $email . "<br>";

            if ($city) {
                $body .= "<b>Город: </b>" . $city . "<br>";
            }

            if ($street) {
                $body .= "<b>Улица: </b>" . $street . "<br>";
            }

            if ($dom) {
                $body .= "<b>Дом: </b>" . $dom . "<br>";
            }

            if ($flat) {
                $body .= "<b>Квартира: </b>" . $flat . "<br>";
            }

            if ($comment) {
                $body .= "<b>Комментарий: </b>" . $comment . "<br>";
            }



            $mail = new PHPMailer;
            $mail->CharSet = "UTF-8";


            $mail->setFrom('info@sitecare.vn.ua', 'Demo');
            $mail->addAddress('zadrotello@gmail.com');     // Add a recipient
            $mail->addAddress('bhcompanyua@gmail.com');

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Новый заказ - ПАКЕТ ' . strtoupper($_SESSION['cart'][0]['item']);
            $mail->Body = $body;
            $mail->AltBody = '';

            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {

                $mail2 = new PHPMailer;
                $mail2->CharSet = "UTF-8";
                $mail2->setFrom('info@sitecare.vn.ua', 'Demo');
                $mail2->addAddress($email);

                $mail2->isHTML(true);                                  // Set email format to HTML

                $mail2->Subject = 'Вы заказали ПАКЕТ ' . strtoupper($_SESSION['cart'][0]['item']);
                $mail2->Body = 'Ваш заказ принят. Ожидайте звонка нашего менеджера';
                $mail2->AltBody = 'Ваш заказ принят. Ожидайте звонка нашего менеджера';
                $mail2->send();
                echo 'success';
                exit;
            }


        }


        if (isset($_POST['payCard'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];

            $city = $_POST['city'];
            $street = $_POST['street'];
            $dom = $_POST['dom'];
            $flat = $_POST['flat'];
            $comment = $_POST['comment'];


            $body = "<b>МЕТОД ОПЛАТЫ: НА КАРТУ</b> <br>";

            $body .= "<b>Полное имя: </b>" . $name . "<br>";
            $body .= "<b>Телефон: </b>" . $phone . "<br>";
            $body .= "<b>Email: </b>" . $email . "<br>";

            if ($city) {
                $body .= "<b>Город: </b>" . $city . "<br>";
            }

            if ($street) {
                $body .= "<b>Улица: </b>" . $street . "<br>";
            }

            if ($dom) {
                $body .= "<b>Дом: </b>" . $dom . "<br>";
            }

            if ($flat) {
                $body .= "<b>Квартира: </b>" . $flat . "<br>";
            }

            if ($comment) {
                $body .= "<b>Комментарий: </b>" . $comment . "<br>";
            }



            $mail = new PHPMailer;
            $mail->CharSet = "UTF-8";


            $mail->setFrom('info@sitecare.vn.ua', 'Demo');
            $mail->addAddress('zadrotello@gmail.com');     // Add a recipient
            $mail->addAddress('bhcompanyua@gmail.com');

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Новый заказ #' . $_SESSION['order_id'] . ' - ПАКЕТ ' . strtoupper($_SESSION['cart'][0]['item']);
            $mail->Body = $body;
            $mail->AltBody = '';

            if (!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {

                $mail2 = new PHPMailer;
                $mail2->CharSet = "UTF-8";
                $mail2->setFrom('info@sitecare.vn.ua', 'Demo');
                $mail2->addAddress($email);

                $mail2->isHTML(true);                                  // Set email format to HTML

                $mail2->Subject = 'Вы заказали ПАКЕТ ' . strtoupper($_SESSION['cart'][0]['item']);
                $mail2->Body = 'Ваш заказ принят. Ожидайте звонка нашего менеджера';
                $mail2->AltBody = 'Ваш заказ принят. Ожидайте звонка нашего менеджера';

                $mail2->send();
                echo 'success';
                exit;
            }
        }


        if (isset($_POST['phoneCall'])) {
            $phone = $_POST['phone'];

            if ($phone) {

                $mail = new PHPMailer;
                $mail->CharSet = "UTF-8";


                $mail->setFrom('info@sitecare.vn.ua', 'Demo');
                $mail->addAddress('zadrotello@gmail.com');     // Add a recipient

                $mail->addAddress('bhcompanyua@gmail.com');
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'Заказ обратного звонка';
                $mail->Body = "<b>Позвоните мне на номер:</b>" . $phone;
                $mail->AltBody = "Позвоните мне на номер:" . $phone;

                if (!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'success';
                }
            } else {
                echo 'fail';
            }
        }


        if (isset($_POST['phoneCallBlock'])) {
            $phone = $_POST['phone'];
            if ($phone) {


                $mail = new PHPMailer;
                $mail->CharSet = "UTF-8";


                $mail->setFrom('info@sitecare.vn.ua', 'Demo');
                $mail->addAddress('zadrotello@gmail.com');     // Add a recipient

                $mail->addAddress('bhcompanyua@gmail.com');
                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = 'Заказ обратного звонка';
                $mail->Body = "<b>Позвоните мне на номер:</b>" . $phone;
                $mail->AltBody = "Позвоните мне на номер:" . $phone;

                if (!$mail->send()) {
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                } else {
                    echo 'success';
                }
            } else {
                echo 'fail';
            }
        }





    }
}