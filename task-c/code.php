<?php

/*
     *  Class       : Counter
     *
     *  Description : Simple class allowing you to count by X, get the count value, and reset the value.
     *
     *  Parameters  : (int) count           - (optional) The starting count value [default: 0]
     *
     *  Variables   : (private:int) count   - The count value
     *
     *  Functions
     *
     *      Function        : (public) count()
     *
     *          Description : Increment the count value
     *
     *          Parameters  : (int) n       - (optional) The value to increase the count by [default: 1]
     *
     *          Return      : NULL
     *
     *      Function        : (public) get()
     *
     *          Description : Return the current count value
     *
     *          Parameters  : [NONE]
     *
     *          Return      : int
     *
     *      Function        : (public) reset()
     *
     *          Description : Reset the count value to 0
     *
     *          Parameters  : [NONE]
     *
     *          Return      : NULL
     *
     *  Example     : See run.php for input/output examples
     *
     *  Test        : Execute run.php to test your implementation.
     *
     */


/**
 * Simple class allowing you to count by X, get the count value, and reset the value.
 */
class Counter
{
    /**
     * @param  int $count (optional) The starting count value [default: 0]
     * @return void
     */
    public function __construct($count = 0)
    {
        $this->count = $count;
    }

    /**
     * Increment the count value.
     *
     * @param  int $n (optional) The value to increase the count by [default: 1]
     * @return void
     */
    public function count($n = 1)
    {
        $this->count += $n;
    }

    /**
     * Return the current count value
     *
     * @return int
     */
    public function get()
    {
        return $this->count;
    }

    /**
     * Reset the count value to 0
     *
     * @return void
     */
    public function reset()
    {
        $this->count = 0;
    }
}
