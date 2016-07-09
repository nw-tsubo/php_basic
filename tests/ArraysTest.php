<?php
namespace Test;

use PHPUnit\Framework\TestCase;
use App\Arrays;

class ArraysTest extends TestCase
{
    private $target;

    public function setUp()
    {
        $this->target = new Arrays();
    }

    public function testGetStatistic()
    {
        // 統計情報の連想配列が返ってくるはず
        $expected1 = [
            'num' => 5,
            'total' => 15,
            'max' => 5,
            'min' => 1,
            'ave' => 3,
        ];
        $this->assertEquals($expected1, $this->target->getStatistic([1, 2, 3, 4, 5]));

        $expected2 = [
            'num' => 10,
            'total' => 55,
            'max' => 10,
            'min' => 1,
            'ave' => 5.5,
        ];
        $this->assertEquals($expected2, $this->target->getStatistic([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]));
    }
}
