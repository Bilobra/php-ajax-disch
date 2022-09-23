<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>php-ajax-dischi</title>
  </head>
  <body>
   <?php
    include __DIR__ . '/db.php';
    $dischi = $dischi['response'];

   ?>
   
    <header class="d-flex gap-5">

        <figure class="d-flex align-items-center m-0 ps-2">
            <img src="./img/logo-small.svg" alt="logo spotify">

        </figure>

    </header>
    
    <main>

        <div class="container py-5 px-auto">
                
                <div class="row row-cols-2 row-cols-lg-5  gy-1">
                    <?php
                    foreach($dischi as $disk){
    
                    ?>
    
                    <div class="col p-2">
                        <div class="card align-items-center gap-3 py-3 text-center card_bg" >
                            <img src="<?= $disk['poster']?>" class="card-img-top card_img" alt="">
                            <div class="card-body text-white">
                                <h5 class="card-title title"><?= $disk['title']?></h5>
                                <p class="card-text author"><?= $disk['author']?></p>
                                <p class="card-text year"><?= $disk['year']?></p>
    
    
                            </div>
                        </div>
                    </div>
    
                    <?php
                    }
                    ?>
                </div>
        </div>
    </main>
    




    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>