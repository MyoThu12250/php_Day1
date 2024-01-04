<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Myo Thu Aung<br>";//br for break line
        echo $name;
        echo strlen($name);//length
        var_dump($name)."<br>";//return the value and datatype
        echo phpversion()."<br>"; // Check version
        //create constant
        // define("pi",3.14);
        // echo pi;
        const pi = 3.14;
        echo pi;
        $nameArray= ["a","b","c","d"];
        print (int)$nameArray[0];
        

        function fun(){
            global $name;//for global variable declare
            echo "<br>$name";
            print "<h3>".$name."</h3>";
        }
        fun();
    ?>
</body>
</html>