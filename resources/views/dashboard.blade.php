<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto space-y-4 max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>

            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('pdf') }}" class="px-4 py-2 text-white border rounded btn btn-primary">Open PDF</a>
                </div>
            </div>


            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <flux:autocomplete wire:model="state" label="State of residence">
                        <flux:autocomplete.item>Alabama</flux:autocomplete.item>
                        <flux:autocomplete.item>Alaska</flux:autocomplete.item>
                        <flux:autocomplete.item>Arizona</flux:autocomplete.item>
                        <flux:autocomplete.item>Arkansas</flux:autocomplete.item>
                        <flux:autocomplete.item>California</flux:autocomplete.item>
                        <flux:autocomplete.item>Colorado</flux:autocomplete.item>
                        <flux:autocomplete.item>Connecticut</flux:autocomplete.item>
                        <flux:autocomplete.item>Delaware</flux:autocomplete.item>
                        <flux:autocomplete.item>District of Columbia</flux:autocomplete.item>
                        <flux:autocomplete.item>Florida</flux:autocomplete.item>
                        <flux:autocomplete.item>Georgia</flux:autocomplete.item>
                        <flux:autocomplete.item>Hawaii</flux:autocomplete.item>
                        <flux:autocomplete.item>Idaho</flux:autocomplete.item>
                        <flux:autocomplete.item>Illinois</flux:autocomplete.item>
                        <flux:autocomplete.item>Indiana</flux:autocomplete.item>
                        <flux:autocomplete.item>Iowa</flux:autocomplete.item>
                        <flux:autocomplete.item>Kansas</flux:autocomplete.item>
                        <flux:autocomplete.item>Kentucky</flux:autocomplete.item>
                        <flux:autocomplete.item>Louisiana</flux:autocomplete.item>
                        <flux:autocomplete.item>Maine</flux:autocomplete.item>
                        <flux:autocomplete.item>Maryland</flux:autocomplete.item>
                        <flux:autocomplete.item>Massachusetts</flux:autocomplete.item>
                        <flux:autocomplete.item>Michigan</flux:autocomplete.item>
                        <flux:autocomplete.item>Minnesota</flux:autocomplete.item>
                        <flux:autocomplete.item>Mississippi</flux:autocomplete.item>
                        <flux:autocomplete.item>Missouri</flux:autocomplete.item>
                        <flux:autocomplete.item>Montana</flux:autocomplete.item>
                        <flux:autocomplete.item>Nebraska</flux:autocomplete.item>
                        <flux:autocomplete.item>Nevada</flux:autocomplete.item>
                        <flux:autocomplete.item>New Hampshire</flux:autocomplete.item>
                        <flux:autocomplete.item>New Jersey</flux:autocomplete.item>
                        <flux:autocomplete.item>New Mexico</flux:autocomplete.item>
                        <flux:autocomplete.item>New York</flux:autocomplete.item>
                        <flux:autocomplete.item>North Carolina</flux:autocomplete.item>
                        <flux:autocomplete.item>North Dakota</flux:autocomplete.item>
                        <flux:autocomplete.item>Ohio</flux:autocomplete.item>
                        <flux:autocomplete.item>Oklahoma</flux:autocomplete.item>
                        <flux:autocomplete.item>Oregon</flux:autocomplete.item>
                        <flux:autocomplete.item>Pennsylvania</flux:autocomplete.item>
                        <flux:autocomplete.item>Rhode Island</flux:autocomplete.item>
                        <flux:autocomplete.item>South Carolina</flux:autocomplete.item>
                        <flux:autocomplete.item>South Dakota</flux:autocomplete.item>
                        <flux:autocomplete.item>Tennessee</flux:autocomplete.item>
                        <flux:autocomplete.item>Texas</flux:autocomplete.item>
                        <flux:autocomplete.item>Utah</flux:autocomplete.item>
                        <flux:autocomplete.item>Vermont</flux:autocomplete.item>
                        <flux:autocomplete.item>Virginia</flux:autocomplete.item>
                        <flux:autocomplete.item>Washington</flux:autocomplete.item>
                        <flux:autocomplete.item>West Virginia</flux:autocomplete.item>
                        <flux:autocomplete.item>Wisconsin</flux:autocomplete.item>
                        <flux:autocomplete.item>Wyoming</flux:autocomplete.item>
                    </flux:autocomplete>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
