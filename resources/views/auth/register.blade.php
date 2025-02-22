<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="first_name" id="first_name" required />

                            <x-form-error name="first_name"/>
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="last_name" id="last_name" required />

                            <x-form-error name="last_name"/>
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" required/>

                            <x-form-error name="email"/>
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" required/>

                            <x-form-error name="password"/>
                        </div>
                    </x-form-field>

                    <x-form-field class="sm:col-span-4">
                        <x-form-label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" id="password_confirmation" required/>

                            <x-form-error name="password_confirmation"/>
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        {{-- @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
        @endif --}}

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
