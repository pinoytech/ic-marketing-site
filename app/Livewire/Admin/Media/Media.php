<?php

namespace App\Livewire\Admin\Media;

use App\Models\Media as MediaModel;
use Flux\Flux;
use Livewire\Component;
use Livewire\WithPagination;

class Media extends Component
{
    use WithPagination;

    public $id;

    public function render()
    {
        $media = MediaModel::orderBy('published_date', 'desc')->paginate(10);

        return view('livewire.admin.media.media', [
            'media' => $media,
        ]);
    }

    public function edit($id)
    {
        $this->dispatch('edit-medium', $id);
    }

    public function delete($id)
    {
        $this->id = $id;
        Flux::modal('delete-medium')->show();
    }

    public function deleteMedium()
    {
        // Delete image if it exists
        $medium = MediaModel::find($this->id);
        if ($medium && $medium->resource_image_path) {
            Storage::disk('resource')->delete($medium->resource_image_path);
        }
        MediaModel::destroy($this->id);
        Flux::modal('delete-medium')->close();
        session()->flash('message', 'Medium deleted successfully.');
        $this->redirectRoute('admin/media', navigate: true);
    }
}
