# 🚆 Railway Reservation System

[![Laravel](https://img.shields.io/badge/Laravel-11-orange?logo=laravel&logoColor=white)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-8.2-blue?logo=php&logoColor=white)](https://www.php.net/)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5-purple?logo=bootstrap&logoColor=white)](https://getbootstrap.com/)
[![MySQL](https://img.shields.io/badge/MySQL-8-blue?logo=mysql&logoColor=white)](https://www.mysql.com/)
[![License](https://img.shields.io/badge/License-MIT-green)](LICENSE)

A *Laravel-based Train Ticket Booking System* designed to provide *seamless ticket booking*, train schedule management, and passenger handling.  
Distinct dashboards for *Admin* and *Passenger* ensure secure and smooth operations.

---
![Homepage](public/images/screenshot/homepage.png)
![Train Schedule](public/images/screenshot/schedule.png)

## 👥 Team Members & Roles
| Name | Role |
|------|------|
| *Md Naim Uddin Mozumdar* | Team Leader & Developer |
| *Syed Nasibur Rahaman Ratul* | Backend Developer |
| *Shamraj Deb Nath* | Frontend Developer |
| *Shakwat Azam Shagor* | UI/UX Designer |

---

## 📌 Features

### 1️⃣ User Authentication
- Sign up, login, logout, profile update  
- Secure password hashing & validation  
- Admin & Passenger dashboards  

### 2️⃣ Train Schedule Module
- Train number, name, stops, departure & arrival times  
- Route mapping: Source → Destination with intermediate stations  

### 3️⃣ Ticket Booking System
- Select date, train, class, and number of passengers  
- Booking records stored for users & admin view  
- Automatic *E-ticket* generation with *PNR*  

### 4️⃣ Seat Availability Checker
- Classes: AC, Sleeper, General, etc.  

### 5️⃣ Fare Calculator
- Inputs: Distance, class type, passenger age  
- Optional discounts for children & senior citizens  

### 6️⃣ Admin Panel
- Add/edit trains, view bookings, manage users  
- Revenue & usage reports  

### 7️⃣ Passenger Module
- Name, age, ID proof, contact details  
- Searchable by train/date  

### 8️⃣ Ticket Cancellation & Refund
- Rules based on booking status & timing  

---

## 🛠 Technologies Used
- *Laravel 11* – Backend MVC  
- *Blade Templates* – Frontend Views  
- *Bootstrap 5* – Responsive Design  
- *MySQL* – Database  
- *PHP 8.2+* – Core Language  
- *Git* – Version Control  

---
🎯 Future Improvements

💳 Online Payment Gateway (bKash, Nagad, Card)

📧 SMS / Email Notifications

📊 Advanced Reports & Analytics

🌐 Multi-language Support

## ⚙ Installation Guide

1. *Clone the repository*  
```bash
git clone https://github.com/your-repo/railway-management-system.git
cd railway-management-system

2. Install dependencies
composer install
npm install && npm run dev

3.Environment setup
 cp .env.example .env
php artisan key:generate

Update database credentials in .env.

4.Run migrations
  php artisan migrate

5.Start server
 php artisan serve


Visit http://127.0.0.1:8000

📞 Contact

📧 Email: uddinmdnaim10@gmail.com

📱 Phone: +8801833515057



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
