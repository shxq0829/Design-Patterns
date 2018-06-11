<?php
/**
 * @created:
 * @author : xiaoqiang6@staff.weibo.com
 * @date   : 2018/6/10 下午1:20
 */
abstract class Tile{
    function getResource() {
        return 1;
    }
}

abstract class Decorate extends Tile {
    protected $tile;
    function __construct(Tile $tile)
    {
        $this->tile = $tile;
    }
    function getTile()
    {
        return $this->tile;
    }
}

class plain extends Tile
{
    function getResource()
    {
        // TODO: Implement getResource() method.
        return 2;
    }
}

class DiaDeco extends Decorate {
    function getResource()
    {
        return $this->tile->getResource() + 2 ;
    }

}

class PolluDeco extends Decorate {
    function getResource()
    {
        return $this->tile->getResource() -4 ;
    }
}


$plain = new plain();
$DiaPollu = new PolluDeco(new DiaDeco($plain));
var_dump($DiaPollu->getTile()->getTile()->getResource());