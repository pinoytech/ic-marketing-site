<div>
  <flux:modal name="edit-medium" class="md:w-256" flyout>
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Update medium</flux:heading>
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
          <flux:input label="Published date" wire:model='published_date' type="date" />
          <div class="flex gap-4">
            <flux:spacer />
            <flux:button type="submit" variant="primary" wire:click="update">
              Save changes
            </flux:button>
            <flux:modal.close>
              <flux:button variant="outline">Cancel</flux:button>
            </flux:modal.close>
          </div>
      </div>
  </flux:modal>
</div>
