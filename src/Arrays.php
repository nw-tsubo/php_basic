<?php
/**
 * 配列
 */

namespace App;

class Arrays
{
    /**
     * 配列データの統計情報を連想配列で返す
     *
     * 引数の数値配列から次の連想配列を生成して返す
     * [
     *     'num' => $num,       // 個数
     *     'total' => $total,   // 合計
     *     'max' => $max,       // 最大値
     *     'min' => $min,       // 最小値
     *     'ave' => $ave,       // 平均値
     * ]
     * 平均値、標準偏差は小数点第 1 位で四捨五入する
     *
     * @param array $nums 任意の数値の配列
     * @return array
     */
    public function getStatistic(array $nums)
    {
        $statistic = [];

        // TODO: ここで、連想配列 $statistic を作成する

        return $statistic;
    }
}
