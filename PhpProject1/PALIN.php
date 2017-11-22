<?php
error_reporting(E_ALL);
include('BASE.php');

class PALIN extends BASE
{
    private $len;
    private $str;
    
    public function run()
    {
        while(1) {    
            $this->str = $this->readline();
            $this->len = strlen($this->str);
            $this->palind();
            print $this->str."\n";
        }
    }
    
    public function palind()
    {
        if($this->len == 1) {
            return $this->one();
        }
        $h = (int)($this->len/2) - 1;
        $only9 = true;
        for($i = $h; $i>=0; $i--) {           
            if($this->str[$i] ==  $this->str[$this->len - $i - 1]) {
                $only9 &= $this->str[$i] === '9';
                continue;
            }
            
            if($this->str[$i] > $this->str[$this->len - $i - 1]) {
                $this->copyTail($i);
                return;
            } 
            
           $this->inc();
           return;
        }
        
        $m = (int)ceil($this->len/2) - 1;
        if($only9 && $this->str[$m] === '9') {
            $this->str = str_pad('', $this->len, '0');
            $this->str[0] = $this->str[$this->len] = '1';
        } else { 
            $this->inc();
        }
    }
    
    protected function one() 
    {
        $this->str  = '9' == $this->str ? '11' : ++$this->str;
    }
    
    protected function copyTail($ind) 
    {
        for($i = $ind; $i >= 0; $i--) {
            $this->str[$this->len - $i - 1] = $this->str[$i]; 
        }
    }
    
    protected function inc()
    {
        $m = (int)ceil($this->len/2) - 1;
        for($i = $m; $i>=0; $i--) {
            if($this->str[$i] < '9') {
                $this->str[$i] = (string) $this->str[$i] + 1;
                break;
            } 
            $this->str[$i] = 0;
        }
        $this->copyTail($m);
    }
}
