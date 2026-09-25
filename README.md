# 📋 Personal Task Manager

A simple Personal Task Manager built using Laravel. It allows users to create, view, edit, delete, search, and manage their tasks.

## 📌 Project Information

- **Project Code:** WST21-PM-2026-SF
- **Student Name:** Angel Juliette Catubig
- **Course & Year:** BSIT - 2nd Year
- **Database Used:** SQLite

## ✨ Required Features

The system allows the user to:

- ➕ **Add Task** – Create a new task.
- 👀 **View Tasks** – Display all saved tasks.
- ✏️ **Edit Task** – Update task information.
- 🗑️ **Delete Task** – Remove a task.
- 🔄 **Update Status** – Set a task as **Pending** or **Completed**.

## 🚀 Additional Features

The project also includes:

- 🔍 **Task Search** – Search tasks by task name.
- 📅 **Due Date** – Set a due date for each task.
- 📊 **Dashboard Statistics** – View total, pending, and completed task counts.
- ⚠️ **Delete Confirmation** – Confirm before deleting a task.
- 📱 **Responsive Design** – Interface adapts to smaller screens.

## 📝 Task Fields

The `tasks` table contains:

- 🆔 `id`
- 📌 `task_name`
- 📄 `description`
- 🔖 `status`
- 📅 `due_date`
- 🕓 `created_at`
- 🕓 `updated_at`

## 🛠️ Technologies Used

- Laravel
- PHP
- Blade
- SQLite
- HTML
- CSS
- JavaScript

## 🗄️ Database

SQLite stores the task records, including the task name, description, status, and due date.

## 🏗️ Project Structure

The project follows the basic Laravel flow:

**Routes → Controller → Model → Database → Blade**

- **Routes** – Handles the URLs and directs requests to the appropriate controller methods.
- **Controller** – Handles task operations such as creating, viewing, updating, and deleting tasks.
- **Model** – The `Task` model communicates with the database and defines the fields that can be created or updated.
- **Database** – SQLite stores the task records.
- **Blade Views** – Blade templates provide the user interface for viewing, adding, and editing tasks.

## 🎯 Purpose

This project was created as a Laravel CRUD application to demonstrate the use of a database, model, controller, routes, and Blade views in developing a personal task management system.

## 📸 Screenshots for the Additional Features:

🔍 Task Search

<img width="600" height="284" alt="Task-Search" src="https://github.com/user-attachments/assets/3ab4661e-7fea-45f1-ab3f-fa8c8de83e2d" />

<br><br>

📅 Due Date

<img width="600" height="450" alt="Due-Date" src="https://github.com/user-attachments/assets/33668983-2e05-4796-9cf9-bc012e3700d2" />

<br><br>

📊 Dashboard Statistics

<img width="600" height="115" alt="Dashboard-Statistics" src="https://github.com/user-attachments/assets/2f357d17-7366-4004-a4df-28328ccbc3ae" />

<br><br>

⚠️ Delete Confirmation

<img width="600" height="289" alt="Delete-Confirmation" src="https://github.com/user-attachments/assets/a2f0cc7d-2fb3-49a3-a500-941f5a7c38e3" />

<br><br>

📱 Responsive Design

<img width="300" height="432" alt="Responsive-Design" src="https://github.com/user-attachments/assets/3d56087f-f3f1-4e0a-8ab7-2682e637eb47" />
