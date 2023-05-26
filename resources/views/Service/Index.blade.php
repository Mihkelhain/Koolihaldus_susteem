<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('services.store') }}">
            @csrf
            <input type="text" name="Title"
                    value="{{ old('Title') }}"
                    placeholder="{{ __('Name the Task') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('Title')" class="mt-2" />

                <input type="text" name="Worktype"
                    value="{{ old('Worktype') }}"
                    placeholder="{{ __('what kind of task is it') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('Worktype')" class="mt-2" />

                <input type="text" name="Subject"
                    value="{{ old('Subject') }}"
                    placeholder="{{ __('what will the task be about') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('Subject')" class="mt-2" />

                <input type="text" name="Status"
                    value="{{ old('Status') }}"
                    placeholder="{{ __('What is the status of the task') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('Status')" class="mt-2" />

            <textarea name="description"
                    placeholder="{{ __('Add a description for the Task.') }}"
                class="mt-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Add Service') }}</x-primary-button>

            <input type="date" name="Due Date"
                    value="{{ old('DueDate') }}"
                    placeholder="{{ __('Task Completion Time') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('DueDate')" class="mt-2" />
        </form>
    </div>
</x-app-layout>


