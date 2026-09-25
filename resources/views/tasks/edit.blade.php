<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Task - Personal Task Manager</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="page-background">

    <main class="container">

        <section class="form-container">

            <div class="form-header">

                <div class="form-header-icon">
                    ✎
                </div>

                <div>
                    <h1>Edit Task</h1>
                    <p>Update your task information and keep things organized.</p>
                </div>

            </div>


            @if($errors->any())

                <div class="form-error-box">

                    <strong>Please fix the following errors:</strong>

                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>

            @endif


            <form
                action="{{ route('tasks.update', $task) }}"
                method="POST"
                class="task-form"
            >

                @csrf
                @method('PUT')


                {{-- Task Name --}}
                <div class="form-group">

                    <label for="task_name">
                        Task Name
                    </label>

                    <input
                        type="text"
                        id="task_name"
                        name="task_name"
                        value="{{ old('task_name', $task->task_name) }}"
                        placeholder="Enter task name"
                        required
                    >

                    @error('task_name')
                        <span class="form-error">
                            {{ $message }}
                        </span>
                    @enderror

                </div>


                {{-- Description --}}
                <div class="form-group">

                    <label for="description">
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        placeholder="Enter task description"
                    >{{ old('description', $task->description) }}</textarea>

                    @error('description')
                        <span class="form-error">
                            {{ $message }}
                        </span>
                    @enderror

                </div>


                {{-- Status + Due Date --}}
                <div class="form-row">

                    <div class="form-group">

                        <label for="status">
                            Status
                        </label>

                        <select
                            id="status"
                            name="status"
                            required
                        >

                            <option
                                value="Pending"
                                {{ old('status', $task->status) === 'Pending' ? 'selected' : '' }}
                            >
                                Pending
                            </option>

                            <option
                                value="Completed"
                                {{ old('status', $task->status) === 'Completed' ? 'selected' : '' }}
                            >
                                Completed
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label for="due_date">
                            Due Date
                        </label>

                        <input
                            type="date"
                            id="due_date"
                            name="due_date"
                            value="{{ old('due_date', $task->due_date?->format('Y-m-d')) }}"
                        >

                        @error('due_date')
                            <span class="form-error">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>

                </div>


                {{-- Buttons --}}
                <div class="form-actions">

                    <a
                        href="{{ route('tasks.index') }}"
                        class="back-button"
                    >
                        ← Back to Tasks
                    </a>

                    <button
                        type="submit"
                        class="save-button"
                    >
                        ✓ Update Task
                    </button>

                </div>

            </form>

        </section>


        <footer class="footer">
            <span>♥</span>
            Small steps make big progress
            <span>♥</span>
        </footer>

    </main>

</div>

</body>
</html>