<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
    <?php
        

        $myList = array(
            "Darth Vader",
            "Superman",
            "Batman",
            "Nightman",
            "Wonder Woman",
            "Bane",
            "baraka",
            "Raiden",
            "Kotal Khan",
            "Shao Khan"
        );


        function less($numberOne, $numberTwo){
            if ($numberOne < $numberTwo) {
                return $numberOne;
            }            else{
                return $numberTwo;
            }
        }

        function myCoolLoop($start, $stop, $list){

            $calculatedStop = less($stop, count($list));

            for ($i = $start; $i < $calculatedStop ; $i++) { 
                echo $list[$i - 1]."<br>";
            }

        }
        echo "<h1> Hello World </h1>";

        myCoolLoop(3, 8, $myList);

        echo "<br>";

        echo less(2, 1);
     

    ?>
</ul>

</body>
</html>