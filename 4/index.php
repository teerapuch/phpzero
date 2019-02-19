<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Array</title>
    </head>
    <body>
        <h1>Array</h1>
        <?php
            $lang = ["PHP","JavaScript","Ruby"];
            $car = array("Toyota","Honda","Nissan","ISUZU");
            array_push($lang,"Go");
            $all = array_merge($lang, $car);
            unset($all[0]);
            print_r($all);
            //echo count($lang);
            //echo $car[3];
            //print_r($lang);
            // var_dump($lang);
        ?>
    </body>
</html>
