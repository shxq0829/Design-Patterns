<?php
/**
 * @created:
 * @author : xiaoqiang6@staff.weibo.com
 * @date   : 2018/6/4 上午12:40
 */
final class Comm_Conf {
    private $file;
    private $xml;
    private $lastmatch;

    function __construct($file)
    {
        $this->file = $file;
        if (!file_exists($file))
        {
            throw new Exception("file $file does not exists");
        }
        $this->xml = simplexml_load_file($file, null, LIBXML_NOERROR);
        if (!is_object($this->xml))
        {
            throw new Exception(libxml_get_last_error());
        }
//        print gettype($this->xml);  // output: object
        $matches = $this->xml->xpath("/conf");
        if (!count($matches))
        {
            throw new Exception('could not find root element: conf');
        }
    }

    function write()
    {
        if (!is_writeable($this->file))
        {
            throw new Exception("file $this->file is not writeable");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }

    function get($str)
    {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if (count($matches))
        {
            $this->lastmatch = $matches[0];
            return $matches[0];
        }
        return null;
    }

    function set($key, $value)
    {
        if (!is_null($this->get($key)))
        {
            $this->lastmatch[0] = $value;
            return;
        }
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}