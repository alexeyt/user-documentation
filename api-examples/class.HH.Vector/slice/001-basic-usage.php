<?hh

namespace Hack\UserDocumentation\API\Examples\Vector\Slice;

<<__EntryPoint>>
function basic_usage_main(): void {
  $v = Vector {'red', 'green', 'blue', 'yellow'};

  // Start at index 1 ('green') and include 3 elements
  $v2 = $v->slice(1, 3);

  \var_dump($v2);
}
