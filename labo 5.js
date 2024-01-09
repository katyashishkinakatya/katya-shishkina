// Задание 1: Найти N-ый член последовательности Фибоначчи

function fibonacci(n) {
  if (n <= 0) {
    return "Пожалуйста, введите положительное число.";
  }

  let a = 1, b = 1;

  for (let i = 3; i <= n; i++) {
    let c = a + b;
    a = b;
    b = c;
  }

  return b;
}

const nValue = 10; // Замените на нужное значение N
const result = fibonacci(nValue);

console.log(`N-ый член последовательности Фибоначчи для N=${nValue}: ${result}`);

// Задание 2: Обработка массива действительных чисел

// Часть А
function sumBetweenFirstAndLast(arr) {
  const firstIndex = arr.findIndex(num => Math.abs(num - Math.PI) <= 1e-5);
  const lastIndex = arr.lastIndexOf(arr.find(num => Math.abs(num - Math.PI) <= 1e-5));

  if (firstIndex === -1 || lastIndex === -1) {
    return "Не найдены элементы, удовлетворяющие условию.";
  }

  const sum = arr.slice(firstIndex + 1, lastIndex).reduce((acc, num) => acc + num, 0);
  return sum;
}

// Часть Б
function filterArray(arr) {
  return arr.filter(num => {
    const integerPart = Math.trunc(num);
    return Math.abs(integerPart) !== 2 || !areAllDigitsOdd(integerPart);
  });
}

function areAllDigitsOdd(number) {
  const digitString = Math.abs(number).toString();
  return Array.from(digitString).every(digit => parseInt(digit) % 2 !== 0);
}

const numbersArray = [3.14, 1.6, -2.7, 2.718, 5, 8, -2.34, 6.78];
const sumResult = sumBetweenFirstAndLast(numbersArray);
const filteredArray = filterArray(numbersArray);

console.log(`Часть А: Сумма элементов массива между первым и последним элементами, удовлетворяющими условию: ${sumResult}`);
console.log(`Часть Б: Массив после удаления элементов: [${filteredArray.join(', ')}]`);

// Задание 3: Обработка строк

function modifyString(word) {
  const modifiedString = Array.from(word).map((char, index) => {
    return index % 2 === 0 ? char.toUpperCase() : char.toLowerCase();
  }).join('');

  return modifiedString;
}

const inputWord = "example";
const resultString = modifyString(inputWord);

console.log(`Исходное слово: ${inputWord}`);
console.log(`Модифицированная строка: ${resultString}`);
