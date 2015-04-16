function modification (arr) {
	var input = arr;
	var validScores = input.filter(function(x) {
		if (x >= 0 && x <= 400) {
			return x;
		}
	})

	function scaleDown () {
		for (var i = 0; i < validScores.length; i++) {
			validScores[i] = validScores[i] - (20 / 100) * validScores[i];
		}

		validScores.sort(function(x, y){ 
			return x > y; 
		})

		console.log(validScores);
	}

	scaleDown();
}

modification([200, 120, 23, 67, 350, 420, 170, 212, 401, 615, -1])