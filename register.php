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
    <section>
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <form action="sandmail.php" method="POST">
        <select name="subject">
            <option disabled selected>Кого планируем посмотреть?</option>
            <option value="">Серый британец</option>
            <option value="">Английский бульдог</option>
            <option value="">Полосатый европеец</option>
            <option value="">Попугай ара</option>
        </select>
        <input type="email" name="email" placeholder="Введите вашу почту" maxlenght="50" required>
        <textarea name="message" placeholder="Желаемая дата"
        maxlenght="150" required></textarea>
        <input type="submit" value="Отправить заявку">
    </form>
                </div>
            </div>
        </div>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>