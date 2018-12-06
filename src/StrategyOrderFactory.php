<?php
/**
 * Created by PhpStorm.
 * User: dev-alexf
 * Date: 06.12.18
 * Time: 14:54
 */

namespace App;


class StrategyOrderFactory
{

    public function create($orderBy)
    {
        switch ($orderBy) {
            case StrategyOrderByAsc::ORDER:
                return new StrategyOrderByAsc();
            case StrategyOrderByDesc::ORDER:
                return new StrategyOrderByDesc();
                case StrategyOrderByNull::ORDER:
                return new StrategyOrderByNull();
        }

        throw new \RuntimeException(
            \sprintf('Can`t ordered by %s', $orderBy)
        );
    }
}