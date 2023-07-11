@section('title', 'Edit task')

<x-layout.dotted class=" sm:items-center ">
   
    <x-homeBtn></x-homeBtn>

    <x-container  style="scale: 2;">
        <form action="/task/{{$task->id}}" method="POST" class="d-flex flex-column">
            @csrf
            @method("PUT")
            <h1>Edit task</h1>
            <label for="name">Task name</label>
            <input type="text" name="name" id="name" value="{{ old("name") ?? $task->name }}">
            @error('name')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <label for="description">Task description</label>
            <input type="text" name="description" id="description" value="{{ old("description") ?? $task->description }}">
            <label for="date">Due to</label>
            <input type="date" name="date" id="date" value="{{ old("date") ?? $task->date}}">
            @error('date')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <button type="edit" class="btn btn-primary mt-3">Edit task</button>
        </form>
    </x-container>
</x-layout.dotted>