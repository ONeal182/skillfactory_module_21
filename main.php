<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>






    <?php include 'menu.inc.php' ?>

    <div class="conteiner">
        <div class="row about_me d-flex align-items-center justify-content-center">

            <h1> <?php echo $p ?> </h1>

            <div class="data col-8 ">
                <div class="myImg">
                    <?php echo '<img src="/img/php.jpg">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                        <?php echo $name, ' ', $surname . '<br>';
                        echo 'город', ' ', $city; ?>
                    </p>

                    <p> Мне
                        <?php echo $age; ?>
                        лет </p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>

            <div class="knowledge">

                <?php include 'knowledge.inc.php'; ?>
                <?php echo $a, ' ', $b, ' ', $c; ?> <br>

                <?php
                $a = 10;
                $b = 20;
                $c = $a + $b;
                echo $c;
                ?> <br>
                <?php
                echo $d;
                ?>

            </div>

            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias!
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>
    </div>


    <?php include 'footer.inc.php' ?>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>