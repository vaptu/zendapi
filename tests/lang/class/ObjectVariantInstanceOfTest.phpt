--TEST--
ObjectVariant instanceOf method test
--FILE--
<?php

if (class_exists("ObjectVariantClass")) {
    $object = new ObjectVariantClass();
    $object->testInstanceOf();
}

?>
--EXPECT--
B is instance of A
C is instance of B
C is instance of A
A is not instance of B
C is not instance of B
C is not instance of A
