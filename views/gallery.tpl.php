<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/main.css" />
    <title><?php echo $pageData['title']; ?></title>
</head>

<body>
    <header class="header">
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-list__item"><a href="/cabinet/products">Таблица 2</a></li>
                <li class="nav-list__item"><a href="/cabinet/gallery">Галерея</a></li>
                <li class="nav-list__item"><a href="/cabinet/logout">Выйти</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="title">
            <h2>Галерея</h2>
        </div>
        <div class="gallery">
            <a data-fslightbox="gallery1" href="/public/images/1.jpg">
                <img src="/public/images/1.jpg" alt="photo">
            </a>
            <a data-fslightbox="gallery1" href="/public/images/2.jpg">
                <img src="/public/images/2.jpg" alt="photo">
            </a>
            <a data-fslightbox="gallery1" href="/public/images/3.jpg">
                <img src="/public/images/3.jpg" alt="photo">
            </a>
            <a data-fslightbox="gallery1" href="/public/images/4.jpg">
                <img src="/public/images/4.jpg" alt="photo">
            </a>
        </div>
    </div>

    <script src="/public/js/fslightbox.js"></script>
</body>

</html>