<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning Hub</title>
</head>
<body>
    <h1>Welcome To PHP</h1>
<?php 
/* Introduce Of Php */
$name = "Shahid"; //this is string variable
$signal = "It's a signal";
$int = 30;//this is int or number variable
$flot = 30.2;//this is float variable
$full_array = array("Apple","Banana","plum");//this is array
$null = null;
$is_happy = true;


echo "My name Is ".$name."<br>";/*use concatination and echo print or showing data */
print "This is ".$name."<br>";

// chack type in php
// var_dump($name);
// var_dump($signal);
// var_dump($int);
// var_dump($flot);
// var_dump($full_array);

/*OPP (object oreanted programming) its like a case*/ 

class Phone {
    var $model;

    function phoneModel($model_number){
        $this->model = $model_number;

        echo "My New phone is: " . $this->model . "<br>";
    }
}

$apple = new Phone;
$apple->phoneModel("Iphone 16 pro max");

$sumsang = new Phone;
$sumsang->phoneModel("s25 ultra");

echo strlen("I love My Country");
echo str_word_count("I love My Country");
echo strrev("I love My Country");

?>
</body>
</html>