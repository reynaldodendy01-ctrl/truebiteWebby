<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            [
                'name' => 'Balancd Studio Malang',
                'type' => 'Pilates & Wellness',
                'address' => 'Jl. Lawu No.10, Oro-oro Dowo, Kec. Klojen, Kota Malang, Jawa Timur 65119',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Balancd%20Studio%20Malang%20Jl.%20Lawu%20No.10%2C%20Oro-oro%20Dowo%2C%20Kec.%20Klojen%2C%20Kota%20Malang%2C%20Jawa%20Timur%2065119',
            ],
            [
                'name' => 'Just Padel Surabaya',
                'type' => 'Padel Court',
                'address' => 'Diamond Hill Citraland, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Just%20Padel%20Surabaya%20Diamond%20Hill%20Citraland%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'SolaX Surabaya',
                'type' => 'Pilates & Wellness',
                'address' => 'Ruko One Arcade, Citraland, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=SolaX%20Surabaya%20Ruko%20One%20Arcade%2C%20Citraland%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Epic Padel Malang',
                'type' => 'Padel Court',
                'address' => 'Jl. Raya Blimbing Indah, Polowijen, Kota Malang, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Epic%20Padel%20Malang%20Jl.%20Raya%20Blimbing%20Indah%2C%20Polowijen%2C%20Kota%20Malang%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Jungle Padel Surabaya',
                'type' => 'Padel Court',
                'address' => 'Kertajaya Indah Regency, Keputih, Sukolilo, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Jungle%20Padel%20Surabaya%20Kertajaya%20Indah%20Regency%2C%20Keputih%2C%20Sukolilo%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Pilates and Flow Studio Malang',
                'type' => 'Pilates & Wellness',
                'address' => 'Jl. Villa Puncak Tidar, Karangwidoro, Dau, Malang, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Pilates%20and%20Flow%20Studio%20Malang%20Jl.%20Villa%20Puncak%20Tidar%2C%20Karangwidoro%2C%20Dau%2C%20Malang%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Istana Buah Pandanaran Semarang',
                'type' => 'Retail / Supermarket',
                'address' => 'Jl. Pandanaran No.100, Kota Semarang, Jawa Tengah',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Istana%20Buah%20Pandanaran%20Semarang%20Jl.%20Pandanaran%20No.100%2C%20Kota%20Semarang%2C%20Jawa%20Tengah',
            ],
            [
                'name' => 'Istana Buah Sultan Agung Semarang',
                'type' => 'Retail / Supermarket',
                'address' => 'Jl. Sultan Agung No.145, Kota Semarang, Jawa Tengah',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Istana%20Buah%20Sultan%20Agung%20Semarang%20Jl.%20Sultan%20Agung%20No.145%2C%20Kota%20Semarang%2C%20Jawa%20Tengah',
            ],
            [
                'name' => 'Lai Lai Tidar Malang',
                'type' => 'Retail / Supermarket',
                'address' => 'Jl. Puncak Tidar, Karangwidoro, Kota Malang, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Lai%20Lai%20Tidar%20Malang%20Jl.%20Puncak%20Tidar%2C%20Karangwidoro%2C%20Kota%20Malang%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Weston Sports Surabaya',
                'type' => 'Padel Court',
                'address' => 'Diamond Hill, Citraland, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Weston%20Sports%20Surabaya%20Diamond%20Hill%2C%20Citraland%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Active by Feel Fit Surabaya',
                'type' => 'Pilates & Wellness',
                'address' => 'UC Boulevard, Citraland, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Active%20by%20Feel%20Fit%20Surabaya%20UC%20Boulevard%2C%20Citraland%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'La Familia Padel Surabaya',
                'type' => 'Padel Court',
                'address' => 'Jl. Raya Made Lakarsantri, Citraland, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=La%20Familia%20Padel%20Surabaya%20Jl.%20Raya%20Made%20Lakarsantri%2C%20Citraland%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Lai Lai Arjuno Malang',
                'type' => 'Retail / Supermarket',
                'address' => 'Jl. Arjuno No.36, Oro-oro Dowo, Kota Malang, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Lai%20Lai%20Arjuno%20Malang%20Jl.%20Arjuno%20No.36%2C%20Oro-oro%20Dowo%2C%20Kota%20Malang%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Cross Arena Surabaya',
                'type' => 'Padel Court',
                'address' => 'Jl. Kertajaya, Airlangga, Gubeng, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Cross%20Arena%20Surabaya%20Jl.%20Kertajaya%2C%20Airlangga%2C%20Gubeng%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Platinum Padel Surabaya',
                'type' => 'Padel Court',
                'address' => 'Golden City Mall, Dukuh Pakis, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Platinum%20Padel%20Surabaya%20Golden%20City%20Mall%2C%20Dukuh%20Pakis%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Karmaphalia Indonesia Bali',
                'type' => 'Wellness & Retreat',
                'address' => 'Bali, Indonesia',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Karmaphalia%20Indonesia%20Bali%20Bali%2C%20Indonesia',
            ],
            [
                'name' => 'Fitswell Wellness Surabaya',
                'type' => 'Pilates & Wellness',
                'address' => 'Jl. Simpang Darmo Permai Utara, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Fitswell%20Wellness%20Surabaya%20Jl.%20Simpang%20Darmo%20Permai%20Utara%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Jadpadel Society Malang',
                'type' => 'Padel Court',
                'address' => 'Jl. Simpang Bunga Andong, Lowokwaru, Kota Malang, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Jadpadel%20Society%20Malang%20Jl.%20Simpang%20Bunga%20Andong%2C%20Lowokwaru%2C%20Kota%20Malang%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Padel Playy Surabaya',
                'type' => 'Padel Court',
                'address' => 'Jl. Hayam Wuruk, Sawunggaling, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Padel%20Playy%20Surabaya%20Jl.%20Hayam%20Wuruk%2C%20Sawunggaling%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Kalme Pilates Malang',
                'type' => 'Pilates & Wellness',
                'address' => 'Malang City Point, Kota Malang, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Kalme%20Pilates%20Malang%20Malang%20City%20Point%2C%20Kota%20Malang%2C%20Jawa%20Timur',
            ],
            [
                'name' => 'Liens Padel Surabaya',
                'type' => 'Padel Court',
                'address' => 'Jl. Karang Menjangan, Gubeng, Surabaya, Jawa Timur',
                'google_maps_link' => 'https://www.google.com/maps/search/?api=1&query=Liens%20Padel%20Surabaya%20Jl.%20Karang%20Menjangan%2C%20Gubeng%2C%20Surabaya%2C%20Jawa%20Timur',
            ],
        ];

        foreach ($locations as $location) {
            Location::updateOrCreate(['name' => $location['name']], $location);
        }
    }
}
