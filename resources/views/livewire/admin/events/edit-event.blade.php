<div>
  <flux:modal name="edit-event" class="md:w-256" flyout>
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Update event</flux:heading>
              <flux:text class="mt-2">Make changes to your event details.</flux:text>
          </div>

          <flux:input label="Title" wire:model='title' placeholder="Event title" />
          <flux:textarea label="Description" wire:model='description' placeholder="Event description" rows="4" />
          <flux:input label="Register link" wire:model='register_link' placeholder="http://example.com/register" />
          <flux:input label="Watch link" wire:model='watch_link' placeholder="http://example.com/watch" />
          <flux:input label="Image URL" wire:model='image' placeholder="http://example.com/image.jpg" />
          <flux:input label="Event date" wire:model='event_webinar_date' type="date" />
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
