<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Properties') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                {{ __('Update Properties') }}
                            </h2>
                        </header>
                        <form method="post" action="{{ route('properties.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->property?->name)" required autofocus autocomplete="name"/>
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="address_street" :value="__('Address Street')" />
                                <x-text-input id="address_street" name="address_street" type="text" class="mt-1 block w-full" :value="old('address_street', $user->property?->address_street)" required autocomplete="address_street"/>
                                <x-input-error :messages="$errors->get('address_street')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="address_postcode" :value="__('Address Postcode')" />
                                <x-text-input id="address_postcode" name="address_postcode" type="text" class="mt-1 block w-full" :value="old('address_postcode', $user->property?->address_postcode)" autocomplete="address_postcode"/>
                                <x-input-error :messages="$errors->get('address_postcode')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="lat" :value="__('Latitude')" />
                                <x-text-input id="lat" name="lat" type="number" step="any" class="mt-1 block w-full" pattern="/^[-]?((([0-8]?[0-9])(\.(\d{1,8}))?)|(90(\.0+)?))$/" :value="old('lat', $user->property?->lat)" autocomplete="lat" />
                                <x-input-error :messages="$errors->get('lat')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="long" :value="__('Longitude')" />
                                <x-text-input id="long" name="long" type="number" step="any" class="mt-1 block w-full" pattern="/^[-]?((((1[0-7][0-9])|([0-9]?[0-9]))(\.(\d{1,8}))?)|180(\.0+)?)$/" :value="old('long', $user->property?->long)" autocomplete="long" />
                                <x-input-error :messages="$errors->get('long')" class="mt-2" />
                            </div>
                            <div class="flex items-center gap-4">
                                <x-primary-button>{{ __('Save') }}</x-primary-button>

                                @if (session('status') === 'properties-updated')
                                <p
                                    x-data="{ show: true }"
                                    x-show="show"
                                    x-transition
                                    x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600 dark:text-gray-400"
                                >{{ __('Saved.') }}</p>
                                @endif
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
