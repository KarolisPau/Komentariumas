<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;


class RodytiFoto extends Component
{
    use WithFileUploads;
    public $inputs = [];
    public $i = 1;
    public $foto;
    public $photo;
    public function render()
    {
         //$image =$this->foto;
        
        //return view('livewire.rodyti-foto', compact('image'));
        return view('livewire.rodyti-foto');
    }
    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function submit(){

        $validatedData = $this->validate([
            'foto' => 'required|image|jpg,jpeg,gif|max:2048',
        ]);
        //$imageData = file_get_contents($_FILES['image']['tmp_name']);

  //$this->foto = $validatedData;
  //$this->foto = sprintf('<img src="data:image/png;base64,%s" />', base64_encode($validatedData['foto']));
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
    }

    public function addText()
    {
        // ...
    }
}
