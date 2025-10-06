# Laravel Flutter Driver Registration System

Complete driver registration system with Laravel backend API and Flutter frontend.

## 🏗️ Project Structure
- **backend/** - Laravel API with Sanctum authentication
- **frontend/** - Flutter mobile application  
- **docs/** - API documentation

## 🚀 Quick Start

### Backend Setup
```bash
cd backend
composer install
cp .env.example .env
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

## 📚 Documentation
See [API Documentation](docs/API.md) for endpoint details.

## ✨ Features
- Multi-step user registration (Personal Info → Car Info → Documents)
- Profile management with section updates
- File upload for documents and car images
- Sanctum authentication