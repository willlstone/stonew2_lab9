Will Stone



1. I removed the background image. It didn't make a lot of sense, it was loading a picture from a url.  There were just too many moving parts, the page has to load an asset (that blue square) from somewhere else out of our control.
2. I moved all of the javascript down to the bottom of the Lab5start.html document so that it doesn't load until after the html is already laoded. This will make it pop up on screen more quickly.
3.I put the CSS <style> at the very top so that loads ASAP
4.During experimenting, I found that what takes the most time loading the page is the javascript for loops producing all the extra list elements.  I sort of just delted that, and it runs a lot more efficiently now. It halved the time approximatley.
5.Instead of referencing jquery from the internet, I downloaded a jquery file and it is just linked to it in the same directory. 


Creativity:
So when you click to hide an item in the list, it calls my javascript function that changes the color of both the background and the text, and starts alternating it. Bad for epileptics and for the load time of the page but I made some sacrafices.