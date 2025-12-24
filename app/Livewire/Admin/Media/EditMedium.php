<?php

namespace App\Livewire\Admin\Media;

use App\Models\Media;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;

class EditMedium extends Component
{
    public $id;

    public $title;

    public $content;

    public $type;

    public $link;

    public $image;

    public $published_date;

    #[On('edit-medium')]
    public function edit($id)
    {
        $medium = Media::findOrFail($id);

        $this->id = $medium->id;
        $this->title = $medium->title;
        $this->content = $medium->content;
        $this->image = $medium->image;
        $this->link = $medium->link;
        $this->published_date = $medium->published_date;
        $this->type = $medium->type;

        Flux::modal('edit-medium')->show();
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|url',
            'link' => 'nullable|url',
            'type' => 'required|string|max:50',
            'published_date' => 'required|date',
        ]);

        $medium = Media::find($this->id);

        $medium->update([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $this->image,
            'type' => $this->type,
            'link' => $this->link,
            'published_date' => $this->published_date,
        ]);

        Flux::modal('edit-medium')->close();
        session()->flash('message', 'Medium updated successfully.');
        $this->redirectRoute('admin.media', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.media.edit-medium');
    }
}
