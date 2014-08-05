
abstract class Backgammon {
 abstract public function addChecker($checker);
 abstract public function moveChecker($number, $checker, $origin, $end $board);

 abstract private function isHit();
}


