function quadraticEquation(a, b ,c) {

	var d = (b * b) - (4 * a * c);

	if (d < 0) {
		console.log('No roots');
	} else if (d === 0) {
		var x = -b / (2 * a);
		console.log('x = ' + x);
	} else {
		x1 = (-b + Math.sqrt(d)) / 2 * a;
		x2 = (-b - Math.sqrt(d)) / 2 * a;
		console.log("x1 = " + x1 + " x2 = " + x2);
	}
}

quadraticEquation(2, 5, -3);
quadraticEquation(2, -4, 2);
quadraticEquation(4, 2, 1);