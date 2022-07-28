<?php

class Helper{

    public static function sanitizeField($field){

        return ucfirst(str_replace("_"," ",$field));

    }

    
}