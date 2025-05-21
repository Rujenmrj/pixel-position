# Pixel Position 🎯

**Pixel Position** is a Laravel-based web application designed to manage and track pixel placements on a digital canvas. It allows users to interact with a grid-based interface, placing and manipulating pixels to create collaborative artwork or designs.

---

## 🚀 Features

- **User Authentication**: Secure login and registration system.
- **Interactive Canvas**: Real-time pixel placement on a shared grid.
- **History Tracking**: Maintain a history of pixel changes for each user.
- **Responsive Design**: Optimized for both desktop and mobile devices.
- **Admin Panel**: Manage users, monitor activity, and moderate content.

---

## 🛠️ Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Rujenmrj/pixel-position.git
   cd pixel-position
   ```

2. **Install Dependencies**:
   ```bash
   composer install
   npm install
   ```

3. **Environment Setup**:
   - Copy the example environment file and configure it:
     ```bash
     cp .env.example .env
     ```
   - Generate the application key:
     ```bash
     php artisan key:generate
     ```

4. **Database Migration**:
   - Ensure your database is configured in the `.env` file.
   - Run migrations:
     ```bash
     php artisan migrate
     ```

5. **Build Assets**:
   ```bash
   npm run dev
   ```

6. **Start the Development Server**:
   ```bash
   php artisan serve
   ```

   The application will be accessible at `http://localhost:8000`.

---

## 📁 Project Structure

- `app/`: Contains the core application code.
- `bootstrap/`: Handles application bootstrapping.
- `config/`: Configuration files.
- `database/`: Database migrations and seeders.
- `public/`: Publicly accessible files.
- `resources/`: Views, CSS, and JavaScript assets.
- `routes/`: Web and API route definitions.
- `storage/`: Logs and compiled templates.
- `tests/`: Automated tests.

---

## 🧪 Testing

Run the test suite using PHPUnit:

```bash
php artisan test
```

Ensure all tests pass to confirm the application's integrity.

---

## 🤝 Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or bug fixes.
