# Advanced CRM

A cross-platform Customer Relationship Management (CRM) application built with Flutter frontend and Laravel backend.

## Project Structure

This project consists of two main components:

### Frontend (`/frontend`)

- **Technology**: Flutter (Dart)
- **Platform**: Cross-platform (Android, iOS, Web, Windows, macOS)
- **Description**: A simple CRM cross-platform application built with Flutter
- **Version**: 1.0.0+1

### Backend (`/backend`)

- **Technology**: Laravel (PHP)
- **Framework**: Laravel 12.x
- **Database**: SQLite (default)
- **Description**: RESTful API backend for the CRM application

## Getting Started

### Prerequisites

- PHP 8.2+
- Composer
- Flutter SDK 3.29.3+

### Backend Setup

```bash
cd backend
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```

### Frontend Setup

```bash
cd frontend
flutter pub get
flutter run
```

## Development

This is a basic CRM project structure with:

- Flutter frontend for cross-platform mobile, desktop and web applications
- Laravel backend providing API endpoints
- Standard Laravel authentication and user management

## License

This project is open-sourced software licensed under the MIT license.
