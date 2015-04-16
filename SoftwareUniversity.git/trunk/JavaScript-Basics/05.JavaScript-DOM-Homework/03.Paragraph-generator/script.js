function createParagraph (id, text) {
	var newElement = document.createElement("p");
	var node = document.createTextNode(text);
	newElement.appendChild(node);
	var element = document.getElementById(id);
	element.appendChild(newElement);
}

createParagraph('wrapper', 'some text');