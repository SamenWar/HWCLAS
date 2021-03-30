<?php /** @noinspection PhpUndefinedClassInspection */

class Figure{
            public $Flat;
            public $Color;
            public $a;
            public $b;
            const SIDE= 4;


            function InfoAbout(){
                echo "this is a figure!!";
            }

    /**
     * @return mixed
     */
    public function getFlat()
    {
        $this->Flat=$this->a*$this->b;
    }


        }

        class Rectangle extends Figure{
            public $a;
            public $b;
            function __construct($a, $b){
                $this->a=$a;
                $this->b=$b;

            }
    function getFlat(){
    return $this->a*$this->b;

        }
    function InfoAbout()
    {
        echo "this is a Rectangle!";
    }
}
        class Triangle extends Figure{
            public $a;
            public $b;
            public $c;
            const SIDE = 3;
            function __construct($a, $b, $c){
                $this->a = $a;
                $this->b = $b;
                $this->c = $c;
            }
            function getFlat()
            {
                $p =($this->a+ $this->b+$this->c)/2;
                return sqrt(($p-$this->a)*($p-$this->b)*($p-$this->c));

            }
            function InfoAbout(){
                echo "this is a triangle!";
            }


        }
        class Square extends Figure{

            public $a;
            function __construct($a)
            {
                $this->a = $a;
            }
            function InfoAbout(){
                echo "this is a Square!";
            }
            function getFlat(): float|int
            {
                return pow($this->a, 2);
            }

        }


        $t = new Triangle(3,6,9);
        echo 'the flat is'.$t->getFlat();
        $r = new Rectangle(2,6);
        echo 'the flat is'.$r->getFlat();
        $s=new Square(4);
        echo 'the flat is'.$s->getFlat();



