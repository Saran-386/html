--TEST--
OSS-Fuzz #17474: Memory leak on duplicate Copyright tags
--EXTENSIONS--
exif
--FILE--
<?php

// Only checking for an absence of leaks here.
@exif_read_data(__DIR__ . '/duplicate_copyright_tag_leak.tiff');

?>
===DONE===
--EXPECT--
===DONE===
