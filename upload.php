<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Upload a Textbook — BookShelf</title>
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
        <a href="index.php">Browse</a>
        <a href="upload.php" class="active">Upload a Book</a>
      </nav>
    </div>
  </header>

  <!-- HERO -->
  <section class="hero hero--short">
    <div class="hero-inner">
      <p class="hero-eyebrow">Contribute to the Library</p>
      <h1 class="hero-title">Share a Textbook</h1>
      <p class="hero-sub">Add a book to the collection. Fill in the details and choose a category so others can find it easily.</p>
    </div>
  </section>

  <!-- FORM -->
  <main class="form-section">
    <div class="form-card">

      <!-- PROGRESS STEPS -->
      <div class="steps">
        <div class="step active" id="step1-indicator">
          <span class="step-num">1</span>
          <span class="step-label">Book Details</span>
        </div>
        <div class="step-connector"></div>
        <div class="step" id="step2-indicator">
          <span class="step-num">2</span>
          <span class="step-label">Upload Files</span>
        </div>
        <div class="step-connector"></div>
        <div class="step" id="step3-indicator">
          <span class="step-num">3</span>
          <span class="step-label">Done</span>
        </div>
      </div>

      <!-- STEP 1: Details -->
      <div id="step1">
        <div class="form-group">
          <label for="bookTitle">Book Title <span class="req">*</span></label>
          <input type="text" id="bookTitle" class="form-input" placeholder="e.g. Introduction to Calculus" maxlength="255" />
        </div>
        <div class="form-group">
          <label for="bookAuthor">Author(s) <span class="req">*</span></label>
          <input type="text" id="bookAuthor" class="form-input" placeholder="e.g. Thomas L. Floyd" maxlength="255" />
        </div>
        <div class="form-group">
          <label for="bookCategory">Category <span class="req">*</span></label>
          <select id="bookCategory" class="form-input form-select">
            <option value="">— Select a category —</option>
            <option value="science">Science &amp; Math</option>
            <option value="arts">Arts &amp; Humanities</option>
            <option value="tech">Technology &amp; Engineering</option>
            <option value="business">Business &amp; Economics</option>
            <option value="medicine">Medicine &amp; Health</option>
            <option value="law">Law &amp; Social Studies</option>
          </select>
        </div>
        <div class="form-group">
          <label for="bookDesc">Short Description <span class="optional">(optional)</span></label>
          <textarea id="bookDesc" class="form-input form-textarea" rows="3" placeholder="A brief summary of what this book covers…" maxlength="1000"></textarea>
          <span class="char-count" id="descCount">0 / 1000</span>
        </div>
        <div class="form-actions">
          <span></span>
          <button class="btn-primary" id="toStep2Btn">Next: Upload Files →</button>
        </div>
      </div>

      <!-- STEP 2: Files -->
      <div id="step2" style="display:none">
        <div class="form-group">
          <label>Book File (PDF) <span class="req">*</span></label>
          <div class="drop-zone" id="dropZone">
            <span class="drop-icon">📄</span>
            <p class="drop-text">
              Drag &amp; drop your PDF here<br>
              <span>or click to browse — max 50 MB</span>
            </p>
            <input type="file" id="fileInput" accept=".pdf,application/pdf" style="display:none" />
          </div>
          <p class="file-name" id="fileName"></p>
        </div>

        <div class="form-group">
          <label>Cover Image <span class="optional">(optional — JPG or PNG, max 5 MB)</span></label>
          <div class="drop-zone drop-zone--small" id="coverZone">
            <span class="drop-icon">🖼️</span>
            <p class="drop-text">Drag &amp; drop cover image<br><span>or click to browse</span></p>
            <input type="file" id="coverInput" accept=".jpg,.jpeg,.png,image/jpeg,image/png" style="display:none" />
          </div>
          <div class="cover-preview-wrap" id="coverPreviewWrap" style="display:none">
            <img id="coverPreview" src="" alt="Cover preview" class="cover-preview" />
            <button class="remove-cover" id="removeCover">✕ Remove</button>
          </div>
        </div>

        <!-- PROGRESS -->
        <div class="progress-wrap" id="progressWrap" style="display:none">
          <div class="progress-bar" id="progressBar"></div>
          <p class="progress-label" id="progressLabel">Uploading…</p>
        </div>

        <!-- MESSAGES -->
        <div class="alert alert--error"   id="errorMsg"   style="display:none"></div>
        <div class="alert alert--success" id="successMsg" style="display:none"></div>

        <div class="form-actions">
          <button class="btn-secondary" id="backToStep1Btn">← Back</button>
          <button class="btn-primary"   id="uploadBtn">Upload Book</button>
        </div>
      </div>

      <!-- STEP 3: Success -->
      <div id="step3" style="display:none" class="success-screen">
        <div class="success-icon">✅</div>
        <h2>Book Uploaded!</h2>
        <p>Your textbook has been added to the library and is now available for everyone to download.</p>
        <div class="success-actions">
          <a href="index.php" class="btn-primary">Browse the Library</a>
          <button class="btn-secondary" id="uploadAnotherBtn">Upload Another</button>
        </div>
      </div>

    </div>
  </main>

  <!-- FOOTER -->
  <footer class="footer">
    <div class="footer-inner">
      <span style="font-family:'Playfair Display',serif;font-size:1.3rem;font-weight:700;color:#fff;">BookShelf</span>
      <p>An open platform for sharing academic knowledge freely.</p>
    </div>
  </footer>

  <script src="assets/js/upload.js"></script>
</body>
</html>
