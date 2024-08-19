<?php


namespace App\classes;


class Product
{
   public $products = [];

   public function __construct()
   {
       $this->products = [
           0=> [
               'id'           => 1,
               'name'         => 'Smart Mobile',
               'price'        => '12000',
               'description'  => 'Smart Mobile Description',
               'image'        => 'assets/image/p1.jpg',
           ],
           1=> [
               'id'           => 2,
               'name'         => 'Falguni New Sharee',
               'price'        => '8000',
               'description'  => 'Sharee Description',
               'image'        => 'assets/image/p2.jpg',
           ],
           2=> [
               'id'           => 3,
               'name'         => 'Bangali Panjabi',
               'price'        => '1200',
               'description'  => 'Panjabi Description',
               'image'        => 'assets/image/p3.jpg',
           ],
           3=> [
               'id'           => 4,
               'name'         => 'Smart Watch',
               'price'        => '3000',
               'description'  => 'Smart Watch Description',
               'image'        => 'assets/image/p4.jpg',
           ],
           4=> [
               'id'           => 5,
               'name'         => 'Diamond cut Necklace',
               'price'        => '15000',
               'description'  => 'Necklace Description',
               'image'        => 'assets/image/p5.jpg',
           ],
           5=> [
               'id'           => 6,
               'name'         => 'New HP Laptop',
               'price'        => '50000',
               'description'  => 'Smart Laptop Description',
               'image'        => 'assets/image/p6.jpg',
           ],
       ];
   }

   public function getAllProduct()
   {
       return $this->products;
   }
}