<?php

if ( ! function_exists('it')) {
    /**
     * Wrap a value into a Subject to allow expectations
     * to be made outside of the phpspec test suite / context.
     *
     * @param $subject
     *
     * @return \Bossa\PhpSpec\Expect\Subject
     */
    function it($subject) {
        return expect($subject);
    }
}
