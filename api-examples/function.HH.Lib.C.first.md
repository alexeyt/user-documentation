```basie-usage.hack
$strings = vec["a", "b", "c"];
$first_string = C\first($strings);
echo "First string in traversable: $first_string \n";

$empty_traversable = vec[];
$first_element = C\first($empty_traversable);
$first_element_as_string = $first_element ?? "null";
echo "First element in empty traversable: $first_element_as_string";
```
