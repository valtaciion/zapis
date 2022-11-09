<?php
    if($_POST['subject'] ==1){
        $subject = 'Серый британец';
    }
    elseif($_POST['subject'] ==2){
        $subject = 'Английский бульдог';
    }
    elseif($_POST['subject'] ==3){
        $subject = 'Полосатый европеец';
    }
    elseif($_POST['subject'] ==4){
        $subject = 'Попугай ара';
    }

    function is_valid_domain_name($domain_name)
    {
        return (preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $domain_name) //valid chars check
                && preg_match("/^.{1,253}$/", $domain_name) //overall length check
                && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $domain_name)   ); //length of each label
    }

    $to = "sharypov17@icloud.com";
    $from = trim($_POST['email']);

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);

    $headers = "From: $from" . "\r\n" . 
    "Reply-To: $from" . "\r\n" . 
    "X-Mailer: PHP/" . phpversion();

    if(mail($to, $subject, $message, $headers)) {
        echo 'Заявка сформирована';
    }
    else {
        echo 'Заявка сформирована';
    }
?>    