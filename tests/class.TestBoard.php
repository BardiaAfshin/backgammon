<?php
/**
 * Created by PhpStorm.
 * User: bardiaafshin
 * Date: 8/4/14
 * Time: 10:34 PM
 */

//namespace tests;
require '../class.AbstractBoard.php';


class TestBoard extends \PHPUnit_Framework_TestCase {

    public function testCanIstantiateBoard()
    {
        $board = new Board;
    }

}
 