<div>
  <flux:modal name="edit-post" class="md:w-128">
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Update post</flux:heading>
              <flux:text class="mt-2">Make changes to your post details.</flux:text>
          </div>

          <flux:input label="Title" wire:model='title' placeholder="Post title" />
          <flux:textarea label="Content" wire:model='content' placeholder="Post content" rows="4" />
          <flux:input label="Author" wire:model='author' placeholder="Author name" />
          <flux:input label="Image URL" wire:model='image' placeholder="http://example.com/image.jpg" />
          <flux:input label="Published date" wire:model='published_date' type="date" />
          <div class="flex">
              <flux:spacer />

              <flux:button type="submit" variant="primary" wire:click="update">Save changes</flux:button>
          </div>
      </div>
  </flux:modal>
</div>
