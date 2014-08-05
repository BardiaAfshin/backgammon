
abstract class Board {
 //initialize variables
 private $board = Array();

 abstract public function getBoard();
 abstract public function setBoard();

 abstract public function blotted();
}
