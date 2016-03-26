<?php

require 'vendor/autoload.php';
$commands = require_once __DIR__ . '/src/Console/console.php';



use Symfony\Component\Console\Application;


$application = new Application();
// $application->add(new InitCommand());
// $application->add(new GreetCommand());
// $application->add(new ServerCommand());
// $application->add(new NewCommand());
// $application->add(new GenerateCommand());
// $application->add(new CleanCommand());


$application->addCommands(
    $commands
);

$application->run();


// $yaml = new Parser();

// try {
// 	$value = $yaml->parse(file_get_contents('config.yml'));
// } catch (ParseException $e) {
// 	 printf("wwwUnable to parse the YAML string: %s", $e->getMessage());
// }
// var_dump( $value );

// $yaml = Yaml::parse(file_get_contents('config.yml'));

// var_dump( $yaml );

// $array = array(
//     'foo' => 'bar',
//     'bar' => array('foo' => 'bar', 'bar' => 'baz'),
// );

// $dumper = new Dumper();

// $yaml = $dumper->dump($array,2);

// file_put_contents('yaml.yml', $yaml);
