-- ==============================================================================
-- TrueBite Database Import Script: Updated Products & Copywriting
-- Sesuai revisi copywriting PDF terbaru:
-- - Semua produk: TrueBite Crispy Brownies (10g Protein)
-- - Harga: Original = 42.000, Almond = 44.000, Peanut = 43.000, Cheese = 43.000
-- - Deskripsi bahasa Inggris sesuai guideline PDF
-- - Catatan: Nilai kalori (calories) diset default 180-190 kcal sementara menunggu konfirmasi esok hari
-- ==============================================================================

INSERT INTO `products` (`id`, `name`, `slug`, `price`, `protein_grams`, `calories`, `image`, `description`, `created_at`, `updated_at`)
VALUES
(
    1,
    'TrueBite Crispy Brownies - Original',
    'truebite-crispy-brownies-original',
    42000,
    10,
    180,
    NULL,
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
    'crispy-brownies-almond.png',
    'A healthy, high-protein snack combining a rich almond flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free, and sweetened with natural stevia for a smarter snacking choice.',
    NOW(),
    NOW()
),
(
    3,
    'TrueBite Crispy Brownies - Peanut',
    'truebite-crispy-brownies-peanut',
    43000,
    10,
    190,
    NULL,
    'A healthy, high-protein snack combining a rich peanut flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
    NOW(),
    NOW()
),
(
    4,
    'TrueBite Crispy Brownies - Cheese',
    'truebite-crispy-brownies-cheese',
    43000,
    10,
    190,
    'crispy-brownies-cheese.png',
    'A healthy, high-protein snack combining a rich cheese flavor with an indulgent crispy brownie texture. Each pack contains 10g of protein, formulated to be gluten-free and low in sugar, and sweetened with natural stevia for a smarter snacking choice.',
    NOW(),
    NOW()
)
ON DUPLICATE KEY UPDATE
    `name` = VALUES(`name`),
    `slug` = VALUES(`slug`),
    `price` = VALUES(`price`),
    `protein_grams` = VALUES(`protein_grams`),
    `calories` = VALUES(`calories`),
    `image` = VALUES(`image`),
    `description` = VALUES(`description`),
    `updated_at` = NOW();
