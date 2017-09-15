<?php
    // Отправка почты с сайта

    $email = "";
    $message = "";

    if (isset($_POST['edtquestion'])) {
        sendmail();
    }

function sendmail()
{
    global $email;
    global $message;

    $name = $_POST['edtname'];
    $email = $_POST['edtemail'];
    $phone = $_POST['edtphone'];
    $quest = $_POST['edtquestion'];

    $message = "<h3>Вопрос с сайта</h3>
               <p>от: <b>".$name."</b></p>
               <p>обратный адрес: <b>".$email."</b></p>
               <p>телефон: <b>".$phone."</b></p>
               <p><b>ВОПРОС:</b></p>
               <p>".$quest."</p>";

    $res = sto_mail(
               "trita@ukr.net",
               "",
               "письмо с сайта",
               $message,
               $email,
               'smtp1');

    // Письмо писателю с сайта
    $message = '<h3>Уважаемый'.$name.'</h3>
                <p>Вы задали вопрос на сайте <b>http://bestroof.kh.ua</b></p>
                <p>В ближайшее время, мы ответим Вам на электронный адрес: <b>'.$email.'</b></p>';

    $res = sto_mail(
               $email,
               "",
               "письмо с сайта",
               $message,
               'bestroof.kh.ua',
               'smtp1');

}


// Функция отправки почты с сайта
function sto_mail($to, $bcc,$subject, $message, $from, $mail_protocol)
{
    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; 
    $headers .= "From: ".$from."\r\n";  
    $add_params = "-f".$from;

    if ($bcc !== '') {$headers .= "Bcc: ".$bcc."\r\n"; };

    if ($mail_protocol !== 'smtp')
    {      
        mail($to, $subject, $message, $headers, $add_params);   
  
        $res = true;
    }
    else
    {
        //http://vk-book.ru/otpravka-pisem-cherez-smtp-s-avtorizaciej-na-php/ 
        $mailSMTP = new SendMailSmtpClass($_SESSION['config']['mail_smtp_mail'], 
                                          $_SESSION['config']['mail_smtp_pass'], 
                                          $_SESSION['config']['mail_smtp_host'], 
                                          $_SESSION['config']['mail_fromsite'], 
                                          $_SESSION['config']['mail_smtp_port']);

        $result = $mailSMTP->send($to, $subject , $message, $headers); // отправляем письмо

        if($result!== true){error_log("Mail not sended. Error: " . $result);};
        $res=$result;
    };
    return $res;
};

?>