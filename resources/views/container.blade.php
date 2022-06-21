<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Вихователі Щастя</title>
    <link rel="stylesheet" href="../resources/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../resources/css/container.css">
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

        <div class="educators-topic">Вихователі Щастя</div>

        <div class="educators">
            <div class="prokopenko">
                <img src="../resources/img/container/prokopenko.png" alt="educator-photo">
                <div class="name">Прокопенко Анна Андріївна</div>
                <div class="description">Досвід: 8 років. Кращий вихователь України - 2018. Переможеця міського конкурсу “Я люблю дітей”</div>
                <a href="prokopenko"><div class="read-more">Читати далі >></div></a>
            </div>
            <div class="melnyk">
                <img src="../resources/img/container/melnyk.png" alt="educator-photo">
                <div class="name">Мельник Яна Миколаївна</div>
                <div class="description">Досвід: 8 років. Кращий вихователь України - 2018. Переможеця міського конкурсу “Я люблю дітей”</div>
                <a href="melnyk"><div class="read-more">Читати далі >></div></a>
            </div>
            <div class="shpuryk">
                <img src="../resources/img/container/shpuryk.png" alt="educator-photo">
                <div class="name">Шпурик Вероніка Ігорівна</div>
                <div class="description">Досвід: 8 років. Кращий вихователь України - 2018. Переможеця міського конкурсу “Я люблю дітей”</div>
                <a href="shpuryk"><div class="read-more">Читати далі >></div></a>
            </div>
            <div class="protsenko">
                <img src="../resources/img/container/protsenko.png" alt="educator-photo">
                <div class="name">Проценко Кароліна Віталіївна</div>
                <div class="description">Досвід: 8 років. Кращий вихователь України - 2018. Переможеця міського конкурсу “Я люблю дітей”</div>
                <a href="protsenko"><div class="read-more">Читати далі >></div></a>
            </div>
            <div class="kviten">
                <img src="../resources/img/container/kviten.png" alt="educator-photo">
                <div class="name">Квітень Алла Вікторівна</div>
                <div class="description">Досвід: 8 років. Кращий вихователь України - 2018. Переможеця міського конкурсу “Я люблю дітей”</div>
                <a href="kviten"><div class="read-more">Читати далі >></div></a>
            </div>
            <div class="yalovenko">
                <img src="../resources/img/container/yalovenko.png" alt="educator-photo">
                <div class="name">Яловенко Олена Миколаївна</div>
                <div class="description">Досвід: 8 років. Кращий вихователь України - 2018. Переможеця міського конкурсу “Я люблю дітей”</div>
                <a href="yalovenko"><div class="read-more">Читати далі >></div></a>
            </div>
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
