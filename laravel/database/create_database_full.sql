-- ==============================================================================
-- TrueBite — Full Database Creation Script
-- Gunakan file ini untuk membuat database dari awal (fresh install).
--
-- CARA IMPORT:
--   1. Buka phpMyAdmin di cPanel
--   2. Pilih / buat database TrueBite terlebih dahulu
--   3. Klik tab "Import" → pilih file ini → klik "Go"
--
--   Atau via MySQL CLI:
--   mysql -u [user] -p [nama_database] < create_database_full.sql
--
-- Tabel yang dibuat:
--   1. products   — 4 varian Crispy Brownies (+ kolom product_link)
--   2. faqs       — 10 item FAQ resmi
--   3. locations  — 4 lokasi partner resmi (placeholder, update sesuai data nyata)
-- ==============================================================================

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;
SET SQL_MODE = 'NO_AUTO_VALUE_ON_ZERO';


-- ==============================================================================
-- 1. TABEL: products
-- ==============================================================================

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
    `id`            BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name`          VARCHAR(255)    NOT NULL,
    `slug`          VARCHAR(255)    NOT NULL,
    `price`         INT             NOT NULL DEFAULT 0,
    `protein_grams` INT             NOT NULL DEFAULT 0,
    `calories`      INT             NOT NULL DEFAULT 0,
    `image`         VARCHAR(255)        NULL DEFAULT NULL COMMENT 'Nama file gambar di public/images/products/',
    `product_link`  VARCHAR(2048)       NULL DEFAULT NULL COMMENT 'Tautan Shopee spesifik per varian',
    `description`   TEXT            NOT NULL,
    `created_at`    TIMESTAMP           NULL DEFAULT NULL,
    `updated_at`    TIMESTAMP           NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `products_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `protein_grams`, `calories`, `image`, `product_link`, `description`, `created_at`, `updated_at`)
VALUES
(
    1,
    'TrueBite Crispy Brownies - Original',
    'truebite-crispy-brownies-original',
    42000,
    10,
    180,
    'crispy-brownies-original.jpg',
    'https://shopee.co.id/TrueBite-Protein-Snack-Original-Dark-Chocolate-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44418065230',
    'A healthy, high-protein snack combining a rich dark chocolate flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
    NOW(),
    NOW()
),
(
    2,
    'TrueBite Crispy Brownies - Almond',
    'truebite-crispy-brownies-almond',
    44000,
    10,
    190,
    'crispy-brownies-almond.jpg',
    'https://shopee.co.id/TrueBite-Protein-Snack-Almond-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.41667771939',
    'A healthy, high-protein snack combining a rich almond flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free, and sweetened with natural stevia for a smarter snacking choice.',
    NOW(),
    NOW()
),
(
    3,
    'TrueBite Crispy Brownies - Cheese',
    'truebite-crispy-brownies-cheese',
    43000,
    10,
    190,
    'crispy-brownies-cheese.jpg',
    'https://shopee.co.id/True-Bite-Protein-Snack-Cheese-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free-i.1624412100.44168065411',
    'A healthy, high-protein snack combining a rich cheese flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
    NOW(),
    NOW()
),
(
    4,
    'TrueBite Crispy Brownies - Peanut',
    'truebite-crispy-brownies-peanut',
    43000,
    10,
    190,
    'crispy-brownies-peanut.jpg',
    'https://shopee.co.id/TrueBite-Protein-Snack-Peanut-Crispy-Brownies-High-Protein-10g-Less-Sugar-Gluten-Free--i.1624412100.28341263349',
    'A healthy, high-protein snack combining a rich peanut flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
    NOW(),
    NOW()
);


-- ==============================================================================
-- 2. TABEL: faqs
-- ==============================================================================

DROP TABLE IF EXISTS `faqs`;

CREATE TABLE `faqs` (
    `id`         BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `question`   VARCHAR(255)    NOT NULL,
    `answer`     TEXT            NOT NULL,
    `created_at` TIMESTAMP           NULL DEFAULT NULL,
    `updated_at` TIMESTAMP           NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`)
VALUES
(
    1,
    'What is TrueBite?',
    'TrueBite is a healthier snack brand that brings together delicious taste and the goodness of protein. We create bites for people who want to enjoy their everyday snacks while making more mindful choices.',
    NOW(), NOW()
),
(
    2,
    'What makes TrueBite different?',
    'We believe you shouldn\'t have to choose between enjoying your food and making a more mindful choice. TrueBite combines a satisfying taste, enjoyable texture, and protein in one delicious bite.',
    NOW(), NOW()
),
(
    3,
    'Who is TrueBite made for?',
    'TrueBite is made for anyone who loves good food and wants a snack that fits into their active, busy lifestyle but still healthier. Whether you\'re heading to the gym, working, studying, or simply taking a break, there\'s always room for a good bite.',
    NOW(), NOW()
),
(
    4,
    'How much protein is in TrueBite?',
    'The protein content in 1 TrueBite product is 10g. Full details regarding protein, calories, fat, and carbohydrates can be found on the product detail page for each variant.',
    NOW(), NOW()
),
(
    5,
    'Does TrueBite contain allergens?',
    'Our products may contain ingredients that can trigger allergies. Please check the allergen information on the packaging before consuming. For further details, contact our team.',
    NOW(), NOW()
),
(
    6,
    'How should I store TrueBite?',
    'TrueBite products can be stored at room temperature; avoid direct sunlight and humid areas to extend shelf life.',
    NOW(), NOW()
),
(
    7,
    'Do you offer bulk or wholesale orders?',
    'Absolutely! We\'re open to collaborations with gyms, padel clubs, cafes, retailers, and distributors. Reach out through our partnership inquiry channel to explore the possibilities.',
    NOW(), NOW()
),
(
    8,
    'How can I become a TrueBite partner?',
    'We\'d love to hear from you! Send us a message through WhatsApp or our contact channel with your business name, business type, and location.',
    NOW(), NOW()
),
(
    9,
    'Can I collaborate with TrueBite as a content creator?',
    'We\'re always excited to connect with creators who share our love for good food and an active lifestyle. Reach out to us through Instagram or email to introduce yourself and your ideas.',
    NOW(), NOW()
),
(
    10,
    'Is TrueBite halal?',
    'Yes, TrueBite products are already halal certified.',
    NOW(), NOW()
);


-- ==============================================================================
-- 3. TABEL: locations
-- CATATAN: Data di bawah adalah placeholder.
-- Ganti dengan nama, tipe, alamat, dan link Google Maps yang sebenarnya
-- sebelum go-live.
-- ==============================================================================

DROP TABLE IF EXISTS `locations`;

CREATE TABLE `locations` (
    `id`               BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name`             VARCHAR(255)    NOT NULL,
    `type`             VARCHAR(255)    NOT NULL,
    `address`          VARCHAR(255)    NOT NULL,
    `google_maps_link` VARCHAR(255)        NULL DEFAULT NULL,
    `created_at`       TIMESTAMP           NULL DEFAULT NULL,
    `updated_at`       TIMESTAMP           NULL DEFAULT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `locations` (`id`, `name`, `type`, `address`, `google_maps_link`, `created_at`, `updated_at`)
VALUES
(
    1,
    'Verde Padel Club',
    'Padel Court',
    'Jl. Kemang Raya No. 12, Bangka, Mampang Prapatan, Jakarta Selatan',
    'https://maps.google.com/?q=Verde+Padel+Club',
    NOW(), NOW()
),
(
    2,
    'Powerhouse Fitness & Gym',
    'Gym & Fitness',
    'Jl. Senopati No. 45, Selong, Kebayoran Baru, Jakarta Selatan',
    'https://maps.google.com/?q=Powerhouse+Gym',
    NOW(), NOW()
),
(
    3,
    'The Movement Studio',
    'Pilates & Wellness',
    'Jl. Dharmawangsa VI No. 8, Pulo, Kebayoran Baru, Jakarta Selatan',
    'https://maps.google.com/?q=The+Movement+Studio',
    NOW(), NOW()
),
(
    4,
    'Slam Padel Arena',
    'Padel Court',
    'Kawasan Pantai Maju Blok B No. 18, PIK, Jakarta Utara',
    'https://maps.google.com/?q=Slam+Padel+Arena',
    NOW(), NOW()
);


SET FOREIGN_KEY_CHECKS = 1;

-- ==============================================================================
-- SELESAI. Database TrueBite siap digunakan.
-- ==============================================================================
