
<?php
include '/home/ubuntu/workspace/Calculator.php';
class CalculatorTest extends PHPUnit_Framework_TestCase {
    
    public function testResta() {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->resta(3,1));        
    }
    
    public function testSuma() {
        $calc = new Calculator();
        $this->assertEquals(4, $calc->suma(3,1));        
    }
    
    public function testMutiply() {
        $calc = new Calculator();
        $this->assertEquals(-27, $calc->multiply(-3,9));        
    }

    public function testDivide() {
        $calc = new Calculator();
        $this->assertEquals(3, $calc->divide(3,1));
    }
    
    public function testTotalSuma() {
        $calc = new Calculator();
        $suma1 = $calc->suma(10,5);
        $suma2 = $calc->suma(11,5);
        $suma3 = $calc->suma(12,5);
        $this->assertEquals(48, $calc->totalSuma($suma1, $suma2, $suma3));
    }
    

    public function testTotalResta() {
        $calc = new Calculator();
        $resta1 = $calc->resta(10,5);
        $resta2 = $calc->resta(11,5);
        $resta3 = $calc->resta(12,5);
        $this->assertEquals(48, $calc->totalResta($resta1, $resta2, $resta3));
    }


   public function testTotal() {
        $calc = new Calculator();
        $suma1 = $calc->suma(10,5);
        $suma2 = $calc->suma(11,5);
        $suma3 = $calc->suma(12,5);
    }
    
}