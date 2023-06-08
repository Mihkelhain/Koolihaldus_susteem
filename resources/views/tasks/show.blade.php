<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('tasks.destroy', $task) }}">
            @csrf
            @method('delete')
            <div>
                <small class="ml-2 text-sm text-gray-600">DueDate: {{ $task->dueDate }}.</small>
                </div>

                <div>
                <small class="ml-2 text-sm text-gray-600">Worktype: {{ $task->worktype }}</small>
                </div>

                <div>
                    <small class="ml-2 text-sm text-gray-600">Status: {{ $task->status }}</small>
                    </div>

                <div class="ml-2 text-sm text-gray-600">
                    Subject:<span class="text-lg text-gray-800"> {{ $task->subject }}</span>
                </div>

                <p class="ml-2 my-4 text-gray-900">{{ $task->description }}</p>
            </div>

            <div class="ml-4 mt-4 space-x-2">
                <x-primary-button>{{ __('Delete') }}</x-primary-button>
                <a href="{{ route('tasks.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>
