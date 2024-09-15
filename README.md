# Student Management System (CRUD) in Laravel 11

![Students](https://github.com/user-attachments/assets/b3b325a0-5ca3-48d0-b085-8ba68090ae90)

## Overview

This is a simple **Student Management System** built using **Laravel 11**, designed for a job interview. The application includes basic CRUD (Create, Read, Update, Delete) functionalities for managing student records.

Due to the limited timeframe (half a day) available for the interview, this project focuses on implementing essential CRUD operations efficiently.

## Features

- **List Students**: Displays a list of all students.
- **Create Student**: Allows the addition of a new student.
- **Edit Student**: Enables editing an existing student's information.
- **Delete Student**: Provides the option to remove a student record.

## Prerequisites

Before running this project, make sure you have the following installed:

- PHP (>= 8.0)
- Composer
- Laravel 11
- SQLite (used as the database)

## Installation

Follow these steps to set up the project:

1. Clone the repository:
    ```bash
    git clone https://github.com/Athis97/simple-crud.git
    cd student-crud-laravel
    ```

2. Install the project dependencies:
    ```bash
    composer install
    ```

3. Set up the `.env` file:
    - Copy the example environment file:
      ```bash
      cp .env.example .env
      ```
    - Update your database settings for SQLite in the `.env` file:
      ```env
      DB_CONNECTION=sqlite
      DB_DATABASE=/absolute/path/to/database.sqlite
      ```

4. Create the SQLite database file:
    ```bash
    touch database/database.sqlite
    ```

5. Generate the application key:
    ```bash
    php artisan key:generate
    ```

6. Run the database migrations:
    ```bash
    php artisan migrate
    ```

7. Start the local development server:
    ```bash
    php artisan serve
    ```

The application should now be running at `http://localhost:8000`.

## Usage

- To view the list of students, navigate to `http://localhost:8000/students`.
- You can add, edit, or delete students from this page.

## Code Structure

- **Routes**: Defined in `routes/web.php`.
- **Controllers**: All CRUD logic is handled by `StudentController.php`.
- **Views**: Blade templates are used for the frontend, located in `resources/views/students/`.
- **Models**: The `Student.php` model defines the structure of the student data.

## Project Structure

```bash
app/
├── Http/
│   ├── Controllers/
│   │   └── StudentController.php
│   └── Models/
│       └── Student.php
resources/
├── views/
│   └── students/
│       ├── index.blade.php
│       ├── create.blade.php
│       ├── edit.blade.php
routes/
└── web.php
