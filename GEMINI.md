# Project Overview: TryIt - Cleaning Service Platform

A modern Laravel-based web application designed for a cleaning service provider. The project utilizes a cutting-edge stack featuring file-based routing, a powerful admin panel, and interactive Livewire components.

## Main Technologies
- **Framework:** Laravel 13 (Backend)
- **Admin Panel:** Filament v5 (Resource management for Orders, Posts, Feedback, etc.)
- **Routing:** Laravel Folio (File-based routing in `resources/views/pages`)
- **Frontend Interactivity:** Livewire v4 & Alpine.js
- **Styling:** Tailwind CSS v4 with Vite 8
- **Testing:** Pest PHP
- **Media Management:** Spatie Laravel Media Library
- **Icons:** Blade Lucide Icons

## Building and Running

### Prerequisites
- PHP 8.2+
- Node.js & Yarn
- SQLite (or another supported database)

### Setup
1. **Install Dependencies:**
   ```bash
   composer install
   yarn install
   ```
2. **Environment Configuration:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. **Database Initialization:**
   ```bash
   touch database/database.sqlite
   php artisan migrate --seed
   php artisan pages:create
   ```

### Development Commands
- **All-in-one Dev:** `composer dev` (runs server, queue, and vite concurrently)
- **Local Server:** `php artisan serve`
- **Frontend Dev:** `npm run dev`
- **Frontend Build:** `npm run build`
- **Run Tests:** `vendor/bin/pest`
- **Fix Style:** `vendor/bin/pint`

## Project Structure & Conventions

### Routing (Laravel Folio)
The project uses **Laravel Folio** for routing. Most public pages are located in `resources/views/pages`. 
- `index.blade.php` -> `/`
- `services.blade.php` -> `/services`
- `blog/index.blade.php` -> `/blog`

### Components (Livewire)
Interactive forms and sections are built as Livewire components:
- **Order Form:** `App\Livewire\Order`
- **Feedback Form:** `App\Livewire\Feedback`
- **Callback Form:** `App\Livewire\Callback`
- **Blog Components:** `App\Livewire\BlogIndex`, `App\Livewire\BlogPosts`

### Admin Panel (Filament)
The administrative interface is accessible (typically at `/admin`) and manages:
- **Feedback:** User submissions and reviews.
- **Posts:** Blog content.
- **Orders:** Service requests.
- **Products/Services:** Portfolio of offerings.

### Development Standards
- **Testing:** New features should include Pest tests in the `tests/` directory.
- **Styling:** Adhere to Tailwind CSS v4 conventions.
- **Code Quality:** Run `vendor/bin/pint` before committing to ensure PSR-12 compliance.
- **Types:** Use strict typing in PHP classes and Livewire components.
