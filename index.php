<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BookShelf — Open Textbook Library</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>

  <!-- NAVBAR -->
  <header class="navbar">
    <div class="nav-inner">
      <a href="index.php" class="logo">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
        BookShelf
      </a>
      <nav class="nav-links">
        <a href="index.php" class="active">Browse</a>
        <a href="upload.php">Upload a Book</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero">
    <div class="hero-inner">
      <p class="hero-eyebrow">Free &amp; Open Access</p>
      <h1 class="hero-title">Every Textbook,<br>Every Subject.</h1>
      <p class="hero-sub">Upload, discover, and download academic textbooks across all disciplines — no account needed.</p>
      <div class="search-wrap">
        <input type="text" id="searchInput" class="search-input" placeholder="Search by title, author, or keyword…" />
        <button class="search-btn" id="searchBtn">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
          Search
        </button>
      </div>
    </div>
  </section>

  <!-- SHELF TABS -->
  <section class="shelf-section">
    <div class="shelf-inner">
      <h2 class="shelf-label">Browse by Category</h2>
      <div class="shelf-tabs" id="categoryTabs">
        <button class="tab active" data-cat="all">All Books</button>
        <button class="tab" data-cat="science">Science &amp; Math</button>
        <button class="tab" data-cat="arts">Arts &amp; Humanities</button>
        <button class="tab" data-cat="tech">Technology &amp; Engineering</button>
        <button class="tab" data-cat="business">Business &amp; Economics</button>
        <button class="tab" data-cat="medicine">Medicine &amp; Health</button>
        <button class="tab" data-cat="law">Law &amp; Social Studies</button>
      </div>
    </div>
  </section>

  <!-- BOOKS GRID -->
  <main class="books-section">
    <div class="books-inner">
      <p class="results-count" id="resultsCount"></p>
      <div class="books-grid" id="booksGrid">
        <!-- Skeleton loaders -->
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
        <div class="skeleton-card"></div>
      </div>
      <div class="empty-state" id="emptyState" style="display:none">
        <span class="empty-icon">📚</span>
        <p>No books found. Try a different search or category.</p>
        <a href="upload.php" class="btn-primary">Upload the first one →</a>
      </div>
      <div class="error-state" id="errorState" style="display:none">
        <span class="empty-icon">⚠️</span>
        <p id="errorStateMsg">Could not load books. Please refresh the page.</p>
      </div>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-inner">
      <span class="logo" style="font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:700;color:#fff;">BookShelf</span>
      <p>An open platform for sharing academic knowledge freely.</p>
    </div>
  </footer>

  <script src="assets/js/app.js"></script>
</body>
</html>
