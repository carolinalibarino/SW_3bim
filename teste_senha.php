<?php
    $senha = "alunaetecmcm";

    // $data = date("Ymd");
    // echo $data;
    // echo "<br>";
    // $total = $senha + $data;

        
    // 2ed001f7a8c865cb9392bef5cb27b08c
    $senha_cripto = md5($senha);
    echo $senha_cripto;

?>
