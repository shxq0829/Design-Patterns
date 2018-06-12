<?php
//use model\extension\animal;
//function __autoload($className)
//{
//    include_once "platform/model/extension/$className.php";
//}

//spl_autoload_register(function ($className) {
//    include "platform/model/extension/$className.php";
//}, true, true);
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);



//{
//    $son = new Son('xiaojie', 30);
//    $test1 = new Test('xiaoqiang', 28);
//    print $test1->eat();
//    $setting = simplexml_load_file('views/setting.xml');
//    $bool = (string)$setting->resolvedomains;
//}

//$animal = new Animal('animal', 1);
//$person = new Person('person', 2, 1);
//$dog = new Dog('dog', 4, 'yellow');
//$writer = new Writer();
//$writer->addPerson($animal);
//$writer->addPerson($person);
//$writer->addPerson($dog);
//$writer->write();

//print_r(Animal::create('animal', 1));
//print_r(Person::create('person', 2));
//print_r(Dog::create('dog', 2));

//include ("platform/comm/conf.php");
//$config = new Comm_Conf(dirname(__FILE__) . '/platform/config/db.xml');
//$config->set('dbname', 'top');
//$config->write();

//require "platform/model/extension/animal.php";
//$animal1 = new Animal('xiaoqiang', 1, new Writer(1));
//$dog = new Dog('dog', 2, new Writer(2));
//print ($animal1 instanceof Dog);

//$animalClass = new ReflectionMethod('Animal');
//var_dump($animalClass->invoke('eat'));
//$animal1->setId(3);
//$animal1->writer->id = 3;
//$animal2 = clone $animal1;
//$animal1->writer->id = 2;
//print $animal2->writer->id;
//$animal1->setId(4);
//print $animal2->getId();

//$input = $_REQUEST['input'];
//eval("print file_get_contents('/etc/passwd');");
//eval($input);


//require_once "platform/model/observer.php";
//$login = new Login();
//new SecurityMonitor($login);
//new GeneralLogger($login);
//new PartnerShipTool($login);
//$login->handleLogin('xiaoqiang', 'shxq0829', '10.210.234.136');

