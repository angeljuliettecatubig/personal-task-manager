# Personal Task Manager

A simple Personal Task Manager built using Laravel. It allows users to create, view, edit, delete, search, and manage their tasks.

## Project Information

**Project Code:** WST21-PM-2026-SF  
**Student Name:** Angel Juliette Catubig  
**Course & Year:** BSIT 2 - SEC 10  
**Database Used:** SQLite

## Required Features

The system allows the user to:

- **Add Task** – Create a new task.
- **View Tasks** – Display all saved tasks.
- **Edit Task** – Update task information.
- **Delete Task** – Remove a task.
- **Update Status** – Set a task as **Pending** or **Completed**.

## Additional Features

The project also includes:

- **Task Search** – Search tasks by task name.
- **Due Date** – Set a due date for each task.
- **Dashboard Statistics** – View total, pending, and completed task counts.
- **Delete Confirmation** – Confirm before deleting a task.
- **Responsive Design** – Interface adapts to smaller screens.

## Screenshots

### 1. Task Dashboard

<!-- Add your dashboard screenshot here -->

### 2. Add Task

<!-- Add your Add Task screenshot here -->

### 3. Edit Task

<!-- Add your Edit Task screenshot here -->

### 4. Delete Confirmation

<!-- Add your Delete Confirmation screenshot here -->

### 5. Task Search

<!-- Add your Search screenshot here -->

## Technologies Used

- Laravel
- PHP
- Blade
- SQLite
- HTML
- CSS
- JavaScript

## Laravel Structure

The project follows the basic Laravel flow:

**Routes → Controller → Model → Database → Blade**

### Routes
Handles the URLs and directs requests to the appropriate controller methods.

### Controller
Handles task operations such as creating, viewing, updating, and deleting tasks.

### Model
The `Task` model communicates with the database and defines the fields that can be created or updated.

### Database
SQLite stores the task records, including the task name, description, status, and due date.

### Blade Views
Blade templates provide the user interface for viewing, adding, and editing tasks.

## Task Fields

The `tasks` table contains:

- `id`
- `task_name`
- `description`
- `status`
- `due_date`
- `created_at`
- `updated_at`