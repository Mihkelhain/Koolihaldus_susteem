<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('grades.update', $grade) }}">
            @csrf
            @method('patch')
            <label>{{ __('Grade and Subject') }}
                                                                                                                        {{-- yyyy-MM-ddThh:mm --}}
            <input type="string" name="gradeSubject" value="{{ old('gradeSubject', $grade->gradeSubject) }}" placeholder="{{ __('Grade Subject') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('gradeSubject')" class="mt-2" />

                <input type="integer" name="grade" value="{{ old('grade',$grade->grade) }}" placeholder="{{ __('Grade') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            <x-input-error :messages="$errors->get('grade')" class="mt-2" />

                </label>
                <x-input-error :messages="$errors->get('gradeSubject')" class="mt-2" />
                <x-input-error :messages="$errors->get('grade')" class="mt-2" />

                    <label>{{ __('Service')}}
                        <select name="task_id" id=""
                        class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                            <option value="0" disabled selected>{{ __('Select Task') }}</option>
                            @foreach ($tasks as $task)
                            <option value="{{$task->id}}" @selected(old('task_id',$grade->task_id)==$task->id) >{{ $task->title }}</option>
                            @endforeach
                        </select>
                    </label>
                    <x-input-error :messages="$errors->get('task_id')" class="mt-2" />

            <div class="mt-4 space-x-2">
                <x-primary-button>{{ __('Save') }}</x-primary-button>
                <a href="{{ route('grades.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
