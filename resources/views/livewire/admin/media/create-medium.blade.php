<div>
  <flux:modal name="create-medium" class="md:w-256" flyout>
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Create medium</flux:heading>
              <flux:text class="mt-2">Make changes to your medium details.</flux:text>
          </div>

          <flux:input label="Title" wire:model='title' placeholder="Medium title" />
          <flux:textarea label="Content" wire:model='content' placeholder="Medium content" rows="4" />
          <flux:select label="Type" wire:model="type" placeholder="Choose type...">
              <flux:select.option>Audio</flux:select.option>
              <flux:select.option>Podcast</flux:select.option>
              <flux:select.option>Video</flux:select.option>
          </flux:select>
          <flux:input label="Image URL" wire:model='image' placeholder="http://example.com/image.jpg" />
          <flux:input label="Link URL" wire:model='link' placeholder="http://example.com/link" />
          <flux:input label="Published date" wire:model='published_date' type="date" />
          <div class="flex">
              <flux:spacer />

              <flux:button type="submit" variant="primary" wire:click="save">Save changes</flux:button>
          </div>
      </div>
  </flux:modal>
</div>
