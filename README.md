# PHP MVC Routing System

## Introduction
This project is a simple and efficient Routing System for a PHP MVC framework. It allows developers to define and manage routes easily while following the Model-View-Controller (MVC) pattern. The system enables clean and structured URL handling, making web applications more maintainable and scalable.

## Features
- **Custom Routing**: Define routes with parameters and handle different HTTP methods.
- **MVC Architecture**: Follows the Model-View-Controller pattern for code organization.
- **Middleware Support**: Allows adding middleware for authentication and other features.
- **Dynamic URL Parameters**: Capture and process URL parameters dynamically.
- **Error Handling**: Custom error pages for 404 and other errors.

## Installation
1. Clone the repository:
   ```sh
   git clone https://github.com/yourusername/your-repo.git
   ```
2. Navigate to the project directory:
   ```sh
   cd your-repo
   ```
3. Install dependencies (if applicable):
   ```sh
   composer install
   ```
4. Configure your `.env` file or `config.php` with the necessary settings.
5. Start the PHP built-in server:
   ```sh
   php -S localhost:8000 -t public
   ```
6. Open `http://localhost:8000` in your browser.

## Usage
### Defining Routes
Routes are defined in the `index.php` file:
```php
$router->get('/', [HomeController::class, 'index']);
$router->post('/submit', [FormController, 'submit']);
$router->get('/user/{id}', [UserController, 'show']);
```

### Controllers
Controllers are located in the `app/Controllers` directory:
```php
class HomeController {
    public function index() {
        return view::make('home');
    }
}
```

### Views
Views are stored in the `views/` directory and can be rendered using:
```php
view::make('home', ['title' => 'Welcome']);
```

## Contact
For any inquiries or support, please open an issue on the repository or reach out via email.

