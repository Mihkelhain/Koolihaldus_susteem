<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <input type="text" name="title"
                    value="{{ old('title') }}"
                    placeholder="{{ __('Name the Task') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('title')" class="mt-2" />

                <input type="text" name="worktype"
                    value="{{ old('worktype') }}"
                    placeholder="{{ __('what kind of task is it') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('worktype')" class="mt-2" />

                <input type="text" name="subject"
                    value="{{ old('subject') }}"
                    placeholder="{{ __('what will the task be about') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('subject')" class="mt-2" />

                <input type="text" name="status"
                    value="{{ old('status') }}"
                    placeholder="{{ __('What is the status of the task') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('status')" class="mt-2" />

                <input type="date" name="dueDate"
                    value="{{ old('dueDate') }}"
                    placeholder="{{ __('Task Completion Time') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('dueDate')" class="mt-2" />

            <textarea name="description"
                    placeholder="{{ __('Add a description for the Task.') }}"
                class="mt-2 block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('description') }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Add Task') }}</x-primary-button>

        </form>

        <form method="GET" action="{{ route('tasks.index') }}">
            @csrf
            <input type="text" name="search"
                    value="{{ old('search',$search_string) }}"
                    placeholder="{{ __('Enter your search here') }}"
                    class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('search')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Search Task') }}</x-primary-button>
        </form>


        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">

            @foreach ($tasks as $Task)

                <div class="p-6 flex space-x-2">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">

                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />

                    </svg>

                    <div class="flex-1">


                        <div class="flex justify-between items-center">
                        <div class="ml-2 text-sm text-gray-600">
                            Title:<span class="text-lg text-gray-800"> {{ $Task->title }}</span>


                            <small class="ml-2 text-sm text-gray-600">{{ $Task->created_at->format('j M Y, g:i a') }}</small>
                            @unless ($Task->created_at->eq($Task->updated_at))
                            <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                            @endunless
                        </div>
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('tasks.edit', $Task)">
                                    {{ __('Edit') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('tasks.show', $Task)">
                                    {{ __('Delete') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>


                        </div>

                        <div>
                        <small class="ml-2 text-sm text-gray-600">DueDate: {{ $Task->dueDate }}.</small>
                        </div>

                        <div>
                        <small class="ml-2 text-sm text-gray-600">Worktype: {{ $Task->worktype }}</small>
                        </div>

                        <div>
                            <small class="ml-2 text-sm text-gray-600">Status: {{ $Task->status }}</small>
                            </div>

                        <div class="ml-2 text-sm text-gray-600">
                            Subject:<span class="text-lg text-gray-800"> {{ $Task->subject }}</span>
                        </div>

                        <p class="ml-2 my-4 text-gray-900">{{ $Task->description }}</p>
                    </div>

                </div>

            @endforeach

        </div>

    </div>
</x-app-layout>


