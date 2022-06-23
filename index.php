<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anagrama</title>
</head>
<body>
    <form method="post">
        <input type="text" name="txt1" require/>
        <input type="text" name="txt2" require/>
        <input type="submit" name="submit" value="ok">
    </form>
    <?php
    function anagrama($x, $y)
    {
          if (count_chars($x, 1) == count_chars($y, 1))
       {
           return "As duas palavras são anagramas";
       }
       else
       {
           return "As duas palavras não são anagramas";
       }
    }
    if(isset($_POST['submit'])){
        $str1 = $_POST['txt1'];
        $str2 = $_POST['txt2'];
        echo anagrama($str1, $str2)."\n";
    }
    ?>
</body>
</html>