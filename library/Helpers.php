<?php
namespace My;

class Helpers {
    /**
     * Decir hola al usuario
     * 
     * @return string
     */
    public static function sayHello($username){
        return "Hello {$username}";
    }

}