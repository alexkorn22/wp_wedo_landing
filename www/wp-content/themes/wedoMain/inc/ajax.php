<?php
add_action( 'wp_ajax_sendAlert', 'sendAlert' ); // wp_ajax_{ЗНАЧЕНИЕ ПАРАМЕТРА ACTION!!}
add_action( 'wp_ajax_sendAlert', 'sendAlert' );  // wp_ajax_nopriv_{ЗНАЧЕНИЕ ACTION!!}
// первый хук для авторизованных, второй для не авторизованных пользователей

function sendAlert(){
    if (!isset($_POST['type'])) {
        die;
    }
    $type = $_POST['type'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $message = '';
    if ($type == 'freeConsultation') {
        if (!isset($_POST['select'])) {
            die();
        }
        $message = '<b>Обратная связь с wedo.com.ua </b>'. "\n";
        $message .= '<b>Имя: </b>'.$username. "\n";
        $message .= '<b>Телефон: </b>'.$phone . "\n";
        $message .= '<b>Вопрос: </b>'.$_POST['select'] . "\n";
    }
    //  отправка
    $tg = new Telegram( App::$app->adminParams->tgChatId, App::$app->adminParams->botToken);
    $tg->sendMessage($message);

    sendMaiAlert('Обратная связь с сайта WeDo',$message);

}

function sendMaiAlert($subject,$msg) {

    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        '.$msg .'
                    </body>
                </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $send = mail(App::$app->adminParams->mailAlerts, $subject, $message, $headers);
    return $send;
}

