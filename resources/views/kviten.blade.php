<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Квітень Алла Вікторівна</title>
    <link rel="stylesheet" href="../resources/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../resources/css/informative.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
</head>

<body>

<div class="background">
    <div class="background-img"><img src="../resources/img/container/header-background.svg" alt="background"></div>
</div>

<div class="container">

    <div class="content">

        <div class="header">
            <div class="logo"><a href="welcome"><img src="../resources/img/common/logo.svg" alt="logo"></a></div>
            <div class="address">Васильків, вул. Щаслива 3-в</div>
            <div class="phone-number">
                <div class="icon"><img src="../resources/img/common/phone-icon.svg" alt="phone"></div>
                <div class="number">0 800 12 34 56</div>
            </div>
        </div>

        <div class="educator-topic">Квітень Алла Вікторівна</div>

        <div class="portfolio">
            <div class="image">
                <img src="../resources/img/container/kviten.png" alt="kviten-photo">
            </div>
            <div class="text">
                <p>Вік: 26 років</p>
                <p>Освіта: НПУ імені М.П. Драгоманова</p>
                <p>Досвід: 8 років з дітьми від 3-х до 6-ти років</p>
                <p>- Звання кращого вихователя України 2018</p>
                <p>- Переможеця конкурсу “Я люблю дітей”</p>
                <p>Знання іноземних мов: англійська, німецька</p>
            </div>
        </div>

        <div class="feedbacks-topic">Відгуки</div>

        <div class="feedback-images">
            <div class="image"><img src="../resources/img/informative/feedback-1.png" alt="screenshot"></div>
            <div class="image"><img src="../resources/img/informative/feedback-4.png" alt="screenshot"></div>
            <div class="image"><img src="../resources/img/informative/feedback-3.png" alt="screenshot"></div>
            <div class="image"><img src="../resources/img/informative/feedback-2.png" alt="screenshot"></div>
        </div>

        <div id="call-form">
            <img src="../resources/img/common/rectangle.svg" alt="call form">
            <div class="topic">Замовте зворотній дзвінок. Забронюйте екскурсію садочком.</div>
            <form action="callback" method="POST">
                @csrf
                <input class="name-form" type="text" name="name" placeholder="Ім'я">
                <input class="phone-number-form" type="text" name="phone_number" placeholder="Номер телефону">
                <input class="main-btn" type="submit" value="Забронювати">
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <div class="content">
        <div class="background">
            <img src="../resources/img/common/footer-background.svg" alt="footer-background">
        </div>

        <div class="container">
            <div class="text">
                Розпорядження №950 від 28.05.2020 на право провадження освітньої діяльності у сфері дошкільної освіти.
            </div>
            <div class="description">
                При заповненні форми реєстрації ви надаєте дозвіл на збір та обробку персональних даних. Щастя бере на себе забов’язання не передавати дані третім особам і використовувати їх виключно для інформування та власної комунікації.
            </div>
        </div>
    </div>
</div>
</body>
</html>
