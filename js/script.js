
const repeat = (arry) => {
	const newArry = [];
	for(i = 0; i < 3; i++){
		arry.forEach(r => {
			newArry.push(r);
		})
	}
	return newArry;
}

const reformat = (string) => {
	const makeLowercse = string.toLowerCase();
	const removeCharacters = makeLowercse.replace(/[eio]/g, "");
	const newStr = removeCharacters.charAt(0).toUpperCase() + removeCharacters.slice(1);
	return newStr;
}