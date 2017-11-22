<?php
include('BASE.php');

class TEST extends BASE{
    public function run()
    {
        while(1) {    
            $i = $this->readline();
            if($i === "42") exit();
            print $i."\n";
        }
    }
}
