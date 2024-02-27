<?php

    //Generazione password
    function generateRandomPassword($length){

        $lowercase_chars = 'abcdefghijklmnopqrstuvwxyz';
        $uppercase_chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $special_chars = '!"#$%&\'()*+,-./:;<=>?@[\]^_`{|}~';

        //Unisco tutti i caratteri
        $all_chars = $lowercase_chars . $uppercase_chars . $numbers . $special_chars;
    
        $password = '';
        
        //Creazione password casuale
        for ($i = 0; $i < $length; $i++) {
            $index = rand(0, strlen($all_chars) - 1);
            $password .= $all_chars[$index];
        }
        
        return $password;
    }


?>