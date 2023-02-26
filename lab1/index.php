<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Yakusheva</title>
    <style type="text/css">
        main{
            min-height: 450px;
        }
        .header{
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-around;
        }
        img{
            margin-left: -150px;
        }
    </style>
</head>
<body>
      <header>
        <div class="header">
            <img src="https://public.superjob.ru/spreaded/images/rtb_pictures/30/029/default.image.2930.51a3030ed71faa28b7cae807e63dd011.png" alt="poly" width="150px">
                <h1>Домашняя работа: Hello, World!</h1>
        </div>
      </header>
      <main>
      <table class="table">
  <thead>
    <?php 
    $name = " ";
    
        for ($i=1;  $i<4; $i++){
            $a=rand(1,4);
    if ($a==1){
        $name = "Mark";
        $sname = "Otto";
    }
    if ($a==2){
        $name = "Jacob";
        $sname = "Kinz";
    }
    if ($a==3){
        $name = "Larry";
        $sname = "Donatello";
    }
    if ($a==4){
        $name = "Jack";
        $sname = "Leonardo";
    }
            echo "<tr> <th scope='row'> $i </th>";
            echo "<td> $name </td>";
            echo "<td> $sname </td>";
            echo "<td>@mdo</td>";
            echo "</tr>";
        }
        ?>
        </thread>
</table>
        
      </main>
      <footer>
        <h3>Создать веб-страницу с динамическим контентом. Загрузить код в удаленный репозиторий. Залить на хостинг.</h2>
      </footer>
</body>
</html>