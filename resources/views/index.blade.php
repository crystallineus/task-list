<h1>
    This list of tasks
</h1>

<div>
    @forelse ($tasks as $task)
        <div>
            <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
        </div>
    @empty
        <div>There no tasks!</div>
    @endforelse
</div>