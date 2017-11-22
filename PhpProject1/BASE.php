<?php

abstract class BASE {
    
    protected function readline()
    {
        return trim(fgets( STDIN ));
    }
    
    public function run(){}
}
