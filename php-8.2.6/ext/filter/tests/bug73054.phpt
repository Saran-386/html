--TEST--
Bug #73054 (default option ignored when object passed to int filter)
--EXTENSIONS--
filter
--FILE--
<?php
var_dump(
    filter_var(new stdClass, FILTER_VALIDATE_INT, [
        'options' => ['default' => 2],
    ]),
    filter_var(new stdClass, FILTER_VALIDATE_INT, [
        'options' => ['default' => 2],
        'flags' => FILTER_NULL_ON_FAILURE
    ])
);
?>
--EXPECT--
int(2)
int(2)
