# Simpliest Laravel Service Request

A **minimal Laravel-based service request system**, created as a technical training project to meet recurring client demands for Laravel-based applications — while critically contrasting it with leaner, Unix-style architectures.

---

## Project Context

This system allows users to submit simple service requests and track their status (`Pending`, `Approved`, `Rejected`). It includes:

- Submission form with validation
- Admin interface for managing requests
- Status control and inline editing
- SQLite support for minimal local setup
- Clean Blade views with zero external assets

---

## Training Purpose

This repository was built as a **controlled Laravel training exercise**, to:

- Demonstrate production-readiness in Laravel
- Satisfy Upwork client expectations
- Contrast Laravel’s structure against leaner ShellOps/KISS architectures

---

## Engineering Philosophy: ShellOps vs Laravel

At [Mike Niner Bravog](https://github.com/mikeninerbravog), we follow:

- **KISS** (Keep It Simple, Stupid-Simple)
- **Nixism**: modular, testable pipelines
- **Debianist Discipline**: minimal external dependencies, deterministic builds
- **ShellOps**: agent-based execution, no magic, full I/O control

Laravel diverges from this by design. It introduces:

- Monolithic structure and tight coupling
- Magic routing and implicit behaviors
- Centralized global helpers and dependency injection
- Front-end/back-end blending through Blade and Livewire

### Architectural Comparison

| Architecture                  | Directories | Files  | Notes |
|------------------------------|-------------|--------|-------|
| `ShellOps` (modular Bash)    | 1–2         | 5–10   | Each script does exactly one thing, testable via stdin/stdout |
| `FastAPI + SQLite` (KISS)    | 5–8         | 10–30  | Cleanly modular, RESTful, explicit logic |
| `Laravel 12` (this project)  | **1269**    | **8207** | Full monolithic stack, required even for the simplest CRUD |

> A Laravel skeleton demands **~8000 files** to implement what is fundamentally a single-table CRUD.

---

## 🛠️ Features

- Submit service requests (Name, Email, Title, Description, Category)
- Manage requests: view, edit, delete
- Status management: `Pending`, `Approved`, `Rejected`
- SQLite-ready (just `touch database/database.sqlite`)
- No frontend dependencies (pure Blade)

---

## Quickstart

```bash
git clone https://github.com/mikeninerbravog/laravel-service-request-panel.git
cd laravel-service-request-panel
composer install
cp .env.example .env
touch database/database.sqlite
php artisan migrate
php artisan serve
````

Visit: [http://localhost:8000](http://localhost:8000)

---

## Usage Flow

1. Submit a new service request
2. View and filter request list
3. View full request detail
4. Edit or delete any record
5. Change status via form

---

## Project Layout

```text
app/
  Http/Controllers/SolicitacaoController.php
  Models/Solicitacao.php
resources/
  views/solicitacaos/index.blade.php
                     /create.blade.php
                     /edit.blade.php
                     /show.blade.php
routes/
  web.php
database/
  migrations/
```

---

## Security

* All forms protected with CSRF
* Fields validated on store/update
* Mass-assignment guarded with `$fillable`
* `.env` excluded from version control

---

## License

MIT — free to use, adapt and commercialize.
