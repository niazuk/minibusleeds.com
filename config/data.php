<?php
$tel = '0113 3720106';
$sitename = env('APP_NAME');
$siteloc = 'Leeds';
$sitecounty = 'West Yorkshire';
$email = 'info@minibusleeds.com';

return[
	'meta' => [
        'sitename' => $sitename,
        'siteloc' => $siteloc,
        'sitecounty' => $sitecounty,
        'logoalt' => "$siteloc Minibus Hire logo",
        'contact_number' => $tel,
        'contact_email' => $email,
        'contact_address' => 'City Square, Leeds, LS1 1PJ',
        'map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2378.3247534327193!2d-2.990375084733586!3d53.40901797999216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487b2131b3d5efb5%3A0x9667ebbc300d7464!2sVernon+St%2C+Liverpool+L2+2AY!5e0!3m2!1sen!2suk!4v1554135408216!5m2!1sen!2suk',
        'fb' => 'https://www.facebook.com/minibushirelondonuk/',
        'insta' => 'https://twitter.com/NationwideMini1',
        'gplus' => '#',
        'twitter' => '#',
        'url' => env('APP_URL'),        
    ],
    'index' => [
        'title' => "Minibus Hire $siteloc & Coach Hire $siteloc",
        'description' => "Minibus Hire $siteloc provides cheap and reliable minibus hire with driver across $siteloc. We offer quality coach hire service and minibus rental in $siteloc for any events.",
        'tags' => "minibus hire with driver, minibus hire $siteloc, minibus and driver hire, hire a minibus and driver, minibus $siteloc, $siteloc minibus hire, cheap minibus hire with driver",

    ],
    'coach-hire' => [
        'title' => " Coach Hire & Bus Rentals $siteloc",
        'description' => "Minibus Hire $siteloc provides friendly self drive and safe coach hire services. We offer quality coach hire service and minibus rental in $siteloc for any events.",
        'tags' => "minibus hire with driver, minibus hire $siteloc, minibus and driver hire, hire a minibus and driver, minibus $siteloc, $siteloc minibus hire, cheap minibus hire with driver",

    ],
    'minibus-hire' => [
        'title' => "Minbus Hire $siteloc with  8, 12, 14, 15, 16 seater vehciles",
        'description' => "Minibus Hire $siteloc provides cheap and reliable minibus hire with driver across $siteloc. To book all you need to do is fill in our online minibus hire quote form.",
        'tags' => "minibus hire with driver manchester, minibus hire manchester with driver, 9 seater minibus hire with driver, 17 seater minibus hire $siteloc, 15 seater minibus hire $siteloc, 16 seater minibus hire $siteloc, 20 seater minibus hire $siteloc, 12 seater minibus hire $siteloc self drive",

    ],
    'airport-minibus' => [
        'title' => "$siteloc Airport Minibus Hire & Coach Hire",
        'description' => "Minibus Hire $siteloc provides airport minibus transfers to all UK airport including London Heathrow, Gatwick, Luton,  Stansted and Manchester. Call Us $tel",
        'tags' => "airport minibus , heathrow airport minibus hire, minibus to heathrow airport",

    ],
    'self-driving-minibus' => [
        'title' => "Self Drive Minibus Hire $siteloc",
        'description' => "Minibus Hire $siteloc provides self drive minibus hire in $siteloc to anyone who requires the services in the Manchester.  Call Us $tel",
        'tags' => "airport minibus , heathrow airport minibus hire, minibus to heathrow airport",

    ],
    'minibus-fleet' => [
        'title' => "Fleet In $sitename",
        'sub-title' => "Fleet",
        'desc' => 'Check out our extensive collection of vehicles available to travel in. We can cover transport for multiple people over long distances.',
        'tags' => "Fleet $siteloc Taxi, Minibus Hire",

        'header1' => 'Coaches',
        'header2' => 'Minibuses',

        'feature1' => [
            'alt' => "Free WiFi Taxi $siteloc Hire image",
            'name' => 'Free WiFi',
        ],
        'feature2' => [
            'alt' => "Luggage Taxi $siteloc Hire image",
            'name' => 'Luggage',
        ],
        'feature3' => [
            'alt' => "Outlets Power $siteloc Taxi Hire image",
            'name' => 'Outlets',
        ],
        'feature4a' => [
            'alt' => "Reclining Seats $siteloc Hire Taxi image",
            'name' => 'Reclining Seats',
        ],
        'feature4b' => [
            'alt' => "Legroom Taxi Hire $siteloc image",
            'name' => 'More Legroom',
        ],
        'feature5' => [
            'alt' => "Restroom Taxi Hire $siteloc image",
            'name' => 'Restroom',
        ],
        'feature6' => [
            'alt' => "Television TV $siteloc Hire Minibus image",
            'name' => 'TV',
        ],

        //TODO Modify fleet_header.blade.php foreach loop if not using all 5 minibuses etc
        'coach1' => [
            'alt' => "72 Passenger $siteloc Coach Taxi image",
            'title' => '72 Passenger MTI Coach',
            'subtitle' => '72 Passenger',
        ],
        'coach2' => [
            'alt' => "64 Passenger Coach $siteloc Hire image",
            'title' => '64 Passenger Setra Coach',
            'subtitle' => '64 Passenger',
        ],
        'coach3' => [
            'alt' => "56 Passenger Coach $siteloc Hire image",
            'title' => '56 Passenger Setra Coach',
            'subtitle' => '56 Passenger',
        ],
        'mini1' => [
            'alt' => "24 Seats Minibus Hire $siteloc image",
            'title' => '24 Seater Minibus',
            'subtitle' => '24 Passenger',
        ],
        'mini2' => [
            'alt' => "16 Seats Minibus Hire $siteloc image",
            'title' => '16 Seater Minibus',
            'subtitle' => '16 Passenger',
        ],
        'mini3' => [
            'alt' => "8 Seats Minibus Hire $siteloc image",
            'title' => '8 Seater Minibus',
            'subtitle' => '8 Passenger',
        ],
        'mini4' => [
            'alt' => '5 Seats Mercedes $siteloc Hire image',
            'title' => '5 Passenger Mercedes',
            'subtitle' => '5 Passenger',
        ],
        'mini5' => [
            'alt' => "4 Seats $siteloc MPV Minibus Hire image",
            'title' => '4 Passenger MPV',
            'subtitle' => '4 Passenger',
        ],
    ],
    'about-us' => [
        'title' => "About Minibus Hire $siteloc Services",
        'description' => "Minibus Hire $siteloc provides cheap and reliable minibus hire with driver across $siteloc. We offer quality coach hire service and minibus rental. Call Us $tel",
        'tags' => "minibus hire $siteloc, minibus hire with driver, coach hire",

    ],
    'contact-us' => [
        'title' => "Contact Us - $sitename",
        'description' => "Contact our customer service today for Free Quotes. Call Us $tel",
        'tags' => "contact minibus hire $siteloc",
    ],
    'wedding-transfers' => [
        'title' => "Wedding Minibus Hire",
        'description' => "Minibus Hire London provides Heathrow minibus hire services offered at the very best prices all year round. Book with us and save over 20% from Heathrow airport.",
        'tags' => "minibus hire with driver, minibus hire $siteloc, minibus and driver hire, hire a minibus and driver, minibus $siteloc, $siteloc minibus hire, cheap minibus hire with driver",
    ],
    'seater-minibus-hire' => [
        'title' => "16 Seater Minibus Hire $siteloc",
        'description' => "Minibus Hire $siteloc offer 15-seater as well as 16 seat minibus hire service. Book your 7-17 seater minibus vehicles for a great price across the UK.",
        'tags' => "16 seater minibus hire self drive, 16 seater minibus hire, 16 seater minibus hire london, cheap 16 seater minibus hire",
    ],
    'terms' => [
        'title' => "Terms & Conditions | $siteloc Minibus Hire - Minibuses $siteloc",
        'description' => "Minibus Hire $siteloc offer minibus service in $siteloc and cheap coach hire. We provide punctual and professional drivers. Call Us $tel",
        'tags' => "16 seater minibus hire self drive, 16 seater minibus hire, 16 seater minibus hire $siteloc, cheap 16 seater minibus hire",
    ],
];
?>