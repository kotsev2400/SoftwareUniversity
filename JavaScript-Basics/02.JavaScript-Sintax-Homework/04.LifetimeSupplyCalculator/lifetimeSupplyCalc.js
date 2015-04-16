function calcSupply(age, maxAge, food, foodPerDay) {
	var ageLeft = maxAge - age;
	var daysLeft = ageLeft * 365;
	var perDay = daysLeft * foodPerDay;

	console.log(perDay + 'kg of ' + food + ' would be enough until I am ' + maxAge + ' years old.'); 
}

calcSupply(38, 118, "chocolate", 0.5);
calcSupply(20, 87, "fruits", 2);
calcSupply(16, 102, "nuts", 1.1);