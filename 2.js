const data = [
  ["Keren"],
  ["D", "W", "B", "T", "A", "S", "U", "D", "M", "O", "Y", "I", "D"],
  ["Sekali"],
];

function array_move(array, old_index, new_index) {
  if (new_index >= array.length) {
      var k = new_index - array.length + 1;
      while (k--) {
          array.push(undefined);
      }
  }
  array.splice(new_index, 0, array.splice(old_index, 1)[0]);
};

array_move(data[1], 6,1)
array_move(data[1], 8,2)
array_move(data[1], 4,3)
array_move(data[1], 6,5)
array_move(data[1], 10,6)
array_move(data[1], 7,8)
array_move(data[1], 9,8)
array_move(data[1], 10,9)
data.sort()

let greeting = [data[0].join(''), ...data[1], ...data[2]].join(' ')

console.log(greeting)