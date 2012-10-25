<?php namespace app;

// This is an IDE honeypot. It tells IDEs the class hirarchy, but otherwise has
// no effect on your application. :)

// HowTo: order honeypot -n 'mjolnir\testing'

class AnotherExampleClass extends \mjolnir\testing\AnotherExampleClass { /** @return \mjolnir\testing\AnotherExampleClass */ static function instance() { return parent::instance(); } }
class ExampleClass extends \mjolnir\testing\ExampleClass { /** @return \mjolnir\testing\ExampleClass */ static function instance() { return parent::instance(); } }
class HiddenExampleClass extends \mjolnir\testing\HiddenExampleClass { /** @return \mjolnir\testing\HiddenExampleClass */ static function instance() { return parent::instance(); } }
