<!-- Write a PHP program to define Interface shape which has two method as area() and
volume(). Define a constant PI. Create a class Cylinder implement this interface and
calculate area and Volume. -->
<?php
interface Shape {
    public function area();
    public function volume();
}
class Cylinder implements Shape {
    private $radius;
    private $height;
    public function __construct($radius, $height) {
        $this->radius = $radius;
        $this->height = $height;
    }
    public function area() {
        $baseArea = $this->calculateBaseArea();
        $sideArea = $this->calculateSideArea();
        $totalArea = 2 * $baseArea + $sideArea;
        return $totalArea;
    }
    public function volume() {
        $baseArea = $this->calculateBaseArea();
        $volume = $baseArea * $this->height;
        return $volume;
    }
    private function calculateBaseArea() {
        return self::PI * pow($this->radius, 2);
    }

    private function calculateSideArea() {
        return 2 * self::PI * $this->radius * $this->height;
    }
}
$cylinder = new Cylinder(5, 10);
$area = $cylinder->area();
$volume = $cylinder->volume();
echo "Cylinder Area: " . $area . "\n";
echo "Cylinder Volume: " . $volume . "\n";
?>
