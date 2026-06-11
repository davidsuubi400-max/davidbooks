# BookShelf — Open Textbook Library
### A free PHP + MySQL web application for uploading and downloading textbooks

---

## 📁 Project Structure

```
bookshelf/
├── index.php              ← Browse & search page
├── upload.php             ← Upload form page
├── schema.sql             ← Run this once in phpMyAdmin
│
├── api/
│   ├── books.php          ← GET  → returns books as JSON
│   ├── upload.php         ← POST → saves uploaded book
│   ├── download.php       ← GET  → serves PDF file
│   └── delete.php         ← POST → deletes a book
│
├── includes/
│   ├── db.php             ← Database connection (edit credentials here)
│   └── helpers.php        ← Shared utility functions
│
├── assets/
│   ├── css/style.css      ← All styles
│   └── js/
│       ├── app.js         ← Browse page logic
│       └── upload.js      ← Upload form logic
│
└── uploads/               ← Book PDFs and cover images saved here
                              (must be writable by the web server)
```

---

## ⚙️ Setup (XAMPP)

### Step 1 — Copy files
Place the entire `bookshelf/` folder inside:
- **Windows:** `C:\xampp\htdocs\bookshelf\`
- **Mac:**     `/Applications/XAMPP/htdocs/bookshelf/`
- **Linux:**   `/opt/lampp/htdocs/bookshelf/`

### Step 2 — Create the database
1. Start **Apache** and **MySQL** in the XAMPP Control Panel
2. Open **phpMyAdmin**: http://localhost/phpmyadmin
3. Click **New** in the left sidebar
4. Name it `bookshelf` → click **Create**
5. Click the **SQL** tab
6. Paste the contents of `schema.sql` → click **Go**

### Step 3 — Configure database credentials
Open `includes/db.php` and confirm/edit:
```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');   // XAMPP default
define('DB_PASS', '');       // XAMPP default (blank)
define('DB_NAME', 'bookshelf');
```

### Step 4 — Make uploads folder writable
The `uploads/` folder already exists. On Mac/Linux run:
```bash
chmod 755 /Applications/XAMPP/htdocs/bookshelf/uploads
```
On Windows, XAMPP handles this automatically.

### Step 5 — Open in browser
http://localhost/bookshelf/

---

## 🚀 Features

| Feature | Details |
|---|---|
| Browse books | Grid view with category shelf-tabs and live search |
| Upload books | PDF upload (max 50 MB) + optional cover image (JPG/PNG) |
| Download books | One-click PDF download with download counter |
| Categories | Science & Math, Arts & Humanities, Technology & Engineering, Business & Economics, Medicine & Health, Law & Social Studies |
| No login needed | Anyone can upload and download freely |
| Skeleton loading | Smooth loading experience |
| Fully responsive | Works on mobile, tablet, and desktop |

---

## 🔒 Going to production?
- Add authentication to `api/delete.php` and the upload form
- Set a strong MySQL password in `includes/db.php`
- Move `includes/` above the web root
- Configure `php.ini`: `upload_max_filesize = 50M` and `post_max_size = 52M`
- Add HTTPS via SSL certificate

---

## 🛠 Tech Stack
- **Frontend:** HTML5, CSS3, Vanilla JavaScript
- **Backend:**  PHP 7.4+
- **Database:** MySQL / MariaDB (XAMPP)
- **Fonts:**    Playfair Display + Inter (Google Fonts)
