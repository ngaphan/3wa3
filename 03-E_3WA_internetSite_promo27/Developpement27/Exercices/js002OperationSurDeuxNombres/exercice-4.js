var fNumber1 = parseFloat(prompt('number 1?'));
var fNumber2 = parseFloat(prompt('number 2?'));
var cOperator = prompt('Operator ? (+, -, *, /)');
var fResult = 0;

switch (cOperator) {
    case '+':
        fResult = fNumber1 + fNumber2;
        break;
    case '-':
        fResult = fNumber1 - fNumber2;
        break;
    case '*':
        fResult = fNumber1 * fNumber2;
        break;
    case '/':
        fResult = fNumber1 / fNumber2;
        break;
    default:
        break;
}


document.write('Result : ' + fResult);