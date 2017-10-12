 <?php 
 //echo "Hello, PHP!"

class MyClass
{
	    public $prop1 = "I'am a class property";
	    public $a1 = 9;
	    private $a2 = 7;
  //  Class properties and methods go here
         // jika variable sudah ada di kelas lain, ngga masalah nama sama 
}
class YourClass
{
	    public $prop1 = "You are a class property";
	    public function tambah($f1, $f2) {
	           return $f1 + $f2;
	    }
        public function kurang($f1, $f2) {
    	       return $f1 - $f2;
        }
        public function kali($f1, $f2) {
    	return $f1 * $f2;
        }
  // Class properties and method go here
}        
$obj = new MyClass;
$obj2 = new YourClass;

$tambahDariClass = $obj2->tambah(1, 2);
$kurangDariClass = $obj2->kurang(1, 2);
$kaliDariClass = $obj2->kali(1, 2);

echo $tambahDariClass."<br>";
echo $kurangDariClass."<br>";
echo $kaliDariClass."<br>";

// var_dump($obj, $obj2);

?> 