-- ============================================================
--  BookShelf — Database Schema
--  Compatible with XAMPP / MariaDB / MySQL 5.7+
--
--  HOW TO INSTALL:
--  1. Open phpMyAdmin (http://localhost/phpmyadmin)
--  2. Click "New" → name it "bookshelf" → Create
--  3. Click the "SQL" tab, paste this file, click "Go"
-- ============================================================

CREATE DATABASE IF NOT EXISTS `bookshelf`
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE `bookshelf`;

-- ── Books table ────────────────────────────────────────────
CREATE TABLE IF NOT EXISTS `books` (
  `id`           INT UNSIGNED       NOT NULL AUTO_INCREMENT,
  `title`        VARCHAR(255)       NOT NULL,
  `author`       VARCHAR(255)       NOT NULL,
  `category`     ENUM('science','arts','tech','business','medicine','law') NOT NULL,
  `description`  TEXT,
  `file_path`    VARCHAR(255)       NOT NULL,
  `cover_path`   VARCHAR(255)                DEFAULT NULL,
  `file_size`    INT UNSIGNED       NOT NULL DEFAULT 0,
  `downloads`    INT UNSIGNED       NOT NULL DEFAULT 0,
  `uploaded_at`  DATETIME           NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  INDEX `idx_category` (`category`),
  INDEX `idx_uploaded` (`uploaded_at`),
  FULLTEXT INDEX `idx_search` (`title`, `author`, `description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ── Sample seed data (optional — delete if not wanted) ────
INSERT INTO `books` (`title`, `author`, `category`, `description`, `file_path`, `cover_path`, `file_size`) VALUES
('Calculus: Early Transcendentals',        'James Stewart',                     'science',  'A comprehensive introduction to single and multivariable calculus with real-world applications.',          'sample.pdf', NULL, 0),
('Introduction to Algorithms',             'Cormen, Leiserson, Rivest & Stein',  'tech',     'The definitive reference for algorithms — sorting, graphs, dynamic programming, and more.',                'sample.pdf', NULL, 0),
('Principles of Economics',                'N. Gregory Mankiw',                 'business', 'An accessible guide to micro and macroeconomic principles that shape everyday decisions.',                  'sample.pdf', NULL, 0),
('Gray\'s Anatomy for Students',           'Drake, Vogl & Mitchell',             'medicine', 'A clinically focused anatomy text used in medical schools worldwide, with clear diagrams.',                 'sample.pdf', NULL, 0),
('A Brief History of Time',                'Stephen Hawking',                    'science',  'An exploration of cosmology, black holes, and the nature of time, written for a general audience.',        'sample.pdf', NULL, 0),
('The Elements of Style',                  'Strunk & White',                     'arts',     'A classic guide to clear and elegant writing, essential for every student and professional.',               'sample.pdf', NULL, 0),
('Constitutional Law',                     'Geoffrey R. Stone',                  'law',      'A thorough overview of constitutional rights, judicial interpretation, and landmark court cases.',          'sample.pdf', NULL, 0),
('Human Resource Management',              'Gary Dessler',                       'business', 'Covers recruitment, training, performance appraisal, and labor relations fundamentals.',                    'sample.pdf', NULL, 0),
('Organic Chemistry',                      'Paula Yurkanis Bruice',              'science',  'A student-friendly approach to organic chemistry with emphasis on mechanisms and reactions.',               'sample.pdf', NULL, 0),
('Digital Electronics',                    'Thomas L. Floyd',                    'tech',     'Covers number systems, logic gates, flip-flops, and microprocessor fundamentals.',                         'sample.pdf', NULL, 0),
('Introduction to Psychology',             'James W. Kalat',                     'arts',     'A broad survey of psychological science including behavior, cognition, and mental health.',                 'sample.pdf', NULL, 0),
('Public Health: An Introduction',         'Mary-Jane Schneider',                'medicine', 'Introduces the core disciplines of public health: epidemiology, biostatistics, and policy.',               'sample.pdf', NULL, 0);
