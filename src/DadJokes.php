<?php

namespace Alzpk\DadJokes;

class DadJokes
{

    /**
     * File path and array for the jokes.
     *
     * @var string
     */
    private $filePath = __DIR__ . '/data/jokes.json';
    private $jokes = [];

    /**
     * DadJokes constructor.
     */
    public function __construct()
    {

        // Make sure the file exists
        if(file_exists($this->filePath)) {

            // Read JSON file
            $json = file_get_contents($this->filePath);

            // Decode the JSON and store the jokes in the
            // jokes var.
            $this->jokes = json_decode($json, true);

        }

    }

    /**
     * Tell a joke
     *
     * @return mixed|string
     */
    public function tellRandomJoke()
    {

        // Make sure that there are jokes
        if(!empty($this->jokes)) {

            // Set min and max for the random joke.
            $min = 0;
            $max = count($this->jokes) - 1;

            // Set a random joke number.
            $joke = rand($min, $max);

            // Print the joke.
            return $this->jokes[$joke];

        } else {

            // Print, No jokes found!
            return 'No jokes found!';

        }

    }

}
