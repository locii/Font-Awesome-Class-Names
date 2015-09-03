# Font-Awesome-Class-Names
A hacky tool to get the class names from the Font Awesome icon page

This script will grab all of the class names from the Font Awesome icon page. This includes any of the icons used in the page itself, so you need to remove external icons used in navigation etc from the list.

### How to use
Unzip to your local server and visit the build.php file.

eg localhost:8888/class-names/build.php

The page will display a list of all class names on the page using this format:

'500px',
'amazon',
'balance-scale',
'battery-0',
'battery-1',
'battery-2',
'battery-3',
'battery-4',
'battery-empty',
'battery-full',
'battery-half',
'battery-quarter',
'battery-three-quarters',

....

Edit the build.php file to change the format or to reinstate the fa- prefix.


Todo:
- Filter icons so only those listed in the icon list are retrieved