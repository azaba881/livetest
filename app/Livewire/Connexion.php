<?php

namespace App\Livewire;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Connexion extends Component
{

    public  $level=0;
    protected $rules = [
        'password' => ['required', 'min:6', 'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]/'],
    ];

    #[validate('required|min:3')]
    public $name='';

    #[validate('required|min:6')]
    public $password='';
    protected $messages = [
        'name.required' => 'The name field is required.',
        'name.min' => 'The name should have at least :min caracters.',
        'password.required' => 'The password field is required.',
        'password.min' => 'The password should have at least :min caracters.',
        'password.regex' => 'The password is not valid. Please try a new.',
    ];

    public function updatedPassword()
    {
        $this->level = $this->calculatePasswordStrength();
    }

    private function calculatePasswordStrength()
    {
        $strength = 0;

        // Vérifier la longueur du mot de passe
        if (strlen($this->password) >= 6) {
            $strength += 50;  
        }

        // Vérifier la présence de caractères spéciaux
        if (preg_match('/[#@$!%*?&]/', $this->password)) {
            $strength += 20;
        }

        // Vérifier la présence d'une majuscule
        if (preg_match('/[A-Z]/', $this->password)) {
            $strength += 30;
        }

        return min($strength, 100); // Limiter à 100%
    }

    public function save(){
        // $this->brightness=0;
        $this->validate();
        return 1;
    }

    public function render()
    {
        return view('livewire.connexion');
    }
}
