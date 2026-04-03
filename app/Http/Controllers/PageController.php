<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        $features = [
            [
                'title' => 'High Quality Prints',
                'desc' => 'Studio-quality lighting and professional DSLR cameras ensure your guests look their best.'
            ],
            [
                'title' => 'Custom Props',
                'desc' => 'A huge variety of fun, quirky, and themed props tailored for your specific event.'
            ],
            [
                'title' => 'Instant Sharing',
                'desc' => 'Share photos instantly via email or QR code direct from the photobooth screen.'
            ]
        ];

        return view('index', compact('features'));
    }

    public function showServices(){
        $packages = [
            [
                'name' => 'Basic Snap',
                'price' => 'Rp 1.500.000',
                'duration' => '2 hours',
                'features' => [
                    'Unlimited Prints (2x6)',
                    'Standard Backdrop',
                    'Fun Props Set',
                    'Online Gallery'
                ],
                'type' => 'basic'
            ],
            [
                'name' => 'Premium Joy',
                'price' => 'Rp 2.500.000',
                'duration' => '4 hours',
                'features' => [
                    'Unlimited Premium Prints (4x6)',
                    'Custom Premium Backdrop',
                    'Themed High-End Props',
                    'Boomerang & GIF Creation',
                    'Scrapbook Station'
                ],
                'type' => 'premium'
            ],
            [
                'name' => 'Wedding VIP',
                'price' => 'Rp 4.000.000',
                'duration' => '6 hours',
                'features' => [
                    'Everything in Premium',
                    '360 Video Booth Included',
                    'Custom Photo Template Design',
                    'Instant Social Media Sharing Kiosk',
                    'Idle Time (1 hour free)'
                ],
                'type' => 'vip'
            ]
        ];

        return view('services', compact('packages'));
    }

    public function showAbout(){
        return view('about');
    }

    public function showContact(){
        return view('contact');
    }
}
