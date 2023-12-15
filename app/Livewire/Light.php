<?php

namespace App\Livewire;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Light extends Component 
{  
    public $brightness=10;
    protected $listeners = ['changeValue'];
 
    public function mount(){
        $this->changeValue();
    }

    public function startAction(){
        $this->brightness=100;
    }

    public function increment(){
        if($this->brightness<100){ 
            $this->brightness+=10;
        }
    }

    public function decrement(){
        if($this->brightness>0){
            $this->brightness-=10;
        }
    }

    public function endAction(){
        $this->brightness=10;
        // $this->changeValue();
    }

    private function changeValue(){
        $this->brightness=random_int(10,100);
    }

    public function render()
    {
        return view('livewire.light');
    }

}
