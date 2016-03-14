How to use:
Open a terminal
Nav to the web root (html)
Enter: php -S 0.0.0.0:8080 -t site/CLI site/CLI/cli-router.php

The router intercepts and decides what to do.  In this case the router will look for the requested file, if it finds it it will serve it, else it will notify that it didn't
find it and serve up cli-demo.php.


--------------------------

To use the webroot:
Enter: php -S 0.0.0.0:8080
Then start requesting.

---------------------------

Useful for debugging, the notices and warnings appear in the terminal.

