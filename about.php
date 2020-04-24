<!doctype html>
<html lang="ru">
  <head>
  <?php require "blocks/head.php" ?>

    <title>Обратная связь - Помощь в ГИБДД , ГАИ , МРЭО - Санкт-Петербург</title>
  </head>
  <body>
  <?php require "blocks/header.php" ?> 
    <section class="idpromo"> 
        <h4 class="idpromo_header">Для того , чтобы связаться с нами или сделать заказ заполните все формы или сделайте звонок .</h4>
    </section>   

    <section>
      <div class="container">
              <form action="submit.php" method="POST">
                <input name="email" placeholder="Email">
                <input name="name" placeholder="Имя">
                <input name="phone" placeholder="Телефон">
                <textarea name="message" placeholder="Сообщение"></textarea>
                <input type="submit" value="Отправить сообщение">
              </form>
      </div>
    </section>
    <br>
    <br>
  
    <?php require "blocks/footer.php" ?> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>