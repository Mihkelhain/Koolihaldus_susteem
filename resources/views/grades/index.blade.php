<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('grades.store') }}">
            @csrf

            <label>{{ __('Subject of the grade') }}
           <input type="text" name="gradeSubject" value="{{ old('gradeSubject') }}" placeholder="{{ __('Grade Subject') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                step="900">
            <x-input-error :messages="$errors->get('gradeSubject')" class="mt-2" />
            </label>

            <label>{{ __('Grade') }}
                <input type="number" name="grade" value="{{ old('grade') }}" placeholder="{{ __('Grade') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                step="1">

            <x-input-error :messages="$errors->get('grade')" class="mt-2" />
            </label>

            <label>{{ __('Grade')}}
                <select name="task_id" id=""
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <option value="0" disabled selected>{{ __('Select Task') }}</option>
                    @foreach ($tasks as $task)
                    <option value="{{$task->id}}" @selected(old('task_id')==$task->id) >{{ $task->title }}</option>
                    @endforeach
                </select>
            </label>
            <x-input-error :messages="$errors->get('service_id')" class="mt-2" />

            <x-primary-button class="mt-4">{{ __('Add Grades') }}</x-primary-button>
        </form>
        <div class="mt-6 bg-white shadow-sm rounded-lg divide-y">
            @foreach ($grades as $grade)
            <div class="flex-1">
                <div>
                    <div class="flex justify-between items-center">
                    <div class="ml-2 text-sm text-gray-600">
                        Subject:<span class="text-lg text-gray-800"> {{ $grade->gradeSubject }}</span><br>
                        Grade:<span class="text-lg text-gray-800"> {{ $grade->grade }}</span><br>
                        {{-- <small class="ml-2 text-sm text-gray-600">{{ $booking->created_at->format('j M Y, g:i a') }}</small>
                        @unless ($booking->created_at->eq($booking->updated_at))
                        <small class="text-sm text-gray-600"> &middot; {{ __('edited') }}</small>
                        @endunless --}}
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
                            <x-dropdown-link :href="route('grades.edit', $grade)">
                                {{ __('Edit') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                    </div>
                    @if (isset($grade->task))
                    <div>
                    <small class="ml-2 text-sm text-gray-600">Date: {{ $grade->task->dueDate }}.</small>
                    </div>
                    <div class="ml-2 text-sm text-gray-600">

                    </div>
                    <p class="ml-2 my-4 text-gray-900">{{ $grade->task->description }}</p>
                    <br>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
