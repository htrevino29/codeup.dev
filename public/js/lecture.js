function returnThree() {
	return 3;
}
[1, 1 + 1, returnThree(), returnThree() + 1]


// array literal syntax
// [ element1, element2, element3, ...]
// where element is any valid javascript expression

//object literal syntax
// {key1: value1, key2: value2, key3: value3, ...}

{
		one: 1,
		two: 1 + 1,
		three: returnThree(),
		four: returnThree() + 1
}

{"property-name": value}

// where value is any valid is any valid javascript expression
// key or propertyName must be valid identifier or string literal

// valid javascript expresions
// literals: 1, 'foo', [1,2,3]





var a = 123;
var b = a

console.log("a: " + " b: " + b); // a: 123 b: 123

a = -2;

console.log("a: " + a + " b: " + b); // a: -2 b: 123






var person = {name: 'Robert', age: 99}
var age = person.age;

console.log("person.age: " + person.age + " age: " + age); //person.age: 99 age: 99

//happy birthday!
person.age += 1;

console.log("person.age: " + person.age + "age: " + age); // person.age: 100 age 99






// JSON: javascript object notation -- json.org
// data interchange format of the modern web e.g. mysql, pg datatypes
// reddit api, github api, pokemon api, weather api
// syntax
// subset of objects we use in our js
// indentation conveys nesting
// values can only be literals
// property names must be strings
// all strings must be double-quoted
// no trailing commas
// no comments

























































