<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add New Task - Personal Task Manager</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<div class="page-background">

    <main class="container">

        {{-- =====================================================
             HEADER
        ====================================================== --}}
        <header class="header">

            <div class="brand">

                {{-- Logo --}}
                <div class="brand-icon">

                    <svg viewBox="0 0 64 64" fill="none">

                        <rect
                            x="15"
                            y="9"
                            width="34"
                            height="45"
                            rx="6"
                            fill="#F4F8FF"
                            stroke="#579CEB"
                            stroke-width="3"
                        />

                        <rect
                            x="23"
                            y="4"
                            width="18"
                            height="10"
                            rx="4"
                            fill="#8BC5FF"
                            stroke="#579CEB"
                            stroke-width="3"
                        />

                        <path
                            d="M23 23L27 27L34 19"
                            stroke="#579CEB"
                            stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                        <line
                            x1="37"
                            y1="23"
                            x2="44"
                            y2="23"
                            stroke="#9DB2CC"
                            stroke-width="2"
                            stroke-linecap="round"
                        />

                        <path
                            d="M23 34L27 38L34 30"
                            stroke="#579CEB"
                            stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                        <line
                            x1="37"
                            y1="34"
                            x2="44"
                            y2="34"
                            stroke="#9DB2CC"
                            stroke-width="2"
                            stroke-linecap="round"
                        />

                        <path
                            d="M23 45L27 49L34 41"
                            stroke="#579CEB"
                            stroke-width="3"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                        <line
                            x1="37"
                            y1="45"
                            x2="44"
                            y2="45"
                            stroke="#9DB2CC"
                            stroke-width="2"
                            stroke-linecap="round"
                        />

                        <circle
                            cx="48"
                            cy="46"
                            r="8"
                            fill="#F48ABF"
                        />

                        <path
                            d="M45 46.5L47.5 49L52 44"
                            stroke="white"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                    </svg>

                </div>


                {{-- Brand Text --}}
                <div>

                    <h1>Personal Task Manager</h1>

                    <p class="subtitle">
                        Organize and manage your tasks easily.
                    </p>

                </div>

            </div>


            {{-- Back Button --}}
            <a
                href="{{ route('tasks.index') }}"
                class="form-page-back"
            >
                ← Back to Tasks
            </a>

        </header>


        {{-- =====================================================
             ADD TASK FORM
        ====================================================== --}}
        <section class="form-container">

            {{-- Form Header --}}
            <div class="form-header">

                <div class="form-header-icon">
                    +
                </div>

                <div>

                    <h1>Add New Task</h1>

                    <p>
                        Create a task and keep track of your goals.
                    </p>

                </div>

            </div>


            {{-- =================================================
                 VALIDATION ERRORS
            ================================================== --}}
            @if($errors->any())

                <div class="form-error-box">

                    <strong>
                        Please fix the following errors:
                    </strong>

                    <ul>

                        @foreach($errors->all() as $error)

                            <li>
                                {{ $error }}
                            </li>

                        @endforeach

                    </ul>

                </div>

            @endif


            {{-- =================================================
                 TASK FORM
            ================================================== --}}
            <form
                action="{{ route('tasks.store') }}"
                method="POST"
                class="task-form"
            >

                @csrf


                {{-- =============================================
                     TASK NAME
                ============================================== --}}
                <div class="form-group">

                    <label for="task_name">
                        Task Name
                    </label>

                    <input
                        type="text"
                        id="task_name"
                        name="task_name"
                        value="{{ old('task_name') }}"
                        placeholder="Enter task name"
                        required
                    >

                    @error('task_name')

                        <span class="form-error">
                            {{ $message }}
                        </span>

                    @enderror

                </div>


                {{-- =============================================
                     DESCRIPTION
                ============================================== --}}
                <div class="form-group">

                    <label for="description">
                        Description
                    </label>

                    <textarea
                        id="description"
                        name="description"
                        rows="5"
                        placeholder="Enter task description"
                    >{{ old('description') }}</textarea>

                    @error('description')

                        <span class="form-error">
                            {{ $message }}
                        </span>

                    @enderror

                </div>


                {{-- =============================================
                     STATUS + DUE DATE
                ============================================== --}}
                <div class="form-row">

                    {{-- Status --}}
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
                                {{ old('status', 'Pending') === 'Pending' ? 'selected' : '' }}
                            >
                                Pending
                            </option>

                            <option
                                value="Completed"
                                {{ old('status') === 'Completed' ? 'selected' : '' }}
                            >
                                Completed
                            </option>

                        </select>

                    </div>


                    {{-- Due Date --}}
                    <div class="form-group">

                        <label for="due_date">
                            Due Date
                        </label>

                        <input
                            type="date"
                            id="due_date"
                            name="due_date"
                            value="{{ old('due_date') }}"
                        >

                        @error('due_date')

                            <span class="form-error">
                                {{ $message }}
                            </span>

                        @enderror

                    </div>

                </div>


                {{-- =============================================
                     FORM ACTION
                ============================================== --}}
                <div class="form-actions">

                    <button
                        type="submit"
                        class="save-button"
                    >
                        ✓ Save Task
                    </button>

                </div>

            </form>

        </section>


        {{-- =====================================================
             FOOTER
        ====================================================== --}}
        <footer class="footer">

            <span>♥</span>

            Small steps make big progress

            <span>♥</span>

        </footer>

    </main>

</div>

</body>
</html>