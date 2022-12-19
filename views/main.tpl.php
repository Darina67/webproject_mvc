<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/public/css/main.css" />
  <title><?php echo $pageData['title']; ?></title>
</head>

<body>
  <main class="main">
    <div class="container">
      <section class="section authorization">
        <form method="post" class="signin-form">
          <h2 class="login-form__title">Ааторизация</h2>
          <div class="login-form__item">
            <input type="email" placeholder="Ваш Email" name="login" id="login">
          </div>
          <div class="login-form__item">
            <input type="password" placeholder="Ваш пароль" name="password" id="password">
          </div>
          <div class="login-form__item">
            <button class="form-btn" type="submit">Войти</button>
          </div>
          <?php if (!empty($pageData['error'])) : ?>
            <p> <?php echo $pageData['error']; ?> </p>
          <?php endif ?>
        </form>
      </section>
    </div>
  </main>
  <script src="/public/js/app.js"></script>
</body>

</html>