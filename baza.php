<?php
        // łączenie z bazą danych
        $mysqli = new mysqli("localhost","root","","ryby");
        if ($mysqli -> connect_errno){
            echo "failed to connect MySQL:" . $mysqli -> connect_eror;
            exit();
        }else echo "<br>CONNECTED<br>";
        // operacje na bazie danych
        
        // zakończenie operacji z bazą
        $mysqli -> close();
        ?>