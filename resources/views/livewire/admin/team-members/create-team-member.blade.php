<div>

  <flux:modal name="create-team-member" class="md:w-256" flyout>
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Create team member</flux:heading>
              <flux:text class="mt-2">Make changes to your team member details.</flux:text>
          </div>

          <flux:input label="Name" wire:model='name' placeholder="Team member name" />
          <flux:input label="Position" wire:model='position' placeholder="Team member position" />
          <flux:input label="Photo URL" wire:model='photo_url' placeholder="http://example.com/photo.jpg" />
          <flux:input label="Display Order" wire:model='display_order' type="number" />
          <div class="flex">
              <flux:spacer />

              <flux:button type="submit" variant="primary" wire:click="save">Save changes</flux:button>
          </div>
      </div>
  </flux:modal>
</div>
