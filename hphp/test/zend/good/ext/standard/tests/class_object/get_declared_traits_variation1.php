<?hh
/* Prototype  : proto array get_declared_traits()
 * Description: Returns an array of all declared traits. 
 * Source code: Zend/zend_builtin_functions.c
 * Alias to functions: 
 */


echo "*** Testing get_declared_traits() : testing autoloaded traits ***\n";

HH\autoload_set_paths(
  dict[
    'class' => dict[
      'autotrait' => 'AutoTrait.inc',
    ],
  ],
  __DIR__.'/',
);

echo "\n-- before instance is declared --\n";
var_dump(in_array('AutoTrait', get_declared_traits()));

echo "\n-- after use is declared --\n";

class MyClass {
    use AutoTrait;
}

var_dump(in_array('AutoTrait', get_declared_traits()));

echo "\nDONE\n";
