<?php
/**
 * @created:
 * @author : xiaoqiang6@staff.weibo.com
 * @date   : 2018/6/10 下午3:39
 */
abstract class Question {
    protected $prompt;
    protected $marker;
    function __construct($prompt, Marker $marker)
    {
        $this->prompt = $prompt;
        $this->marker = $marker;
    }

    function mark($response) {
        return $this->marker->mark($response);
    }
}

class TextQuestion extends Question {

}
class AVQuestion extends Question {

}

abstract class Marker {
    protected $test;
    function __construct($test)
    {
        $this->test = $test;
    }

    abstract function mark($response);
}

class MarkLogicMarker extends Marker {
    function mark($response)
    {
        return __CLASS__ . "|response:{$response}";
    }
}


class MatchMarker extends Marker {
    function mark($response)
    {
        return __CLASS__ . "|response:{$response}";
    }
}


class RegexpMarker extends Marker {
    function mark($response)
    {
        return __CLASS__ . "|response:{$response}";
    }
}

$text = new TextQuestion("text", new MarkLogicMarker('logic'));
print $text->mark("text_logic");