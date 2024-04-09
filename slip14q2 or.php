Q3 or.
<?php
class MyClass {
    public $property1;
    protected $property2;
    private $property3;

    public function method1() {
        // Method implementation
    }

    protected function method2() {
        // Method implementation
    }

    private function method3() {
        // Method implementation
    }
}

$obj = new MyClass();

// Get class name
$className = get_class($obj);
echo "Class Name: $className\n";

// Check if an object is an instance of a specific class
if ($obj instanceof MyClass) {
    echo "The object is an instance of MyClass\n";
}

$properties = get_object_vars($obj);
echo "Object Properties:\n";
foreach ($properties as $name => $value) {
    echo "$name: $value\n";
}
$methods = get_class_methods($obj);
echo "Object Methods:\n";
foreach ($methods as $method) {
    echo "$method\n";
}
$methodName = 'method1';
if (method_exists($obj, $methodName)) {
    echo "The method $methodName exists in the class\n";
}
$propertyName = 'property1';
if (property_exists($obj, $propertyName)) {
    echo "The property $propertyName is defined in the class\n";
}
?>
