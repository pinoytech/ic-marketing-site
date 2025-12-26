<?php

namespace App\Livewire\Admin\Media;

use App\Models\Media;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditMedium extends Component
{
    use WithFileUploads;

    public $id;

    public $title;

    public $content;

    public $type;

    public $link;

    public $image;

    public $published_date;

    public $resource_image;

    public $resource_image_path;

    #[On('edit-medium')]
    public function edit($id)
    {
        $medium = Media::findOrFail($id);

        $this->id = $medium->id;
        $this->title = $medium->title;
        $this->content = $medium->content;
        $this->image = $medium->image;
        $this->resource_image_path = $medium->resource_image_path;
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
            'resource_image' => 'nullable|image|max:1024',
        ]);

        $medium = Media::find($this->id);

        if ($this->resource_image) {
            // Delete old image if it exists
            if ($medium->resource_image_path) {
                Storage::disk('resource')->delete($medium->resource_image_path);
            }
            $filename = time().'_'.$this->resource_image->getClientOriginalName();
            $this->resource_image_path = $this->resource_image->storeAs('resource-images', $filename, 'resource');
        }

        $medium->update([
            'title' => $this->title,
            'content' => $this->content,
            'image' => $this->image,
            'type' => $this->type,
            'link' => $this->link,
            'published_date' => $this->published_date,
            'resource_image_path' => $this->resource_image_path,
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
