<?php 
    class ProductItem{
        public $name;
        public $price;
        public $description;
        public $image;
        public $category;

        function __construct($name,$price,$image,$category="",$description="")
        {
            $this->name = $name;
            $this->price = $price;
            $this->image = $image;
            $this->description = $description;
            $this->category = $category;
        }
    }
?>