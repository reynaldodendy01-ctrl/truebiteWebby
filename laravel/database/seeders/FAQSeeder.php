<?php

namespace Database\Seeders;

use App\Models\FAQ;
use Illuminate\Database\Seeder;

class FAQSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            [
                'id' => 1,
                'question' => 'What is TrueBite?',
                'answer' => 'TrueBite is a healthier snack brand that brings together delicious taste and the goodness of protein. We create bites for people who want to enjoy their everyday snacks while making more mindful choices.',
            ],
            [
                'id' => 2,
                'question' => 'What makes TrueBite different?',
                'answer' => 'We believe you shouldn\'t have to choose between enjoying your food and making a more mindful choice. TrueBite combines a satisfying taste, enjoyable texture, and protein in one delicious bite.',
            ],
            [
                'id' => 3,
                'question' => 'Who is TrueBite made for?',
                'answer' => 'TrueBite is made for anyone who loves good food and wants a snack that fits into their active, busy lifestyle but still healthier. Whether you\'re heading to the gym, working, studying, or simply taking a break, there\'s always room for a good bite.',
            ],
            [
                'id' => 4,
                'question' => 'How much protein is in TrueBite?',
                'answer' => 'The protein content in 1 TrueBite product is 10g. Full details regarding protein, calories, fat, and carbohydrates can be found on the product detail page for each variant.',
            ],
            [
                'id' => 5,
                'question' => 'Does True Bite contain allergens?',
                'answer' => 'Our products may contain ingredients that can trigger allergies. Please check the allergen information on the packaging before consuming. For further details, contact our team.',
            ],
            [
                'id' => 6,
                'question' => 'How should I store True Bite?',
                'answer' => 'TrueBite products can be stored at room temperature; avoid direct sunlight and humid areas to extend shelf life.',
            ],
            [
                'id' => 7,
                'question' => 'Do you offer bulk or wholesale orders?',
                'answer' => 'Absolutely! We\'re open to collaborations with gyms, padel clubs, cafés, retailers, and distributors. Reach out through our partnership inquiry channel to explore the possibilities.',
            ],
            [
                'id' => 8,
                'question' => 'How can I become a True Bite partner?',
                'answer' => 'We\'d love to hear from you! Send us a message through WhatsApp or our contact channel with your business name, business type, and location.',
            ],
            [
                'id' => 9,
                'question' => 'Can I collaborate with True Bite as a content creator?',
                'answer' => 'We’re always excited to connect with creators who share our love for good food and an active lifestyle. Reach out to us through Instagram or email to introduce yourself and your ideas.',
            ],
            [
                'id' => 10,
                'question' => 'Is TrueBite halal?',
                'answer' => 'Yes, TrueBite products are already halal certified.',
            ],
        ];

        foreach ($faqs as $faq) {
            FAQ::updateOrCreate(['id' => $faq['id']], $faq);
        }
    }
}
