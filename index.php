<?php

include 'database.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Php Ajax Dischi</title>
  </head>
  <body>
    <header>
      <img src="./img/1.png" alt="Logo" class="mx-2 my-1" />
    </header>
    <main>
      <div class="wrapper">
        <div class="container pt-3">
          <div class="row row-cols-5">
              <?php foreach($dischi as $disco){ ?>
                <div class="col">
                    <div class="card text-center my-2">
                    <img src="<?php echo $disco["poster"]; ?>" class="card-img-top img-fluid my-4" alt="<?php echo $disco["author"]; ?>" />
                    <div class="main-text-container">
                        <h4><?php echo $disco["title"]; ?></h4>
                        <p><?php echo $disco["author"]; ?><br /><?php echo $disco["year"]; ?></p>
                    </div>
                    <p class="fancy-text"><?php echo $disco["genre"]; ?></p>
                </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </main>
    <script src="script/script.js"></script>
  </body>
</html>
