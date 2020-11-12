<?php

/*
     *  Function    : containsWord()
     *
     *  Description : Checks whether a sentence contains a specific word, case insensitive.
     *
     *  Parameters  : (string) word         - The word to find
     *                (string) sentence     - The sentence to search
     *
     *  Return      : boolean
     *
     *  Example     : See run.php for input/output examples
     *
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     *
     */


/**
 * Checks whether a sentence contains a specific word, case insensitive.
 *
 * @param  string $word The word to find
 * @param  string $sentence The sentence to search
 * @return boolean
 */
function containsWord($word, $sentence)
{
    $word = strtolower($word);

    // Array of punctuation marks to remove from $sentence
    $pun_chars = ['.', ',', ':', ';', '?', '!', '(', ')', '[', ']', '-', '\'', '\"'];

    // Remove punctuation marks, convert to lowercase and split string into array of words
    $sentence_array = explode(' ', strtolower(str_replace($pun_chars, ' ', $sentence)));

    if (in_array($word, $sentence_array)) {
        return true;
    } else {
        return false;
    }
}
