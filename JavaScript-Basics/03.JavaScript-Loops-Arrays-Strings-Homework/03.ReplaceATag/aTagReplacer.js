function replaceATag (str) {
	var tagFind = /<a([\w\W]*)>([\w\W]*)<\/a>/gi;

	return str.replace(tagFind, '[URL $1]$2[/URL]');
}

console.log(replaceATag('<ul><li><a href=http://softuni.bg>SoftUni</a></li></ul>'));