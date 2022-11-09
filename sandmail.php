<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-xxl">
              <a class="navbar-brand" href="/index.php">Вернуться назад</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            </div>
          </nav>
    </header>
</body>
</html>

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
        echo 'Заявка не сформирована';
    }
?>

