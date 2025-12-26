# Gada Electronics - Authentication & Messaging System

## ✅ Fully Functional Features

### 1. **User Registration**
- **Route**: `POST /register`
- **Controller Method**: `AuthController@form`
- **What it does**:
  - Validates user input (name, email, phone, password)
  - Checks if email already exists in database
  - Creates new user with hashed password in `users` table
  - Automatically logs in the user
  - Redirects to home page with success message

**Database Table**: `users`
- `id` (auto-increment)
- `name` (string)
- `email` (unique string)
- `phone` (string, nullable)
- `password` (hashed)
- `timestamps`

### 2. **User Login**
- **Route**: `POST /login`
- **Controller Method**: `AuthController@form_data`
- **What it does**:
  - Validates email and password
  - Uses Laravel's `Auth::attempt()` to verify credentials
  - Checks against `users` table in database
  - Regenerates session for security
  - Redirects to home on success
  - Shows error message if credentials don't match

### 3. **User Logout**
- **Route**: `POST /logout`
- **Controller Method**: `AuthController@logout`
- **What it does**:
  - Logs out the authenticated user
  - Invalidates the current session
  - Regenerates CSRF token
  - Redirects to home page

### 4. **Contact Form / Send Message**
- **Route**: `POST /contact`
- **Controller Method**: `AuthController@contactform`
- **What it does**:
  - Validates contact form data
  - Saves message to `contacts` table
  - Redirects with success message

**Database Table**: `contacts`
- `fname` (string)
- `lname` (string)
- `email` (string)
- `phone` (biginteger)
- `service` (string)
- `message` (string)
- `timestamps`

## 🔐 Security Features

1. **Password Hashing**: All passwords are hashed using `Hash::make()` before storing
2. **CSRF Protection**: All forms include `@csrf` tokens
3. **Session Regeneration**: Sessions are regenerated on login to prevent fixation attacks
4. **Email Validation**: Ensures unique emails in the database
5. **Input Validation**: All user inputs are validated before processing

## 📋 Routes Summary

```php
// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'form_data'])->name('login.submit');
Route::get('/reg', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'form'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Contact Form
Route::post('/contact', [AuthController::class, 'contactform'])->name('contact.submit');

// Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/product', [AuthController::class, 'product'])->name('product');
```

## 🎨 UI Features

### Navigation Bar
- Shows **"Login"** button when user is not authenticated
- Shows **"Logout"** button when user is authenticated
- Works on both desktop and mobile views

### Success Messages
- Displays green notification on successful actions
- Auto-hides after 5 seconds
- Positioned at top-right corner

### Login/Register Page
- Tabbed interface for switching between Login and Register
- Shows validation errors in red
- Shows success messages in green
- Remember me checkbox for login

## 🗄️ Database Tables

### Users Table
Stores registered user accounts with authentication credentials.

### Contacts Table
Stores messages submitted through the contact form.

### Additional Tables
- `logins` - Legacy table (not currently used)
- `registers` - Legacy table (not currently used)

## 🚀 How to Use

### To Register a New User:
1. Go to `/login` or click "Login" in navigation
2. Click on "Register" tab
3. Fill in: Name, Email, Phone, Password, Confirm Password
4. Click "Sign Up"
5. You'll be automatically logged in and redirected to home

### To Login:
1. Go to `/login` or click "Login" in navigation
2. Enter your email and password
3. Optionally check "Remember me"
4. Click "Sign In"
5. You'll be redirected to home page

### To Logout:
1. Click "Logout" button in navigation (visible when logged in)
2. You'll be logged out and redirected to home

### To Send a Message:
1. Scroll to Contact section on home page
2. Fill in: First Name, Last Name, Email, Phone, Service, Message
3. Click "Send Message"
4. Message will be saved to database

## ✨ Testing the Application

1. **Start the server**:
   ```bash
   php artisan serve
   ```

2. **Visit**: `http://localhost:8000`

3. **Test Registration**:
   - Click "Login" → "Register" tab
   - Create a new account
   - Verify you're logged in (see "Logout" button)

4. **Test Login**:
   - Logout first
   - Click "Login"
   - Enter your credentials
   - Verify successful login

5. **Test Contact Form**:
   - Scroll to Contact section
   - Fill and submit the form
   - Check database for the entry

## 📊 Database Verification

To check if data is being saved:

```bash
# Open SQLite database
php artisan tinker

# Check users
DB::table('users')->get();

# Check contacts
DB::table('contacts')->get();
```

## 🎯 All Features Are Working!

✅ Registration saves to database  
✅ Login checks database credentials  
✅ Logout clears session  
✅ Contact form saves to database  
✅ Success/error messages display  
✅ Navigation updates based on auth state  
✅ Password hashing for security  
✅ Form validation  
✅ CSRF protection  

---

**Created**: December 26, 2025  
**Application**: Gada Electronics E-commerce Platform  
**Framework**: Laravel 12
