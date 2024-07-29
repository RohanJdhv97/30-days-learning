<x-layout>
    <x-slot:headingSlot>
        Login Page
    </x-slot:headingSlot>
    <form method="POST" action="/sessions">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Login To Your Account</h2>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
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
            <x-form-button type="submit">Login</x-form-button>
        </div>
    </form>

</x-layout>