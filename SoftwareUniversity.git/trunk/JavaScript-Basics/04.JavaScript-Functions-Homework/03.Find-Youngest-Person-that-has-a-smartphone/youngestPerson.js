function  findYoungestPerson(array) {
	var input = array;
	var minAge = Number.MAX_VALUE;
	var youngestPerson = {};

	for (var i in input) {
        if ((input[i].age < minAge) && (input[i].hasSmartphone == true)) {
            minAge = input[i].age;
            youngestPerson = input[i];
        }
    }

	return 'The youngest person is ' + youngestPerson.firstname + ' ' + youngestPerson.lastname;
}

var people = [
  { firstname : 'George', lastname: 'Kolev', age: 32, hasSmartphone: false }, 
  { firstname : 'Vasil', lastname: 'Kovachev', age: 40, hasSmartphone: true },
  { firstname : 'Bay', lastname: 'Ivan', age: 81, hasSmartphone: true },
  { firstname : 'Baba', lastname: 'Ginka', age: 40, hasSmartphone: false }];

console.log(findYoungestPerson(people));