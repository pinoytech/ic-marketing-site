<div>

  <flux:modal name="create-company" class="md:w-256" flyout>
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Create company</flux:heading>
              <flux:text class="mt-2">Make changes to your company details.</flux:text>
          </div>

          <flux:input label="Name" wire:model='name' placeholder="Company name" />
          <flux:input label="Logo URL" wire:model='logo_url' placeholder="http://example.com/logo.jpg" />
          <flux:input label="Display Order" wire:model='display_order' type="number" />
          <flux:checkbox label="Featured" wire:model='featured' />
          <div class="flex">
              <flux:spacer />

              <flux:button type="submit" variant="primary" wire:click="save">Save changes</flux:button>
          </div>
      </div>
  </flux:modal>
</div>
