
# 📨 SD Stroke - Laravel Contact Form with PHPMailer

This project is a Laravel 11 application with a simple frontend and a fully functional contact form using **PHPMailer** to send emails via **Gmail SMTP**.
No database is used. The form submits via AJAX and delivers messages to a Gmail inbox.

---

## 🚀 Features

- Laravel 11 (Blade templating)
- PHPMailer integration via Gmail SMTP
- Frontend: HTML/CSS/JS with AJAX
- JSON response with success popup
- No database or migrations needed

---

## 🧰 Technologies Used

- Laravel 11
- PHPMailer
- Blade templates
- JavaScript (AJAX)
- Gmail SMTP

---

## 📦 Installation Guide

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/sd_stroke.git
cd sd_stroke
```

### 2. Install Laravel & PHPMailer

```bash
composer install
composer require phpmailer/phpmailer
```

### 3. Create .env File

```bash
cp .env.example .env
```

Update `.env` and add the following for PHPMailer:

```env
MAIL_SMTP_HOST=smtp.gmail.com
MAIL_SMTP_PORT=587
MAIL_SMTP_ENCRYPTION=tls
MAIL_SMTP_USERNAME= your mail
MAIL_SMTP_PASSWORD='your password'
MAIL_SENDER_NAME="Website Contact Form"
MAIL_RECEIVER_EMAIL= your mail
```

🔐 **Use a Gmail App Password** from https://myaccount.google.com/apppasswords

---

## ✉️ Configure MailController

In `app/Http/Controllers/MailController.php`, use:

```php
$mail->isSMTP();
$mail->Host       = env('MAIL_SMTP_HOST');
$mail->SMTPAuth   = true;
$mail->Username   = env('MAIL_SMTP_USERNAME');
$mail->Password   = env('MAIL_SMTP_PASSWORD');
$mail->SMTPSecure = env('MAIL_SMTP_ENCRYPTION');
$mail->Port       = env('MAIL_SMTP_PORT');

$mail->setFrom(env('MAIL_SMTP_USERNAME'), env('MAIL_SENDER_NAME'));
$mail->addReplyTo($email, $name);
$mail->addAddress(env('MAIL_RECEIVER_EMAIL'));
```

---

## ▶️ Run the Project

```bash
php artisan serve
```

Then open in browser: [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## ❌ No Database Required

No need to run migrations. This app does not use any database.

```bash
# Skip this
php artisan migrate
```

---

## 📁 Project Structure

SD_Stroke Project Structure
===========================

Project root: sd_stroke/

├── app/
│   └── Http/
│       └── Controllers/
│           └── MailController.php         # Handles PHPMailer logic and email sending

├── bootstrap/
│   └── app.php                            # Laravel bootstrap file

├── public/
│   ├── css/
│   │   └── style.css                      # Custom frontend styling
│   ├── images/                            # Any images (logo, background, etc.)
│   └── index.php                          # Laravel public entry point

├── resources/
│   └── views/
│       ├── index.blade.php                # Main HTML view (contact form, frontend)
│       └── emails/
│           └── contact.blade.php          # Optional: email HTML template

├── routes/
│   └── web.php                            # Route definition for GET / and POST /sendmail

├── storage/
│   └── logs/
│       └── laravel.log                    # Laravel log file

├── .env                                   # Environment file (contains SMTP credentials)
├── .gitignore                             # Recommended to ignore /vendor, .env, etc.
├── composer.json                          # Dependencies and autoload
├── package.json                           # (Optional) for frontend tooling
├── README.md / README_SD_Stroke.txt       # Documentation file

---

Folders you mostly work with:
- app/Http/Controllers/
- resources/views/
- public/css/
- routes/web.php
- .env

---

## 🛡️ License

MIT License

---

## 👨‍💻 Developed by

**Krunal Christian**  
📧 [kunal.christian234@gmail.com](mailto:kunal.christian234@gmail.com)
