<?php
/**
 * @created:
 * @author : xiaoqiang6@staff.weibo.com
 * @date   : 2018/6/4 上午10:20
 */
//namespace  one;
class Animal {
    private $id;
    public $name;
    public $age;
    private $group;
    public $writer;
    function __construct($name, $age, Writer $writer)
    {
        $this->name = $name;
        $this->age = $age;
        $this->group = static::eat();
        $this->writer = $writer;
    }

    // 延迟静态绑定
//    public static function create($name, $age)
//    {
//        return new static($name, $age);
//    }

    // 隐式声明为 public 方法
    function  eat()
    {
        return 'default';
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    function __toString()
    {
        return "name:{$this->name}|age:{$this->age}";
    }
    // 进程结束的时候调用销毁
    function __destruct()
    {
        echo 'distruct:' . __CLASS__;
    }

    function __clone()
    {
        $this->writer = clone $this->writer;
    }
}

class Person extends Animal {
    public $sex;
//    function __construct($name, $age, $sex)
//    {
//        parent::__construct($name, $age);
//        $this->sex = $sex;
//
//    }
    function eat()
    {
        return __CLASS__;
    }
}

class Dog extends Animal {
    public $color;
//    function __construct($name, $age, $color)
//    {
//        parent::__construct($name, $age);
//        $this->sex = $color;
//    }
}

class Totalizer {
    // 匿名函数和闭包
    // 将匿名函数放在普通函数中，也可以将匿名函数返回，这就构成了一个简单的闭包
    public static function computeLevel($aimLevel) {
        $levelCount = 0;
        return function ($animal) use ($aimLevel, &$levelCount) {
            $levelCount += $animal->level;
            print "levelCount: $levelCount \n";
            if ($levelCount > $aimLevel)
            {
                print "reach level aim: {$aimLevel}";
            }
        };
    }
}

class Writer {
    public $id = 0;
    function __construct($id)
    {
        $this->id = $id;
    }

    protected $animals= array();
    public function addPerson(Animal $animal)
    {
        $this->animals[] = $animal;
    }

    public function write()
    {
        $str = '';
        foreach ($this->animals as $animal)
        {
            $str .= "name:{$animal->name}|age:{$animal->age}\n";
        }
        print $str;
    }
}


