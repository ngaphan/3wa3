document.querySelectorAll

Returns a list of the elements within the document (using depth-first pre-order
traversal of the document's nodes) that match the specified group of selectors.
The object returned is a NodeList. Syntax

elementList = document.querySelectorAll(selectors);

where

    elementList is a non-live NodeList of element objects. selectors is a string
    containing one or more CSS selectors separated by commas.

The returned NodeList will contain all the elements in the document that are
matched by any of the specified selectors. If the selectors string contains a
CSS pseudo-element, the returned elementList will be empty. Example

This example returns a list of all div elements within the document with a class
of either "note" or "alert":

var matches = document.querySelectorAll("div.note, div.alert");

*****************************************************************************************

element.classList

classList returns a token list of the class attribute of the element.

classList is a convenient alternative to accessing an element's list of classes
as a space-delimited string via element.className. It contains the following
methods:

    add - Adds a class to an element's list of classes 
    remove - Removes a class from an element's list of classes 
    toggle - Toggles the existence of a class in an element's list of classes 

     // See below about the optional second argument. 
    contains - Checks if an element's list of classes contains a specific class

Syntax

var elementClasses = elementNodeReference.classList;

elementClasses is a DOMTokenList representing the class attribute of
elementNodeReference. 

If the class attribute was not set or is empty elementClasses.length returns 0. 
element.classList itself is read-only, although you can modify it using 
the add() and remove() methods.

The toggle method has an optional second argument that will force the class name
to be added or removed based on the truthiness of the second argument. 

For example, to remove a class (if it exists or not) you can call 
element.classList.toggle('classToBeRemoved', false); 

and to add a class (if it exists or not) you can call 
element.classList.toggle('classToBeAdded', true);

Example

// div is an object reference to a <div> element with class="foo bar"
div.classList.remove("foo"); div.classList.add("anotherclass");

// if visible is set remove it, otherwise add it
div.classList.toggle("visible");

alert(div.classList.contains("foo"));

div.classList.add("foo","bar"); //add multiple classes


