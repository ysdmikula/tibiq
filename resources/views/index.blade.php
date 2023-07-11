<x-layout.dotted class="align-content-center">

    <x-container class="d-block">
        <a href="/task/create" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
            <div class="w-100 h-100 d-flex justify-center align-items-center">
                New task +
            </div>
        </a>
    </x-container>

    @foreach ($tasks as $key=>$task)
        <x-container>
            <a href="/task/{{ $task->id }}/edit" class="align-self-end">
                <span class="material-symbols-outlined">
                    edit
                </span>
            </a>
            <h2 class="align-self-center text-capitalize">{{ $task->name }}</h2>
            <p>{{ $task->description }}</p>
            <p>{{ date("d.m.Y", strtotime($task->date)) }}</p>
            <form action="/task/{{ $task->id }}" class="align-self-center" method="POST">
                @csrf
                @method("DELETE")
                <button type="delete" class="checkmark">
                    <span class="material-symbols-outlined text-white checkmark">
                        done
                    </span>
                </button>
            </form>
        </x-container>
    @endforeach

    <x-flashMsg></x-flashMsg>
</x-layout.dotted>

