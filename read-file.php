<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $length = filesize('chat.txt');
        $read = fopen('chat.txt', 'r');
        $msg = fread($read, $length);
        fclose($read);
        preg_match_all("/\[([^\]]*)\]/", $msg, $matches);
        $result = "";
        if (isset($matches[1]) && is_array($matches[1]) && count($matches[1]) > 0) {
            $result = implode('\n', $matches[1]);
        }
        echo "<script>console.log('{$result}')</script>";
        ?>
    </body>
</html>
