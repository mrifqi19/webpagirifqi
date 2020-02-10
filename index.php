<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<hr>Hello World!<br>";
print "I'm Learning PHP Script Language Now<br><hr>";
?>
<?php
    $a=10;
    $b=5;
    function myTest()
    {
        global $a;
        global $b;
        echo ($b)+($a);
    }
    myTest();
?>
</body>
</html>