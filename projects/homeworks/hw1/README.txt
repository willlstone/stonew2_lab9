Will Stone
Web Systems Development - Assignment 1


1. Why did you select the doctype you used?
I chose XHTML 1.0 Strict, partly just because of familiarity. It isn't as lenient as some of the HTML doctypes, but it keeps you honest, it meets my needs for the assignment, and I need good practice.

2. How does your doctype compare to other commonly seen (strict) doctypes?
XHTML is a little more strict than other doctypes, but the semantic meanings for everything are the same. It doesn't really make a difference for the visitor of my web page, but for me I just have to be careful how I nest elements. I got yelled at by the validator for having <br> tags that weren't self closing (that is bad practice anyways) and for having <br/> tags in the middle of list elements. I just feel like XHTML keeps you honest.


3. How is the markup for your document semantically correct?
There are no unneccessary div tags other than the hCard. Certain divs within the hCard were replaced with span though, just so that the elements I want displayed are all displayed on the same line. I didn't put my name in the hCard, only because I wanted to have my name at the top of the page for stylistic reasons.


4. How is the hCard information you added useful to both humans and automated user agents trying to access your content?
hCards can be used to show that a link and a name (or any other hCard information) are connected. When a user is online and comes across a person, rather than having to copy and paste their name, email, phone, address, etc. into their contacts list, they can simply download the hCard and it'll do it all automatically.


4. References
----------------------
http://www.webstandards.org/learn/articles/askw3c/oct2003/
http://microformats.org/wiki/hcard-faq
http://www.htmlandcssbook.com/extras/introduction-to-hcard/
http://microformats.org/code/hcard/creator

https://jigsaw.w3.org/css-validator/validator     CSS validator
https://validator.w3.org/check					  HTML validator
