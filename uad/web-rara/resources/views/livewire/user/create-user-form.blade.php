<x-jet-form-section submit="informationUser">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
		<div class="col-span-6 sm:col-span-4">
			<x-jet-label for="email" value="{{ __('Email') }}" />
			<x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
			<x-jet-input-error for="email" class="mt-2" />
		</div>

		<div class="col-span-6 sm-col-span-4">
              <label for="address" class="block text-sm font-medium text-gray-700">
                Address
              </label>
              <div class="mt-1">
                <textarea wire:model.defer="state.address" id="address" name="address" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="State address"></textarea>
              </div>
              <p class="mt-2 text-sm text-gray-500">
                Brief address for user information.
              </p>
            </div>
    </x-slot>
	
</x-jet-form-section>
