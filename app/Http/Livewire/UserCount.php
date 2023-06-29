<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class UserCount extends Component
{
    public $nbUser = 0;
    public $total = 200;
    public function mount()
    {
        $this->animateNumber();
    }
    private function animateNumber()
    {
        while($this->nbUser < $this->total)
        {
            $this->nbUser++;
            $this->emit('numberUpdated' , $this->nbUser);
            usleep(50000);
        }
    }
    public function render()
    {

        return view('livewire.user-count');
    }
}
