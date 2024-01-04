<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $myIntArray = array(1,2,3,4,5,6,7,8,9,0);
        echo "<pre>";//formatted array
        print_r($myIntArray);//multidimension array
        // echo $myIntArray[4]."<br>";//index array

        $myStrArr = array("a","b","c","d","e");
        echo ("<pre>");// pre 'for formatted array
        print_r($myStrArr);
        // echo $myStrArr[0];
        print_r($myStrArr[4]);
    ?>
</body>
</html>