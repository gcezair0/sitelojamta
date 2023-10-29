<?php
    function generateHash($length = 32){
        $characters = "1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
        $charactersLength = strlen($characters);
        $hashString = '';
        for($i = 0; $i < $length; $i++){
            $hashString .= $characters[rand(0,$charactersLength -1)];
        }
        return $hashString;
    }
?>