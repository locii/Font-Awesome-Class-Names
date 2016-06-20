# Font-Awesome-Class-Names
A hacky tool to get the class names from the Font Awesome icon page

This script will grab all of the class names from the Font Awesome icon page. This includes any of the icons used in the page itself, so you need to remove external icons used in navigation etc from the list.

## How to use

Unzip to your local server and visit the build.php file in your browser.
eg localhost:8888/class-names/build.php


## Output
a. After visiting the build file the page will display a list of all class names on the page using this format:

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

**You can edit the build.php file to change the format or to reinstate the fa- prefix.**

b. In addition to the in page output a separate txt file is generated listing the fonts in the same format as rendered on the page ie /list/list-of-fontawesome-fonts.html
c. A cheat sheet with basic styling and font example can be found by visiting the url: localhost:8888/class-names/cheat_sheet/


