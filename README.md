# Dad Jokes PHP Library
Small PHP library that tells a random dad joke.

_Example of usage_
```
<?php

require_once "./vendor/autoload.php";

$dadJokes = new Alzpk\DadJokes\DadJokes();

echo $dadJokes->tellRandomJoke() . PHP_EOL;
```
