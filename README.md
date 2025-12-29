# PhotoGenic – Photography Portfolio & Admin Management System

PhotoGenic is a template-based full-stack photography portfolio platform designed to showcase images, manage client interactions, and handle backend operations through a dedicated Admin Panel.
It uses **HTML template editing**, **PHP**, and **MySQL**, making it easy to customize and deploy.

---

## 📌 Features

### 🌐 Frontend – Main Website

* Template-based, responsive photography website
* Portfolio gallery with image categories
* About, Services, Contact pages
* Contact form connected to backend
* Clean and modern UI (from W3Layouts template)
* Configurable structure via `config.php`

### 🔐 Backend – Admin Panel

* Admin login / logout
* Manage gallery images (Add / Update / Delete)
* Manage contact form messages
* Prebuilt admin template components:

  * Charts (ChartJS, Flot)
  * Responsive tables
  * Dropzone upload component
  * Typography, Forms, Maps, Grids
* Secure database connection
* Organized service scripts for CRUD operations

### 🗄️ Database

* MySQL database for storing:

  * Gallery items
  * Contact form submissions
  * Admin accounts
* Easily extendable schema

---

## 📂 Project Structure

```
PhotoGenic/
│
├── Main Website/                     # Frontend (Template Edited)
│   ├── index.html
│   ├── about/
│   ├── services/
│   ├── contact/
│   ├── config.php
│   ├── assets/
│   └── starter-license-W3Layouts
│
├── Admin Panel/                      # Backend Admin Dashboard (Template Edited)
│   ├── index.php
│   ├── login.php
│   ├── logout.php
│   ├── registration.php
│   ├── gallery.php
│   ├── update.php
│   ├── delete.php
│   ├── mail.php
│   ├── mail_compose.php
│   ├── config.php
│   ├── css/
│   ├── js/
│   ├── fonts/
│   ├── images/
│   ├── form_component.php
│   ├── responsive_table.php
│   ├── chartjs.php
│   ├── flot_chart.php
│   ├── grids.php
│   ├── google_map.php
│   └── w3layouts-license
│
├── node_modules/
├── package.json
├── package-lock.json
└── README.md
```

---

## 🛠️ Technologies Used

### Frontend

* HTML (Template Editing)
* CSS
* JavaScript
* W3Layouts Template

### Backend

* PHP
* MySQL
* CRUD operations

### Additional Tools

* Node.js (for template dependencies)
* ChartJS / Flot Charts
* Dropzone File Upload

---

## 🚀 Installation & Setup

### 1. Clone the Repository

```sh
git clone https://github.com/yourusername/PhotoGenic.git
```

### 2. Move the project into your server directory

```
XAMPP → htdocs/
WAMP  → www/
```

### 3. Import the Database

1. Open **phpMyAdmin**
2. Create a database named:

```
photogenic
```

3. Import the SQL file:

```
photogenic.sql
```

### 4. Configure Database Credentials

Edit these files:

```
Main Website/config.php
Admin Panel/config.php
```

Update:

```php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "photogenic";
```

### 5. Run the Application

Frontend:

```
http://localhost/PhotoGenic/Main Website/
```

Admin Panel:

```
http://localhost/PhotoGenic/Admin Panel/
```

---

## 📸 Screenshots (Optional Section)

<img width="1915" height="942" alt="Screenshot 2025-12-29 125631" src="https://github.com/user-attachments/assets/3c166913-874b-4b63-95be-e75772bdcba1" />
<img width="1899" height="925" alt="Screenshot 2025-11-09 195000" src="https://github.com/user-attachments/assets/de279dd8-4de5-4259-a03f-c50fe9460078" />
<img width="1899" height="927" alt="Screenshot 2025-11-09 195254" src="https://github.com/user-attachments/assets/0efd1c35-5dfc-4206-9beb-2c594aa8c991" />
<img width="1380" height="764" alt="Screenshot 2025-11-09 195604" src="https://github.com/user-attachments/assets/7f09e060-4ae0-4b59-9561-07bd80981cb8" />
<img width="1282" height="584" alt="Screenshot 2025-11-09 195845" src="https://github.com/user-attachments/assets/38980b58-1627-4f75-859f-e6e72537fe90" />
<img width="1919" height="1022" alt="Screenshot 2025-11-09 195953" src="https://github.com/user-attachments/assets/7c9fbb30-57d7-4768-8422-bfe8cb41cd54" />
<img width="1920" height="1080" alt="Screenshot (379)" src="https://github.com/user-attachments/assets/cd973ffb-c0c9-4c43-b32b-4a6bb9789307" />

---

## 📈 Future Enhancements

* Admin role management
* Cloud image uploads (Cloudinary / AWS S3)
* API-based backend
* Email notifications for contact/booking
* Complete redesign with React + PHP/Laravel backend

---

## 👨‍💻 Author

**Om Gaikwad**
Aspiring Software Developer
Frontend | Backend | PHP | Java | SQL | Template Editing

GitHub: [https://github.com/OMG0510](https://github.com/OMG0510)
LinkedIn: [https://linkedin.com/in/om-gaikwad-jspm](https://linkedin.com/in/om-gaikwad-jspm)

---
