<?php

namespace App\Livewire;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
class Produit extends Component
{
    // public $produits=[];  

    // public function mount(){
    //     $this->produits= Product::paginate(10);
    // }
    use WithPagination;

    public $query;
    public $perPage=5;

    public function render()
    {
        return view('livewire.produit',[
            'produits'=>Product::where('title','like','%'.$this->query.'%')->paginate($this->perPage),
        ]);
    }
}  
