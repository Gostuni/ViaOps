# ViaOps - Internal Operations Management Application

## Overview

ViaOps is a modern, robust internal operations management application built on the Laravel 12 framework. It leverages a full TALL stack (Tailwind CSS, Alpine.js, Livewire, and Laravel) to provide a reactive, single-page application experience with the power and simplicity of a traditional monolithic backend.

This project is designed with best practices, including a clean architecture, comprehensive testing, and a streamlined development environment using Laravel Sail (Docker). It serves as an excellent example of a professional, enterprise-ready web application.

## Key Features & Technology

- **Backend:** PHP 8.3 / Laravel 12
- **Frontend:**
  - **Livewire 3:** For building dynamic, reactive interfaces directly in PHP.
  - **Alpine.js:** For lightweight client-side interactivity.
  - **Tailwind CSS:** A utility-first CSS framework for rapid UI development.
  - **Vite:** For lightning-fast frontend asset bundling.
- **Authentication:** Handled by **Laravel Fortify**, providing a secure and customizable authentication backend.
- **Database:** Utilizes Laravel's **Eloquent ORM**. The schema is managed through version-controlled migration files.
- **Development Environment:** Powered by **Laravel Sail**, which provides a complete Docker-based development environment.
- **Testing:** A comprehensive test suite is written using **Pest** and **PHPUnit**.
- **CI/CD:** Includes a pre-configured **GitHub Actions** workflow for running tests automatically on push.

## Project Structure

The application follows the standard Laravel directory structure:

- `app/`: Contains the core application logic, including Models, HTTP Controllers, and Livewire Components.
- `bootstrap/`: Contains application bootstrapping scripts.
- `config/`: Stores all application configuration files.
- `database/`: Holds database migrations, seeders, and factories.
- `public/`: The web server's document root.
- `resources/`: Contains frontend assets (CSS, JS) and Blade view templates.
- `routes/`: All application route definitions.
- `storage/`: Contains logs, file caches, and other framework-generated files.
- `tests/`: Contains all automated tests (Feature and Unit).

## Getting Started

### Prerequisites

- Docker Desktop
- Composer
- Node.js & NPM

### Installation & Setup

1.  **Clone the repository:**
    ```bash
    git clone <repository-url>
    cd ViaOps
    ```

2.  **Install Dependencies:**
    ```bash
    composer install
    npm install
    ```

3.  **Environment Configuration:**
    Copy the example environment file and generate an application key.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *Update the `.env` file with your specific database, mail, and other service credentials.*

4.  **Start the Development Environment:**
    Run the Laravel Sail containers in the background.
    ```bash
    ./vendor/bin/sail up -d
    ```

5.  **Run Database Migrations:**
    Apply the database schema to your configured database.
    ```bash
    ./vendor/bin/sail artisan migrate
    ```

6.  **Build Frontend Assets:**
    Compile the frontend assets using Vite. For development, you can run the dev server.
    ```bash
    npm run dev
    ```

7.  **Access the Application:**
    The application should now be available at `http://localhost`.

## Running Tests

To run the full test suite, use the following Sail command:

```bash
./vendor/bin/sail artisan test
```
