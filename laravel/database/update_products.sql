-- ==============================================================================
-- TrueBite Master Database Import Script
-- Berisi seluruh data untuk tabel:
-- 1. products  (4 Varian TrueBite Crispy Brownies, 10g Protein, Foto E-Commerce)
-- 2. faqs      (10 Item FAQ Resmi TrueBite)
-- 3. locations (4 Titik Lokasi Partner Resmi: Padel Club, Gym & Fitness, Studio)
--
-- CARA IMPORT:
--   Jalankan file ini di phpMyAdmin > Import, atau via MySQL CLI:
--   mysql -u [user] -p [nama_database] < update_products.sql
-- ==============================================================================


-- ==============================================================================
-- LANGKAH 0: TAMBAH KOLOM product_link (jalankan sekali saja)
-- Jika kolom sudah ada, statement ini akan diabaikan secara otomatis.
-- ==============================================================================

ALTER TABLE `products`
    ADD COLUMN IF NOT EXISTS `product_link` VARCHAR(2048) NULL DEFAULT NULL
    COMMENT 'Tautan Shopee spesifik per varian produk'
    AFTER `image`;


-- ------------------------------------------------------------------------------
-- 1. TABEL PRODUCTS
-- Mencakup kolom baru: product_link (URL Shopee per varian)
-- ------------------------------------------------------------------------------
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
)
ON DUPLICATE KEY UPDATE
    `name`         = VALUES(`name`),
    `slug`         = VALUES(`slug`),
    `price`        = VALUES(`price`),
    `protein_grams`= VALUES(`protein_grams`),
    `calories`     = VALUES(`calories`),
    `image`        = VALUES(`image`),
    `product_link` = VALUES(`product_link`),
    `description`  = VALUES(`description`),
    `updated_at`   = NOW();


-- ------------------------------------------------------------------------------
-- 2. TABEL FAQS (10 Item FAQ Resmi)
-- ------------------------------------------------------------------------------
INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`)
VALUES
(
    1,
    'What is TrueBite?',
    'TrueBite is a healthier snack brand that brings together delicious taste and the goodness of protein. We create bites for people who want to enjoy their everyday snacks while making more mindful choices.',
    NOW(),
    NOW()
),
(
    2,
    'What makes TrueBite different?',
    'We believe you shouldn\'t have to choose between enjoying your food and making a more mindful choice. TrueBite combines a satisfying taste, enjoyable texture, and protein in one delicious bite.',
    NOW(),
    NOW()
),
(
    3,
    'Who is TrueBite made for?',
    'TrueBite is made for anyone who loves good food and wants a snack that fits into their active, busy lifestyle but still healthier. Whether you\'re heading to the gym, working, studying, or simply taking a break, there\'s always room for a good bite.',
    NOW(),
    NOW()
),
(
    4,
    'How much protein is in TrueBite?',
    'The protein content in 1 TrueBite product is 10g. Full details regarding protein, calories, fat, and carbohydrates can be found on the product detail page for each variant.',
    NOW(),
    NOW()
),
(
    5,
    'Does TrueBite contain allergens?',
    'Our products may contain ingredients that can trigger allergies. Please check the allergen information on the packaging before consuming. For further details, contact our team.',
    NOW(),
    NOW()
),
(
    6,
    'How should I store TrueBite?',
    'TrueBite products can be stored at room temperature; avoid direct sunlight and humid areas to extend shelf life.',
    NOW(),
    NOW()
),
(
    7,
    'Do you offer bulk or wholesale orders?',
    'Absolutely! We\'re open to collaborations with gyms, padel clubs, cafes, retailers, and distributors. Reach out through our partnership inquiry channel to explore the possibilities.',
    NOW(),
    NOW()
),
(
    8,
    'How can I become a TrueBite partner?',
    'We\'d love to hear from you! Send us a message through WhatsApp or our contact channel with your business name, business type, and location.',
    NOW(),
    NOW()
),
(
    9,
    'Can I collaborate with TrueBite as a content creator?',
    'We\'re always excited to connect with creators who share our love for good food and an active lifestyle. Reach out to us through Instagram or email to introduce yourself and your ideas.',
    NOW(),
    NOW()
),
(
    10,
    'Is TrueBite halal?',
    'Yes, TrueBite products are already halal certified.',
    NOW(),
    NOW()
)
ON DUPLICATE KEY UPDATE
    `question`   = VALUES(`question`),
    `answer`     = VALUES(`answer`),
    `updated_at` = NOW();


-- ------------------------------------------------------------------------------
-- 3. TABEL LOCATIONS (Partner Resmi TrueBite)
-- ------------------------------------------------------------------------------
INSERT INTO `locations` (`id`, `name`, `type`, `address`, `google_maps_link`, `created_at`, `updated_at`)
VALUES
(
    1,
    'Verde Padel Club',
    'Padel Court',
    'Jl. Kemang Raya No. 12, Bangka, Mampang Prapatan, Jakarta Selatan',
    'https://maps.google.com/?q=Verde+Padel+Club',
    NOW(),
    NOW()
),
(
    2,
    'Powerhouse Fitness & Gym',
    'Gym & Fitness',
    'Jl. Senopati No. 45, Selong, Kebayoran Baru, Jakarta Selatan',
    'https://maps.google.com/?q=Powerhouse+Gym',
    NOW(),
    NOW()
),
(
    3,
    'The Movement Studio',
    'Pilates & Wellness',
    'Jl. Dharmawangsa VI No. 8, Pulo, Kebayoran Baru, Jakarta Selatan',
    'https://maps.google.com/?q=The+Movement+Studio',
    NOW(),
    NOW()
),
(
    4,
    'Slam Padel Arena',
    'Padel Court',
    'Kawasan Pantai Maju Blok B No. 18, PIK, Jakarta Utara',
    'https://maps.google.com/?q=Slam+Padel+Arena',
    NOW(),
    NOW()
)
ON DUPLICATE KEY UPDATE
    `name`            = VALUES(`name`),
    `type`            = VALUES(`type`),
    `address`         = VALUES(`address`),
    `google_maps_link`= VALUES(`google_maps_link`),
    `updated_at`      = NOW();
