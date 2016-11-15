Will Stone
--------------

My classes simply determine the value of an operation, and then output the equation and answer.

Flow of execution:
-User inputs numbers and clicks on the button of the preferred operation
-PHP determines what operation is wanted based on a POST 
-PHP calculates the requested value
-PHP outputs the equation and answer on the page

If the application used $_GET instead of $_POST, the numbers submitted would be public and show up in the web page's URL. If we were dealing with more private data this would be a bad thing. On the other hand you could share the information more easily with other functions/equations outside of this page.

A better way to do this assignment would be with javascript and jQuery instead of PHP.