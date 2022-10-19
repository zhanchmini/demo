<?php

namespace Zhanchmini\Demo;

/**
 * 连续整数求和
 *
 * Class ContinuousSum
 * @package Changhai Zhan
 */
class ContinuousSum
{
    /**
     * @var int 开始数
     */
    protected int $startNumber;

    /**
     * @var int 结束数
     */
    protected int $endNumber;

    /**
     * @var int 和
     */
    private int $sum;

    /**
     * ContinuousSum constructor.
     *
     * @param int $endNumber 结束数
     * @param int $startNumber 开始数
     * @throws \Exception
     */
    public function __construct(int $startNumber = 1, int $endNumber = 100)
    {
        if ($startNumber < 0 || $endNumber < 0) {
            throw new \Exception('start number and end number must be greater than or equal to 0.');
        }

        if ($endNumber < $startNumber) {
            throw new \Exception('end number must be greater than or equal to start number.');
        }

        $this->startNumber = $startNumber;
        $this->endNumber = $endNumber;
    }

    /**
     * 求和
     *
     * @return void
     */
    public function sum()
    {
        $this->sum = 0;

        for ($i = $this->startNumber; $i <= $this->endNumber; $i++) {
            $this->sum += $i;
        }
    }

    /**
     * 返回和
     *
     * @return int
     * @throws \Exception
     */
    public function getSum(): int
    {
        if (!isset($this->sum)) {
            $this->sum();
        }

        return $this->sum;
    }
}
