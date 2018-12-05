<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 05.12.18
 * Time: 16:53
 */

namespace App;


class Context
{

    private $strategy;

    public $data =[];

    /**
     * Context constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }


    public function sort()
    {
        $result = $this->strategy->sorting($this->data);
        return $result;
    }
}