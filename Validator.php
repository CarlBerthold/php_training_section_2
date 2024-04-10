<?php

class validator 
{

    public function string($value) {
        
        return strlen($value) === 0;
    }
}

?>