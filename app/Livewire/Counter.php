<?php

namespace App\Livewire;

use Livewire\Component;
class Counter extends Component
{

    public $count=1;

    public function increment(){
        if ($this->count>0) {
            $this->count++;
        }
    }

    public function decrement(){
        $this->count--;
    }

    public function render()
    {
        return view('livewire.counter');
    }

}
   