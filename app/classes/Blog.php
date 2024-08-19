<?php
namespace App\classes;
class Blog
{
    public $blogs = [];
    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id'           => 1,
                'title'        => 'This is title one',
                'description'  => 'This is blog title one description',
            ],
            1 => [
                'id'           => 2,
                'title'        => 'This is title two',
                'description'  => 'This is blog title two description',
            ],
            2 => [
                'id'           => 3,
                'title'        => 'This is title three',
                'description'  => 'This is blog title three description',
            ],
            3 => [
                'id'           => 4,
                'title'        => 'This is title four',
                'description'  => 'This is blog title four description',
            ],
        ];
    }
    public function getAllBlog()
    {
        return $this->blogs;
    }
}