<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style2.css">
    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->

    <title>php-ajax-dischi</title>
  </head>
  <body>
    <?php
        include __DIR__ . '/db.php';
        $dischi = $dischi['response'];

    ?>
        <div id="app">
            <header class="main_header">
                <figure>
                    <img src="./img/logo-small.svg" alt="">
                </figure>
            </header>

            <main>
                <div class="container">
                    <ul class="card_wrapper">

                    <?php

                        foreach($dischi as $disk){
        
                    ?>
                        <li class="card">
                            <figure class="card_img">
                                <img src="<?= $disk['poster']?>" alt="title">
                            </figure>
                            <div class="body_card">
                                <h5><?= $disk['title']?></h5>
                                <p><?= $disk['author']?></p>
                                <p><?= $disk['year']?></p>
                            </div>
                        </li>
                    <?php
                        }
                    ?>
                    </ul>
                </div>
            </main>

        </div>
        
        
  
    




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

   
  </body>
</html>