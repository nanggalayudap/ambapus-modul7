# 📚 AmbaPus — Digital Library System

**AmbaPus** is a **Laravel**-based Digital Library System web application featuring book collection management, borrowing circulation, and Role-Based Access Control (RBAC). This project is configured to run on a serverless architecture using **Vercel** and a managed PostgreSQL database on **Supabase**.

## 🌐 Project Links

* **GitHub Repository:** `https://github.com/nanggalayudap/ambapus-modul7`
* **Live Application (Vercel):** `ambapus-modul7.vercel.app`

## 🛠️ Tech Stack

* **Backend Framework:** Laravel (PHP 8.2+)
* **Frontend & Build Tool:** Blade, Tailwind CSS, Vite
* **Database:** PostgreSQL 
* **Deployment & CI/CD:** GitHub + Vercel

## ✨ Key Features

1. **Authentication & Role-Based Access Control (RBAC):**
   * **Admin:** Manages all book records (create, update, delete), user accounts, and monitors all borrowing transactions.
   * **Librarian (Petugas):** Manages book records and verifies borrowing transactions across all students.
   * **Student (Siswa):** Browses the book catalog and accesses their own borrowing history.
2. **Book Catalog Management:** Structured search and management of the library's book inventory.
3. **Borrowing Transactions:** Recording of book loans and returns with strict per-user access control.
4. **Application Security:** Route protection using authentication middleware and Gates, enforced `HTTPS` scheme in production environments, and isolation of sensitive configuration files.

## 🏗️ Deployment Architecture (CI/CD)

```text
[Developer] --(git push)--> [GitHub Repository] --(Webhook Auto-Build)--> [Vercel Serverless] <---> [Supabase PostgreSQL]
```

* **GitHub:** Hosts the application source code and triggers a webhook on every push to the `main` branch.
* **Vercel:** Builds frontend assets (`npm run build`) and executes the Laravel application via a serverless function (`api/index.php`) in the Singapore region (`sin1`).
* **Supabase:** Provides an external PostgreSQL database accessed via the **Transaction Pooler** (port `6543`) to efficiently handle short-lived serverless connections.

## 💻 Running Locally

### 1. Prerequisites

* PHP $\ge 8.2$ with `pdo_pgsql` and `pgsql` extensions enabled
* Composer
* Node.js & NPM

### 2. Installation

```bash
# Clone the repository
git clone https://github.com/nanggalayudap/ambapus-modul7.git
cd ambapus-modul7

# Install PHP and JavaScript dependencies
composer install
npm install

# Copy the environment file
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 3. Local Database Configuration (`.env`)

Configure the database connection in your `.env` file using Supabase's **Session Pooler (port 5432)**:

```env
DB_CONNECTION=pgsql
DB_HOST=aws-1-ap-southeast-1.pooler.supabase.com
DB_PORT=5432
DB_DATABASE=postgres
DB_USERNAME=postgres.<project-ref>
DB_PASSWORD=<your-database-password>
```

### 4. Migration, Seeding, and Starting the Server

```bash
# Run database migrations and seed initial data
php artisan migrate --seed

# Build frontend assets
npm run build

# Start the local development server
php artisan serve
```

Access the application in your browser at `http://127.0.0.1:8000`.

## 👤 Developer Information

* **Name:** Nanggala Yuda Pratama
* **Course:** Advanced Web-Based Programming 
* **Department:** Information Systems, Universitas Trunojoyo Madura
