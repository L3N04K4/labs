<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Yakusheva</title>
    <style type="text/css">
        div{
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="header">
            <img src="https://public.superjob.ru/spreaded/images/rtb_pictures/30/029/default.image.2930.51a3030ed71faa28b7cae807e63dd011.png" alt="poly" width="150px">
        </div>
      </header>
      <main>
<div class="container">
<div class="row">
<div class="col-md-4"> </div>
<div class="col-md-4"> Форма обратной связи
   <form action="index2.php" method="post">
<div class="form-group">
   <label for="name">Имя пользователя:</label>
   <input type="name" name="name" class="form-control" id="name" placeholder="Username">
</div>
<div class="form-group">
   <label for="email1">E-mail:</label>
   <input type="email" name="email" class="form-control" id="email1" placeholder="Email">
</div>
<div class="form-group">
   <label for="select">Тип обращения:</label>
   <select name="select" id="select">
    <option selected value="zhaloba">Жалоба</option>
    <option value="predlozhenie">Предложение</option>
    <option value="blagodarnost">Благодарность</option>
   </select>
</div>
<div class="form-group">
   <label for="message">Сообщение:</label>
   <textarea class="form-control" name="message" rows="3"></textarea>
</div>
<div class="form-group">
    <label for="answer">Ответ:</label>
    <div>
        <input type="checkbox" id="sms" name="answer" value="sms" />
        <label for="sms">SMS</label>
      </div>
      <div>
        <input type="checkbox" id="emaill" name="answer" value="emaill" />
        <label for="music">Email</label>
      </div>
 </div>
   <button type="submit" class="btn btn-info">Отправить сообщение</button>
   <a href="../lab2/index2.html">Вторая страница</a>
</form>
</div>
<div class="col-md-4"> </div> </div>
</div>
</main>
<footer>
    <center>
    <h3>«Feedback form»</h2>
    </center>
  </footer>
</body>
</html>