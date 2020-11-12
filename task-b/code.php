<?php

/*
     *  Function    : generateSentence()
     *
     *  Description : Generate a sentence listing out all items provided in an array.
     *
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     *
     *  Return      : string
     *
     *  Example     : See run.php for input/output examples
     *
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     *
     */


/**
 * Generate a sentence listing out all items provided in an array.
 *
 * @param  string $start The start of the sentence
 * @param  array $items The list of items
 * @param  string/array $append (optional) item types to be appended to each item
 * @return string
 */
function generateSentence($start, $items, $append = NULL)
{
    // Start with the most complex test
    if (is_array($append)) {
        // Create array of actual items used in the final sentence
        $items = array_map(function ($singleItem, $singleAppend) {
            return $singleItem . ' ' . $singleAppend;
        }, $items, $append);
    } else if (is_string($append)) {
        // Create array of actual items used in the final sentence (less complex test)
        // Use 'use' to get access to $append
        $items = array_map(function ($singleItem) use ($append) {
            return $singleItem . ' ' . $append;
        }, $items);
    }

    // Implode array and concatenate it with the rest
    return $start . ': ' . implode(', ', array_slice($items, 0, -1)) . ' and ' . end($items) . '.';
}
