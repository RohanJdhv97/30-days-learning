<x-layout>
    <x-slot:headingSlot>
        Registration Page
    </x-slot:headingSlot>
    <form method="POST" action="/register">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create Your Account</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="first_name" id="first_name" placeholder="First Name" required/>
                            <x-form-error name="first_name" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="last_name" id="last_name" placeholder="Last Name" />
                            <x-form-error name="last_name" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-label for="email">Email Id</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="email" id="email" placeholder="Email Id" required/>
                            <x-form-error name="email"/>
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-label for="email">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password" placeholder="Password" required/>
                            <x-form-error name="password"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/">Cancel</a>
            <x-form-button type="submit">Save</x-form-button>
        </div>
    </form>

</x-layout>