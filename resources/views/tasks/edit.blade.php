<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('tasks.update', $task) }}">
            @csrf
            @method('patch')
            <input type="text" name="title"
                    value="{{ old('title', $task->title) }}"
                    placeholder="{{ __('Name the Task') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('title')" class="mt-2" />

                <input type="text" name="worktype"
                    value="{{ old('worktype', $task->worktype) }}"
                    placeholder="{{ __('what kind of task is it') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('worktype')" class="mt-2" />

                <input type="text" name="subject"
                    value="{{ old('subject', $task->subject) }}"
                    placeholder="{{ __('what will the task be about') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('subject')" class="mt-2" />

                <input type="text" name="status"
                    value="{{ old('status', $task->status) }}"
                    placeholder="{{ __('What is the status of the task') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('status')" class="mt-2" />

                <input type="date" name="dueDate"
                    value="{{ old('dueDate', $task->dueDate) }}"
                    placeholder="{{ __('Task Completion Time') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('dueDate')" class="mt-2" />

            <input type="text" name="description"
                    value="{{old('description', $task->description)}}"
                    placeholder="{{ __('Add a description for the Task.') }}"
                class="mt-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('tasks.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
