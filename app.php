<?php

require 'vendor/autoload.php';

use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\ParseException;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Dumper;

// $yaml = new Parser();

// try {
// 	$value = $yaml->parse(file_get_contents('config.yml'));
// } catch (ParseException $e) {
// 	 printf("wwwUnable to parse the YAML string: %s", $e->getMessage());
// }
// var_dump( $value );

$yaml = Yaml::parse(file_get_contents('config.yml'));

var_dump( $yaml );

// $array = array(
//     'foo' => 'bar',
//     'bar' => array('foo' => 'bar', 'bar' => 'baz'),
// );

// $dumper = new Dumper();

// $yaml = $dumper->dump($array,2);

// file_put_contents('yaml.yml', $yaml);