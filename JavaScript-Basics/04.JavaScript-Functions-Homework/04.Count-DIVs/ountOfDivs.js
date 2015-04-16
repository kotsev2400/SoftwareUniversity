function countDivs(htmlCode) {
	var divs = htmlCode.split('<div');
	var result =  divs.length - 1;
	console.log(result);
}

countDivs('<!DOCTYPE html><html><head lang="en"><meta charset="UTF-8"><title>index</title><script src="/yourScript.js" defer></script></head><body><div id="outerDiv"><divclass="first"><div><div>hello</div></div></div><div>hi<div></div></div><div>I am a div</div></div></body></html>');