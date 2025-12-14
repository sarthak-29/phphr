# PHPHR – Open Source HR Management Software

PHPHR is a Human Resource Management (HRM) platform available in two
deployment models:

• PHPHR Open-Source – A free, self-hosted edition designed for
  organizations that want full control over their hosting environment
  and HR data.

• PHPHR Cloud – A fully managed, enterprise-grade HRMS that provides
  automatic updates, enhanced security, scalability, backups, and
  dedicated support, allowing organizations to focus on HR operations
  without managing servers or infrastructure.


---

## 🚀 Features (Open-Source Edition)

- Employee Management
- Attendance Tracking
- Leave Management
- Payroll Management
- HR Dashboard
- Secure Login System

---

## ☁ Deployment Models

PHPHR is available in two deployment models:

- **PHPHR Open-Source** – Free, self-hosted HR software
- **PHPHR Cloud** – Fully managed, enterprise-grade HRMS

This flexibility allows organizations to choose the deployment approach that
best aligns with their hosting preferences, data governance policies, and
long-term scalability goals.

---

## 🛠 Technology Stack

- PHP 7.4+ (PHP 8+ recommended)
- MySQL / MariaDB
- Apache or Nginx
- Bootstrap-based UI

---

## 📦 Installation


1. Download the PHPHR Open-Source package and extract it into your
   web server root directory (for example: htdocs, www, or public_html).

2. Create a new MySQL / MariaDB database.
   (UTF8MB4 character set is recommended.)

3. Import the database schema using the SQL file located at:
       /database/phphr_install.sql

4. Open the database configuration file:
       /app/config/database.php

   Update the following database credentials:
       DB_HOST
       DB_NAME
       DB_USER
       DB_PASS

5. Open the application configuration file:
       /app/config/config.php

   Update company details and HR system settings as required.

6. Open your browser and access PHPHR using:
       http://localhost/your-project-folder/public/

7. Log in using the default admin credentials and
   change the password immediately after first login.

---

## ☁ PHPHR Cloud

PHPHR Cloud is a fully managed, enterprise-grade HR management solution built
for growing and large organizations that require scalability, reliability,
and minimal infrastructure management. With PHPHR Cloud, businesses benefit
from automatic updates, secure cloud hosting, data backups, performance
optimization, and ongoing platform enhancements.

The cloud edition eliminates the need for server maintenance and technical
overhead, enabling HR teams to focus entirely on workforce management, process
efficiency, and organizational growth.


## 🎥 Demo Video

Watch the official PHPHR demo walkthrough to explore employee management,
attendance tracking, leave workflows, payroll processing, and dashboard
features in action:

▶️ https://youtu.be/nfCiNBBcwec?si=ggUVwILo-NG2rlf2

## 🌐 Links

- Website: https://www.phphr.com  
- Live Demo: https://www.phphr.com/hr-software-demo/  
- Download: https://www.phphr.com/download-hr-software/

---

## 🤝 Contributing

Contributions are welcome!  
You can help by submitting bug reports, feature requests, or pull requests to
improve PHPHR Open Source.

---

## 📄 License

PHPHR is released under the **MIT Open Source License**.  
You are free to use, modify, rebrand, and deploy it commercially, provided this
copyright notice is preserved.

---

⭐ If you find PHPHR useful, please **star the repository** to support the project!
