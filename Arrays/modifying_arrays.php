<?php

$dishes['Beef Chow Foon'] = 12;
$dishes['Beef Chow Foon']++;
$dishes['Roast Duck'] = 3;

var_dump($dishes);
echo "\n\n";

$dishes['total'] = $dishes['Beef Chow Foon'] + $dishes['Roast Duck'];

if($dishes['total'] > 15) {
    print "You ate a lot: \n";
}

print 'You ate ' . $dishes['Beef Chow Foon'] . ' dishes of Beef Chow Foon.'."\n";
print "\n";

$meals['Walnut Bun'] = '$3.95';
$hosts['www.example.com'] = 'website';

print "A Walnut Bun costs {$meals['Walnut Bun']}.\n";
print "www.example.com is a {$hosts['www.example.com']}.\n";

?>
