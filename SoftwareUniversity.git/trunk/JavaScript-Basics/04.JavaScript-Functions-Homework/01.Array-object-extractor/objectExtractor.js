function extractObjects (array) {

	var result = [];

	for (var i = 0; i < array.length; i++) {
		if ((typeof array[i] === 'object') && (!Array.isArray(array[i]))) {
			result.push(array[i]);
		}
	}

	return result;
}

var input = [
    "Pesho",
    4,
    4.21,
    { name : 'Valyo', age : 16 },
    { type : 'fish', model : 'zlatna ribka' },
    [1,2,3],
    "Gosho",
    { name : 'Penka', height: 1.65}
];

console.log(extractObjects(input));