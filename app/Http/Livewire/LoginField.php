<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginField extends Component
{
    public $email = '';
    public $password = '';
    public function mount()
    {
        request()->validate(
            [ 'email' => 'required|email',
            'password' => 'required'
            ]
        );
    }
    public function render()
    {
        return view('livewire.login-field');
    }
    public Post $post;



    protected $rules = [

        'post.title' => 'required|string|min:6',

        'post.content' => 'required|string|max:500',

    ];



    public function save()

    {

        $this->validate();



        $this->post->save();

    }
}
