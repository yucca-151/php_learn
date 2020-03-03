<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $n1 = "";
    $n2 = "";
    if (isset($_POST['submit1'])) {
        $n1 = $_POST['n1'];
        $zh = $_POST['zhuanhuan'];

        if ($zh == "10to2") {
            $n2 = decbin($n1);
        }
        if ($zh == "10to8") {
            $n2 = decoct($n1);
        }
    }
   ?>

    <form action="" method="post">
        <input type="text" name="n1" value="<?php echo $n1;?>">
        <select name="zhuanhuan" id="">
            <option value="10to2" >10to2</option>
            <option value="10to8" selected>10to8</option>
        </select>
        <input type="submit" name="submit1" value="转换">
        <input type="text" name="n2" value="<?php echo $n2; ?>">
    </form>


</body>

</html>