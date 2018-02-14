<?php

$booksJson = file_get_contents('books.json');

$books = json_decode($booksJson, true);

# You can use dump to output data to teh screen for testing
#dump($books['The Bell Jar']['author']);

