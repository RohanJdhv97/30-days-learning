<x-layout>
    <x-slot:headingSlot>
        Jobs Create Page
    </x-slot:headingSlot>
    <form method="POST" action="/jobs">
        @csrf
        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create Job</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">we just need some data from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="title" id="title" placeholder="Job title" />
                            <x-form-error name="title" />
                        </div>
                    </div>
                    <div class="sm:col-span-4">
                        <x-form-label for="title">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="Rs. 50,000 per an" type="text" />
                            <x-form-error name="salary" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <x-form-button type="button">Cancel</x-form-button>
            <x-form-button type="submit">Save</x-form-button>
        </div>
    </form>

</x-layout>