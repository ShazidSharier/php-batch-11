<?php


namespace App\classes;


class Trainnig
{
    public $trainnigs = [];

    public function __construct()
    {
        $this->trainnigs= [
            0=> [
                'id'        => 1,
                'name'      => 'Post Graduate Diploma in GRAPHIC DESIGN (PGD GD)',
                'schedule'  => '1 Mar- 9 Aug 2024',
                'time'      => '144',
                'price'     => '42900',
                'image'     => 'assets/image/c1.jpg',
            ],
            1=> [
                'id'        => 2,
                'name'      => 'Post Graduate Diploma in SUPPLY CHAIN MANAGEMENT (PGD SCM)',
                'schedule'  => '1 Mar- 9 Aug 2024',
                'time'      => '144',
                'price'     => '42900',
                'image'     => 'assets/image/c2.jpg',
            ],
            2=> [
                'id'        => 3,
                'name'      => 'Wordpress Theme Customization',
                'schedule'  => '1 may- 9 july 2024',
                'time'      => '144',
                'price'     => '32900',
                'image'     => 'assets/image/c3.jpg',
            ],
            3=> [
                'id'        => 4,
                'name'      => 'Certified Training on Ethical Hacking (CEH)',
                'schedule'  => '1 April- 12 Aug 2024',
                'time'      => '78',
                'price'     => '54900',
                'image'     => 'assets/image/c4.jpg',
            ],
            4=> [
                'id'        => 5,
                'name'      => 'WEB DESIGN & DEVELOPMENT',
                'schedule'  => '19 Mar- 29 july 2024',
                'time'      => '94',
                'price'     => '12440',
                'image'     => 'assets/image/c5.png',
            ],
            5=> [
                'id'        => 6,
                'name'      => 'ADVANCE E-COMMERCE',
                'schedule'  => '2 Mar- 9 Jun 2024',
                'time'      => '144',
                'price'     => '56900',
                'image'     => 'assets/image/c6.png',
            ],
            6=> [
                'id'        => 7,
                'name'      => 'Cisco Certified Network Associate (CCNA)',
                'schedule'  => '5 Mar- 9 May 2024',
                'time'      => '124',
                'price'     => '42790',
                'image'     => 'assets/image/c7.png',
            ],
            7=> [
                'id'        => 8,
                'name'      => 'Graphic and Web UI Design',
                'schedule'  => '1 Mar- 4 Aug 2024',
                'time'      => '84',
                'price'     => '41900',
                'image'     => 'assets/image/c8.jpg',
            ],
        ];
    }

    public function getAllTrainnig()
    {
        return $this->trainnigs;
    }

}