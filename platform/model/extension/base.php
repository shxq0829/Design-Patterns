<?php
/**
 * @created:
 * @author : xiaoqiang6@staff.weibo.com
 * @date   : 2018/6/4 下午4:43
 */
class base
{
    public $name;
    public $age;
    private $group;
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->group = static::eat();
    }

    // 隐式声明为 public 方法
    function  eat()
    {
        return 'default';
    }

    function __toString()
    {
        return "name:{$this->name}|age:{$this->age}";
    }
}