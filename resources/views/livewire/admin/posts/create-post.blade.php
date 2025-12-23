<div>

  <flux:modal name="create-post" class="md:w-256" flyout>
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Create post</flux:heading>
              <flux:text class="mt-2">Make changes to your post details.</flux:text>
          </div>

          <flux:input label="Title" wire:model='title' placeholder="Post title" />
          <flux:textarea label="Content" wire:model='content' placeholder="Post content" rows="4" />
          <flux:input label="Author" wire:model='author' placeholder="Author name" />
          <flux:input label="Image URL" wire:model='image' placeholder="http://example.com/image.jpg" />
          <flux:input label="Published date" wire:model='published_date' type="date" />
          <div class="flex">
              <flux:spacer />

              <flux:button type="submit" variant="primary" wire:click="save">Save changes</flux:button>
          </div>
      </div>
  </flux:modal>
</div>
