<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiktokEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $event_pixel = [
            [
                'name'        => 'Add Payment Info',
                'event_pixel'  => "ttq.track('AddPaymentInfo');",
            ],
            [
                'name'        => 'Add To Cart',
                'event_pixel'  => "ttq.track('AddToCart') ;",
            ],
            [
                'name'        => 'Add To Wishlist',
                'event_pixel'  => "ttq.track('AddToWishlist');",
            ],
            [
                'name'        => 'Complete Registration',
                'event_pixel'  => "ttq.track('CompleteRegistration') ;",
            ],
            [
                'name'        => 'Contact',
                'event_pixel'  => "ttq.track('Contact') ;",
            ],
            [
                'name'        => 'Submit Form',
                'event_pixel'  => "ttq.track('SubmitForm');",
            ],
            [
                'name'        => 'Initiate Checkout',
                'event_pixel'  => "ttq.track('InitiateCheckout');",
            ],
            [
                'name'        => 'View Content',
                'event_pixel'  => "ttq.track('ViewContent') ;",
            ],
        ];

        DB::table('tiktok_events')->insert($event_pixel);
    }
}
