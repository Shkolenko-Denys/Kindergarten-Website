<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Замовлення дзвінку</title>
    <link rel="stylesheet" href="../resources/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../resources/css/callback.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
</head>

<body>

<div class="container">
    <div class="content">
        <div class="callback-text">
            Дякуємо, {{$obj->getName()}}! Ми Вам зателефонуємо за номером {{$obj->getPhoneNumber()}} найближчим часом!
        </div>
    </div>
</div>

</body>
</html>
