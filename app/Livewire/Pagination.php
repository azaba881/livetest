<?php

namespace App\Livewire;

use App\Service\PhoneBook;
use Livewire\Component;
class Pagination extends Component
{

    public $name;
    public $contacts=[];

    
    public $mescontacts=[];

    public function mount(){
        $this->mescontacts=PhoneBook::getContact();
    }

    public function updatedName($name){
        $result=$this->contacts = PhoneBook::searchByName(strtolower($name));
       if ($name!='') {
        $this->mescontacts = $result;
       } else {
        $this->mescontacts=PhoneBook::getContact();
       }

       if(empty($result))
       {
        session()->flash('message','no contact matching for');
       }

    }

    

    
    public function render()
    {
        return view('livewire.pagination');
    }
}
  