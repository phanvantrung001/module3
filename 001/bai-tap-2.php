<?php
class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = microtime(True);
    }
    public function getStartTime()
    {
        return $this->startTime;
    }
    public function getEndTime()
    {
        return $this->endTime;
    }
    public function start()
    {
        $this->startTime = microtime(True);
    }
    public function stop()
    {
        $this->endTime = microtime(True);
    }
    public function getElapsedTime()
    {
        return round(($this->endTime - $this->startTime) * 1000, 2);
    }
}

// Hàm sắp xếp chọn
function selectionSort($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIdx = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] < $arr[$minIdx]) {
                $minIdx = $j;
            }
        }
        if ($minIdx != $i) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$minIdx];
            $arr[$minIdx] = $tmp;
        }
    }
    return $arr;
}

// Tạo mảng có 100,000 số ngẫu nhiên trong khoảng từ -1000 đến 1000
$arr = [];
for ($i = 0; $i < 100000; $i++) {
    $arr[] = rand(-1000, 1000);
}

// Đo thời gian thực thi của thuật toán sắp xếp chọn
$stopWatch = new StopWatch();
$stopWatch->start();
selectionSort($arr);
$stopWatch->stop();
echo "Thời gian thực thi của thuật toán sắp xếp chọn là: " . $stopWatch->getElapsedTime() . "ms";
