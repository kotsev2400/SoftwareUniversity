function manipulator (arr) {
	var input = arr;

	var numArray = arr.filter(function(x) {
		return !isNaN(x);
	})

	numArray.sort(function(x, y) {
		return x > y;
	})

	var minNumber = numArray[0];
	var maxNumber = numArray[numArray.length - 1]
	var reversedArray = numArray.reverse();

	var counts = {};
	var max = 0;
	var mostFreqNum;
	for (var v in numArray) {
  		counts[numArray[v]] = (counts[numArray[v]] || 0) + 1;
		  	if (counts[numArray[v]] > max) { 
			    max = counts[numArray[v]];
			    mostFreqNum = numArray[v];
		  	}
	}

	console.log('Min number: ' + minNumber);
	console.log('Max number: ' + maxNumber);
	console.log('Most frequent number: ' + mostFreqNum);
	console.log(reversedArray);
}

manipulator(["Pesho", 2, "Gosho", 12, 2, "true", 9, undefined, 0, "Penka", { bunniesCount : 10}, [10, 20, 30, 40]]);