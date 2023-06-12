<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Trait\CheckSession;
use Livewire\Component;

class Search extends Component
{
    use CheckSession;
    protected $listeners = ['search' => '$refresh'];
    public $name;
    public $result = ' ';
    public $isfound = false;
    public function render()
    {

        $users = User::where('name', 'LIKE', '%'. $this->result . '%')->get();
        $you_user = $this->get_session()->id;
        if (collect($users)->isEmpty()) {
            $this->isfound = false;
        }
        if ($this->isfound == false) {
            return view('livewire.search');
        } else {
            $this->isfound = true;
            return view('livewire.search', compact('users', 'you_user'));
        }
    }
    public function search()
    {
        $arrayOfName = explode(' ', $this->name);
        if ($arrayOfName[0] == '') {
            $this->isfound = false;
            $this->emit('search');
        } else {
            $this->result = $arrayOfName[0];
            $this->isfound = true;
            $this->emit('search');
        }
    }
}
