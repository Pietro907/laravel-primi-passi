<div class="col-6 mx-auto">
    <form action="{{ route('tasks.store') }}" method="post">

        @csrf

        <label for="description" class="form-label">Task description</label>
        <div class="input-group">
            <textarea name="description" id="task" class="form-control" aria-label="With textarea"></textarea>
        </div>
        <p><small class="form-text text-muted">Help text</small></p>

        <button type="submit" class="btn btn-primary">Add Task</button>
    </form>
</div> 