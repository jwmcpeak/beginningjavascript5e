This is the unofficial errata for Beginning JavaScript, 5th Edition. If you find any errors in the text, please submit them to Wrox using their [errata submission form](http://wrox.custhelp.com/app/ask).

#Chapter 1 
p. 11
Insert this line before the alert("Second Script Block"); line:
document.bgColor="red"; 

#Chapter 2
p. 41
The description of how parseInt() works/what it does is not correct. See my post in this forum. Also, extreme nitpick: the floating point is mistakenly called a "decimal" point, but decimal points are for base 10 only and this should be called a floating point or radix point.

#Chapter 5
p. 105
The sentence that reads "However, these objects are not used very often, so we will not be discussing them further in this book." is false; Number objects are discussed on p. 134.

p. 106
Reads "Character positions start at 0. If you don't include the second parameter, searching starts from the beginning of the string." Should read something like:
Character positions start at 0. If you don't include the second parameter, indexOf() searching starts from the beginning of the string and lastIndexOf() searching starts from the end of the string.

#Chapter 9
p. 234
Information is slightly out of date: current ECMAScript standard is edition 6, published in June 2015.

p. 253
Comment after var headElement; refers to it as "headingElement", should be headElement.

p.254
headElement is mistakenly called "headingElement" twice.

p.255
headElement is mistakenly called "headingElement" again. 

p. 262
-transitional.dtd"> should be deleted

To avoid the discussed precedence issue, font: 12pt arial; should instead be:
font-family: arial;
font-size: 12pt;

p. 263
.newStyle should be .new-style

p. 264
The comment after divAdvert.style.top = "100px"; says "set the right position" instead of "set the distance from the top" as it should.

p.265
The description for the Animating Content program is incorrect. Reads "This page moves an element across a page from right to left." It should instead read something like "This moves an element back and forth across the page, starting from left to right."