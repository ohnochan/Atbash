# Atbash
This script that allows you to encrypt text according to a given alphabet using the cipher Atbash.

## Encode string
```php
$str = "some code"; //The string to encode.
$abc = "abcdefghijklmnopqrstuvwxyz"; //The alphabet you need.

$new_str = encodeAtbash($str, $abc); //hlnv xlwv
```
## Decode string
```php
$str = "hlnv xlwv"; //The string to decode.
$abc = "abcdefghijklmnopqrstuvwxyz"; //The alphabet used for encoding.

$new_str = decodeAtbash($str, $abc); //some code
```
