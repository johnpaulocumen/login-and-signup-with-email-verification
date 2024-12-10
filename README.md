
# Login and Signup System with Email Verification

This project is a PHP-based login and signup system that includes email verification functionality. The application allows users to create an account, log in, reset their password, and verify their email address.

## Features

- **User Authentication:**
  - Login and signup functionality with secure password handling.
- **Email Verification:**
  - Sends a verification email to the user's registered email address.
- **Password Reset:**
  - Allows users to reset their password via email.
- **Secure Operations:**
  - Uses best practices for secure user management.

## Project Structure

- **Authentication Logic:**
  - `authentication.php` - Handles user authentication processes.
  - `logincode.php` - Handles the logic for login functionality.
  - `signup.php` - User signup form.
  - `verify-email.php` - Handles email verification.

- **Password Management:**
  - `password-change.php` - Allows users to change their password.
  - `password-reset.php` - Password reset form.
  - `password-reset-code.php` - Handles password reset logic.

- **Dashboard:**
  - `dashboard.php` - User dashboard after successful login.

- **Includes:**
  - `includes/header.php` - Header template.
  - `includes/navbar.php` - Navigation bar.
  - `includes/footer.php` - Footer template.

- **Vendor Libraries:**
  - Includes PHPMailer for sending emails (`vendor/phpmailer/phpmailer`).

- **Database Connection:**
  - `dbcon.php` - Manages the database connection.

- **Miscellaneous:**
  - `logout.php` - Handles user logout.
  - `index.php` - Entry point for the application.

## Prerequisites

- **PHP**: Version 7.4 or higher.
- **Composer**: Dependency manager for PHP.
- **Database**: MySQL or equivalent.

## Installation

1. Clone the repository or download the ZIP file.
2. Install dependencies using Composer:
   ```bash
   composer install
   ```
3. Set up the database:
   - Create a database and import the provided SQL file.
   - Update the database credentials in `dbcon.php`.

4. Configure email settings in `PHPMailer`:
   - Update SMTP details in `authentication.php`.

5. Launch the application on a local or web server.

## Usage

- Visit the home page (`index.php`) to register or log in.
- Verify your email after registration.
- Use the password reset feature if needed.

## Libraries and Tools Used

- **PHPMailer**: For sending emails.
- **Composer**: For managing dependencies.
- **Bootstrap**: For styling (if applicable).

