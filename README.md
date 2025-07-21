\# 📸 Photogenic - Photographer Portfolio Website



Photogenic is a full-stack portfolio website for professional photographers to showcase their work and manage client service requests. Built using HTML, CSS, JavaScript, PHP, and MySQL, this project provides a clean and modern user interface for showcasing portfolios, receiving service inquiries, and administering requests via an admin panel.



\## ✨ Features



\### 🌐 Frontend

\- \*\*Responsive Design\*\*: Mobile-first, modern UI using HTML, CSS, and Bootstrap.

\- \*\*Dynamic Gallery\*\*: Showcase of photography types (wedding, fashion, portrait, etc.).

\- \*\*Blog Section\*\*: Highlight latest news or stories.

\- \*\*Contact Form\*\*: Users can submit service requests.

\- \*\*Testimonials\*\*: Display feedback from happy clients.

\- \*\*Light/Dark Theme Toggle\*\* for improved accessibility.



\### 🔧 Backend (PHP + MySQL)

\- \*\*User Request Form\*\*: Submits and stores user service requests into the database.

\- \*\*Admin Dashboard\*\*:

&nbsp; - View all user requests in a tabular format.

&nbsp; - Delete completed or invalid entries.

&nbsp; - Manage session-based login/logout for secure access.



\## 🛠️ Tech Stack



| Layer     | Technology         |

|-----------|--------------------|

| Frontend  | HTML, CSS, Bootstrap, JavaScript |

| Backend   | PHP                |

| Database  | MySQL              |

| Template  | Customized W3Layouts Template |



\## 📁 Project Structure



```



📦 photogenic/

├── Main Website.html            # Main homepage

├── contact.php                  # Contact form handling

├── index.php                    # Admin login page

├── registration.php            # (Optional) Registration form

├── admin\\\_website.php           # Admin dashboard

├── basic\\\_table.php             # Display of user requests

├── delete.php                  # Delete request handler

├── logout.php                  # Admin logout script

├── config.php                  # DB connection settings

├── assets/                     # Images, CSS, JS libraries

└── README.md                   # This file



````



\## 🔐 Admin Panel



\- \*\*Login Page\*\*: `index.php`

\- \*\*Dashboard\*\*: `admin\_website.php`

\- \*\*View Requests\*\*: `basic\_table.php`

\- \*\*Logout\*\*: `logout.php`

\- \*\*Security\*\*: Simple session-based access control.



\## ⚙️ Setup Instructions



1\. \*\*Clone the repository\*\*

&nbsp;  ```bash

&nbsp;  git clone https://github.com/yourusername/photogenic.git

&nbsp;  cd photogenic

````



2\. \*\*Configure Database\*\*



&nbsp;  \* Create a MySQL database, e.g., `photogenic\_db`.

&nbsp;  \* Import the SQL schema (if available) or create a `requests` table matching your form fields.

&nbsp;  \* Update `config.php` with your DB credentials.



3\. \*\*Deploy Project\*\*



&nbsp;  \* Place the project folder in your local server directory (e.g., `htdocs` for XAMPP).

&nbsp;  \* Start Apache and MySQL via XAMPP or equivalent.



4\. \*\*Access the Website\*\*



&nbsp;  \* Main Site: \[http://localhost/photogenic/Main%20Website.html](http://localhost/photogenic/Main%20Website.html)

&nbsp;  \* Admin Login: \[http://localhost/photogenic/index.php](http://localhost/photogenic/index.php)



\## 📜 License



This project is for educational/demo purposes. Some templates and assets are sourced from \[W3Layouts](https://w3layouts.com/).



---

