<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Personal Task Manager</title>

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


                {{-- SAME LOGO USED ON CREATE / EDIT --}}
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


                <div>

                    <h1>
                        Personal Task Manager
                    </h1>

                    <p class="subtitle">
                        Organize and manage your tasks easily.
                    </p>

                </div>

            </div>


            {{-- PRIMARY ACTION --}}
            <a
                href="{{ route('tasks.create') }}"
                class="add-button"
            >

                <svg viewBox="0 0 24 24" fill="none">

                    <path
                        d="M12 5V19"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                    />

                    <path
                        d="M5 12H19"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                    />

                </svg>

                <span>
                    Add New Task
                </span>

            </a>

        </header>



        {{-- =====================================================
             SUCCESS MESSAGE
        ====================================================== --}}
        @if(session('success'))

            <div class="success-message">

                <span>
                    ✓
                </span>

                {{ session('success') }}

            </div>

        @endif



        {{-- =====================================================
             DASHBOARD STATISTICS
        ====================================================== --}}
        <section class="dashboard">


            {{-- TOTAL --}}
            <div class="stat-card stat-blue">

                <div class="stat-icon">

                    <svg viewBox="0 0 24 24" fill="none">

                        <path
                            d="M7 3.5H17C18.1 3.5 19 4.4 19 5.5V18.5C19 19.6 18.1 20.5 17 20.5H7C5.9 20.5 5 19.6 5 18.5V5.5C5 4.4 5.9 3.5 7 3.5Z"
                            stroke="currentColor"
                            stroke-width="1.8"
                        />

                        <path
                            d="M8.5 8H15.5"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />

                        <path
                            d="M8.5 12H15.5"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                        />

                    </svg>

                </div>


                <div class="stat-content">

                    <span>
                        Total Tasks
                    </span>

                    <strong>
                        {{ $totalTasks }}
                    </strong>

                </div>

            </div>



            {{-- PENDING --}}
            <div class="stat-card stat-pink">

                <div class="stat-icon">

                    <svg viewBox="0 0 24 24" fill="none">

                        <circle
                            cx="12"
                            cy="12"
                            r="8"
                            stroke="currentColor"
                            stroke-width="1.8"
                        />

                        <path
                            d="M12 7V12L15 14"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                    </svg>

                </div>


                <div class="stat-content">

                    <span>
                        Pending
                    </span>

                    <strong>
                        {{ $pendingTasks }}
                    </strong>

                </div>

            </div>



            {{-- COMPLETED --}}
            <div class="stat-card stat-purple">

                <div class="stat-icon">

                    <svg viewBox="0 0 24 24" fill="none">

                        <circle
                            cx="12"
                            cy="12"
                            r="8"
                            stroke="currentColor"
                            stroke-width="1.8"
                        />

                        <path
                            d="M8.5 12L11 14.5L15.5 9.5"
                            stroke="currentColor"
                            stroke-width="1.8"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                        />

                    </svg>

                </div>


                <div class="stat-content">

                    <span>
                        Completed
                    </span>

                    <strong>
                        {{ $completedTasks }}
                    </strong>

                </div>

            </div>

        </section>



        {{-- =====================================================
             TASK SECTION
        ====================================================== --}}
        <section class="tasks-section">


            {{-- TASK HEADER --}}
            <div class="tasks-header">

                <div>

                    <h2 class="tasks-title">
                        My Tasks
                    </h2>

                    <p>
                        Keep track of your daily tasks and progress.
                    </p>

                </div>


                {{-- SEARCH --}}
                <div class="search-box">

                    <svg viewBox="0 0 24 24">

                        <circle
                            cx="11"
                            cy="11"
                            r="6.5"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        />

                        <path
                            d="M16 16L21 21"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                        />

                    </svg>


                    <input
                        type="text"
                        id="task-search"
                        placeholder="Search tasks..."
                        aria-label="Search tasks"
                    >

                </div>

            </div>



            {{-- =================================================
                 TASK LIST
            ================================================== --}}
            <div
                class="tasks-list"
                id="tasks-list"
            >

                @forelse($tasks as $task)


                    <article
                        class="task-card {{ $task->status === 'Completed' ? 'task-completed' : 'task-pending' }}"
                    >


                        <div class="task-card-main">


                            {{-- TASK INFORMATION --}}
                            <div class="task-info">

                                <div class="task-title-row">

                                    <h4>
                                        {{ $task->task_name }}
                                    </h4>

                                </div>


                                {{-- DESCRIPTION --}}
                                @if($task->description)

                                    <p class="task-card-desc">
                                        {{ $task->description }}
                                    </p>

                                @endif


                                {{-- DUE DATE --}}
                                @if($task->due_date)

                                    <div class="task-card-due">

                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                        >

                                            <rect
                                                x="4"
                                                y="5"
                                                width="16"
                                                height="15"
                                                rx="2"
                                                stroke="currentColor"
                                                stroke-width="1.7"
                                            />

                                            <path
                                                d="M8 3V7"
                                                stroke="currentColor"
                                                stroke-width="1.7"
                                                stroke-linecap="round"
                                            />

                                            <path
                                                d="M16 3V7"
                                                stroke="currentColor"
                                                stroke-width="1.7"
                                                stroke-linecap="round"
                                            />

                                            <path
                                                d="M4 10H20"
                                                stroke="currentColor"
                                                stroke-width="1.7"
                                            />

                                        </svg>

                                        Due:
                                        {{ \Carbon\Carbon::parse($task->due_date)->format('M d, Y') }}

                                    </div>

                                @endif

                            </div>



                            {{-- STATUS --}}
                            <div class="task-status">

                                @if($task->status === 'Completed')

                                    <span class="status completed">
                                        Completed
                                    </span>

                                @else

                                    <span class="status pending">
                                        Pending
                                    </span>

                                @endif

                            </div>



                            {{-- ACTIONS --}}
                            <div class="task-card-actions">


                                {{-- EDIT --}}
                                <a
                                    href="{{ route('tasks.edit', $task) }}"
                                    class="action-button edit"
                                    title="Edit task"
                                >

                                    <svg
                                        viewBox="0 0 24 24"
                                        fill="none"
                                    >

                                        <path
                                            d="M4 20H8L18.5 9.5C19.3 8.7 19.3 7.3 18.5 6.5L17.5 5.5C16.7 4.7 15.3 4.7 14.5 5.5L4 16V20Z"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                            stroke-linejoin="round"
                                        />

                                        <path
                                            d="M13.5 6.5L17.5 10.5"
                                            stroke="currentColor"
                                            stroke-width="1.8"
                                        />

                                    </svg>

                                    Edit

                                </a>



                                {{-- DELETE --}}
                                <form
                                    action="{{ route('tasks.destroy', $task) }}"
                                    method="POST"
                                    class="delete-form"
                                >

                                    @csrf

                                    @method('DELETE')


                                    <button
                                        type="submit"
                                        class="action-button delete"
                                        title="Delete task"
                                    >

                                        <svg
                                            viewBox="0 0 24 24"
                                            fill="none"
                                        >

                                            <path
                                                d="M5 7H19"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                stroke-linecap="round"
                                            />

                                            <path
                                                d="M9 7V5H15V7"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                stroke-linecap="round"
                                            />

                                            <path
                                                d="M7 7L8 19H16L17 7"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                stroke-linejoin="round"
                                            />

                                            <path
                                                d="M10 11V16"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                stroke-linecap="round"
                                            />

                                            <path
                                                d="M14 11V16"
                                                stroke="currentColor"
                                                stroke-width="1.8"
                                                stroke-linecap="round"
                                            />

                                        </svg>

                                        Delete

                                    </button>

                                </form>

                            </div>

                        </div>

                    </article>


               @empty

    <div class="empty-state">

        <div class="empty-icon">

            <svg viewBox="0 0 24 24" fill="none">

                <path
                    d="M7 3.5H17C18.1 3.5 19 4.4 19 5.5V18.5C19 19.6 18.1 20.5 17 20.5H7C5.9 20.5 5 19.6 5 18.5V5.5C5 4.4 5.9 3.5 7 3.5Z"
                    stroke="currentColor"
                    stroke-width="1.8"
                />

                <path
                    d="M8.5 8H15.5"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                />

                <path
                    d="M8.5 12H13"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                />

            </svg>

        </div>

        <h3>No tasks yet</h3>

        <p>
            Add your first task to get started.
        </p>

    </div>

@endforelse

            </div>

        </section>



        {{-- =========================
     DELETE CONFIRMATION MODAL
========================== --}}
<div class="modal-overlay" id="delete-modal">

    <div class="modal-box" role="dialog" aria-modal="true" aria-labelledby="delete-modal-title">

        {{-- Warning Icon --}}
        <div class="modal-warning-icon">

            <svg viewBox="0 0 24 24" fill="none">

                <path
                    d="M12 3L21 19H3L12 3Z"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linejoin="round"
                />

                <path
                    d="M12 9V13"
                    stroke="currentColor"
                    stroke-width="1.8"
                    stroke-linecap="round"
                />

                <circle
                    cx="12"
                    cy="16"
                    r="0.8"
                    fill="currentColor"
                />

            </svg>

        </div>


        {{-- Title --}}
        <h3 id="delete-modal-title">
            Delete Task?
        </h3>


        {{-- Description --}}
        <p>
            Are you sure you want to delete this task?
            This action cannot be undone.
        </p>


        {{-- Actions --}}
        <div class="modal-actions">

            <button
                type="button"
                id="delete-cancel"
                class="modal-cancel-button"
            >
                Cancel
            </button>

            <button
                type="button"
                id="delete-confirm"
                class="delete-confirm-button"
            >
                Delete Task
            </button>

        </div>

    </div>

</div>



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



{{-- =========================================================
     JAVASCRIPT
========================================================== --}}
<script>

document.addEventListener('DOMContentLoaded', function () {


    /*
    |--------------------------------------------------------------------------
    | DELETE CONFIRMATION
    |--------------------------------------------------------------------------
    */

    const modal =
        document.getElementById('delete-modal');

    const cancelButton =
        document.getElementById('delete-cancel');

    const confirmButton =
        document.getElementById('delete-confirm');

    let selectedForm = null;


    document.querySelectorAll('.delete-form').forEach(function (form) {

        form.addEventListener('submit', function (event) {

            event.preventDefault();

            selectedForm = form;

            modal.classList.add('active');

        });

    });


    cancelButton.addEventListener('click', function () {

        selectedForm = null;

        modal.classList.remove('active');

    });


    confirmButton.addEventListener('click', function () {

        if (selectedForm) {

            selectedForm.submit();

        }

    });


    modal.addEventListener('click', function (event) {

        if (event.target === modal) {

            selectedForm = null;

            modal.classList.remove('active');

        }

    });


    document.addEventListener('keydown', function (event) {

        if (event.key === 'Escape') {

            selectedForm = null;

            modal.classList.remove('active');

        }

    });



    /*
    |--------------------------------------------------------------------------
    | TASK SEARCH
    |--------------------------------------------------------------------------
    | Searches ONLY the task name.
    |--------------------------------------------------------------------------
    */

    const searchInput =
        document.getElementById('task-search');

    const taskCards =
        document.querySelectorAll('.task-card');


    if (searchInput) {

        searchInput.addEventListener('input', function () {

            const searchText =
                this.value.toLowerCase().trim();


            taskCards.forEach(function (card) {

                const taskNameElement =
                    card.querySelector('.task-title-row h4');


                const taskName =
                    taskNameElement
                        ? taskNameElement.textContent.toLowerCase().trim()
                        : '';


                card.style.display =
                    taskName.includes(searchText)
                        ? ''
                        : 'none';

            });

        });

    }

});

</script>


</body>
</html>