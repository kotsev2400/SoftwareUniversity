var HTMLGenerator = {	
	createParagraph: function(id, text) {
		var newElement = document.createElement("p");
		var node = document.createTextNode(text);
		newElement.appendChild(node);
		var element = document.getElementById(id);
		element.appendChild(newElement);
	},
	createDiv: function(id, className) {
		var newElement = document.createElement("div");
		newElement.setAttribute("class", className)
		var element = document.getElementById(id);
		element.appendChild(newElement);
	},
	createLink: function(id, text, url) {
		var newElement = document.createElement("a");
		var node = document.createTextNode(text);
		newElement.setAttribute("href", url)
		newElement.appendChild(node);
		var element = document.getElementById(id);
		element.appendChild(newElement);
	}
}

HTMLGenerator.createParagraph('wrapper', 'Soft Uni');
HTMLGenerator.createDiv('wrapper', 'section');
HTMLGenerator.createLink('book', 'C# basics book', 'http://www.introprogramming.info/');
