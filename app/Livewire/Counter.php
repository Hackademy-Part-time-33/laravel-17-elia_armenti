<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 0;
    public $total = 0;
    
    public function somma()
    {
        $this->count++;
    }
    
    public function sottrazione()
    {
        if ( $this->count) {
            $this->count--;
        } else {
            $this->count = 0;
        }
        
    }
    
    public function azzera()
    {
        $this->count = 0;
    }

    public function somma2($x)
    {
        $this->count += $x;
    }

    public function sottrazione2($x)
    {
        if ( $this->count) {
            $this->count -= $x; 
        } else {
            $this->count = 0;
        }
        
    }
    
    
    public function render()
    {
        return view('livewire.counter');
    }
}
