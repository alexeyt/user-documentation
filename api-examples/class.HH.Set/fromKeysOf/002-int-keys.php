<?hh

namespace Hack\UserDocumentation\API\Examples\Set\FromKeysOf\Ints;

<<__EntryPoint>>
function int_keys_main(): void {
  $uploaders_by_id = Map {
    4993063 => 'Amy Smith',
    9361760 => 'John Doe',
  };

  $commenters_by_id = darray[
    7424854 => 'Jane Roe',
    5740542 => 'Joe Bloggs',
  ];

  // Create a Set from the integer keys of a Map
  $uploader_ids = Set::fromKeysOf($uploaders_by_id);
  \var_dump($uploader_ids); // $uploader_ids contains 4993063, 9361760

  // Create a Set from the integer keys of an associative array
  $commenter_ids = Set::fromKeysOf($commenters_by_id);
  \var_dump($commenter_ids); // $commenter_ids contains 7424854, 5740542
}
