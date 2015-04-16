function calculateKnots(kmh) {
	var knot = 0.539956803 * kmh;
	var roundetKnot = knot.toFixed(2);

	console.log(roundetKnot);
}

calculateKnots(20);
calculateKnots(112);
calculateKnots(400);