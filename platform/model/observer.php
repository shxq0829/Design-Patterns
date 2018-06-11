<?php
/**
 * @created:
 * @author : xiaoqiang6@staff.weibo.com
 * @date   : 2018/6/10 下午8:59
 */
abstract class LoginObserver implements SplObserver {
    private $login;
    function __construct(Login $login)
    {
        $this->login = $login;
        $login->attach($this);
    }

    function update(SplSubject $subject)
    {
        if ($this->login === $subject)
        {
            $this->doUpdate($subject);
        }
    }

    abstract function doUpdate(Login $login);
}

class SecurityMonitor extends LoginObserver {
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        if ($status[0] == Login::LOGIN_ACCESS)
        {
            print __CLASS__ . ":\tsending mail to me\n";
        }
    }
}
class GeneralLogger extends LoginObserver {
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        print __CLASS__ . ":\tadd login data to log\n";
    }
}
class PartnerShipTool extends LoginObserver {
    function doUpdate(Login $login)
    {
        $status = $login->getStatus();
        print __CLASS__ . ":\tset cookie if IP matches\n";
    }
}

class Login implements SplSubject {
    const LOGIN_USER_UNKNOWN = 1;
    const LOGIN_WRONG_PASS = 2;
    const LOGIN_ACCESS = 3;
    private $storage;
    private $status = array();

    function __construct()
    {
        $this->storage = new SplObjectStorage();
    }

    function attach(SplObserver $observer)
    {
        $this->storage->attach($observer);
    }

    function detach(SplObserver $observer)
    {
        $this->storage->detach($observer);
    }

    function notify()
    {
        foreach ($this->storage as $obj)
        {
            $obj->update($this);
        }
    }

    private function setStatus($status, $user, $ip) {
        $this->status = array($status, $user, $ip);
    }
    public function getStatus() {
        return $this->status;
    }
    public function handleLogin($user, $pass, $ip)
    {
        switch (rand(1, 3)) {
            case 1 :
                $this->setStatus(self::LOGIN_ACCESS, $user, $ip);
                $ret = true; break;
            case 2:
                $this->setStatus(self::LOGIN_WRONG_PASS, $user, $ip);
                $ret = false; break;
            case 3:
                $this->setStatus(self::LOGIN_USER_UNKNOWN, $user, $ip);
                $ret = false; break;
        }
        $this->notify();
        return $ret;
    }
}

