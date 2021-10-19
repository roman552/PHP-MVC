<?php

class Cmodel {
    public function GetData() {
        $mysqli = new mysqli("localhost", "root", "", "blog");

        $result = $mysqli->query("SELECT * FROM news");

        $arrayResult = $result->fetch_all(MYSQLI_ASSOC);

        //var_dump($arrayResult);
       
        return $arrayResult;
    }
}