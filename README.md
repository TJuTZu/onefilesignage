# onefilesignage
Simple one file php signage
designed to be used as low cost raspberry pi signage for home and public services

shows image slideshow of jpeg files from web server folder(s)
By default from subfolder 'All' below folder where index.php is installed.

Image show time is set as milliseconds - default 20000 - 20 seconds

for example:

- www (index.php)
  - All (Images for all)
  - Group1 (images for group 1)
  - Group2 (images for group 2)


**_index.php?dir=Group1_** will show images from folder 'All' and from folder 'Group1'

**_index.php?dir=Group2_** will show images from folder 'All' and from folder 'Group2'

This allowes
1) common content to all displays
2) and individual content for groups



Also sone instructions how to use [Raspberry Pi](raspberrypi.md) as server and client
