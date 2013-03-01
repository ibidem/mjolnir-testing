<?php namespace app;

// This is an IDE honeypot. It tells IDEs the class hirarchy, but otherwise has
// no effect on your application. :)

// HowTo: order honeypot -n 'mjolnir\testing'


class AnotherExampleClass extends \mjolnir\testing\AnotherExampleClass
{
	/** @return \app\AnotherExampleClass */
	static function instance() { return parent::instance(); }
}

class HiddenExampleClass extends \mjolnir\testing\HiddenExampleClass
{
	/** @return \app\HiddenExampleClass */
	static function instance() { return parent::instance(); }
}

class SimpleExampleClass extends \mjolnir\testing\SimpleExampleClass
{
	/** @return \app\SimpleExampleClass */
	static function instance() { return parent::instance(); }
}
