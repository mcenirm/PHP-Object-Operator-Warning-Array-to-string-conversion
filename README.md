# PHP-Object-Operator-Warning-Array-to-string-conversion

What is causing the warning in PHP 8.1?

```
PHP Warning:  Array to string conversion in test.php on line 13
```

[Troublesome version](trouble.php#L13):

```php
$actual   = $the_instance->$the_array['the_property_name'];
```

[Compatible version](compatible.php#L13):

```php
$actual   = $the_instance->{$the_array['the_property_name']};
```

According to ["Changes to the handling of indirect variables, properties, and methods"](https://www.php.net/manual/en/migration70.incompatible.php#migration70.incompatible.variable-handling.indirect), this changed in PHP 7.0:

| Expression          | PHP 5 interpretation  | PHP 7 interpretation  |
| ------------------- | --------------------- | --------------------- |
| `$foo->$bar['baz']` | `$foo->{$bar['baz']}` | `($foo->$bar)['baz']` |

> Code that used the old right-to-left evaluation order must be rewritten to explicitly use that evaluation order with curly braces (see the above middle column). This will make the code both forwards compatible with PHP 7.x and backwards compatible with PHP 5.x.
