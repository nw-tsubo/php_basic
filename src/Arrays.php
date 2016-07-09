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

    /**
     * 入力配列から単一のカラムの値を返す
     *
     * 補足説明
     * array_column() 関数と同じ機能を実装せよ
     * http://php.net/manual/ja/function.array-column.php
     *
     * @param array $rows 入力配列。値を取り出したい多次元配列
     * @param mixed $key 値を返したいカラム
     * @return array 単一カラムの値の配列
     */
    public function getArrayColumn(array $input, mixed $key)
    {
        $values = [];

        // TODO: ここで、$input から $key カラムのデータのみを抜き出し、$values 配列にセットする
 
        return $values;
    }
}
