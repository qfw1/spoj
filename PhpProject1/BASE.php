<?php

abstract class BASE {
    
    protected function readline($len = 1024)
    {
        return stream_get_line(STDIN, 16384, PHP_EOL);
    }
    
    public function run(){}
}
