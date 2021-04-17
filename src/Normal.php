<?php
/**
 * @author Cao Kang (caokang@outlook.com)
 * Class Normal
 * Project calculate
 * 2021/4/17 3:15 下午
 */


namespace Qdd\Calculate;


class Normal
{
    public function add($x,$y){
        return bcadd($x,$y);
    }
}