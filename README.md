# ASV_Interface
Internet based controller for JavaASV
https://github.com/mabster314/JavaASV


This project was created as a way of editing configuration files though a nice webpage. 

It has been tested with a Raspberry PI running Apache 2. The javaASV repo must be located in the same location as these files.

The GUI was developed mostly using nicepage, then the HTML files were extracted, converted to PHP files, and edited as desired to add functionality.
https://nicepage.com/

You MUST make sure that you are running Apache 2, and that it will allow the following functions to work:
     file_get_contents($filename)
     file_put_contents($filename)
     shell_exec("insert terminal command here")
