<?php

require_once 'ReverseWords.php';

// Unit-тест
function testReverseLettersInWords() {
$input = "Cat Мышь houSe домИК elEpHant cat, Зима: is 'cold' now это «Так» \"просто\"";
$expectedOutput = "Tac ьшыМ esuoH КиМОд tnAhpleE tac, амИз: si 'dloc' won отэ это «КаТ» \"отсорп\"";
$output = ReverseWords::reverseLettersInWords($input);
assert($output === $expectedOutput);

$input = "third-part can`t";
$expectedOutput = "driht-trap nac`t";
$output = ReverseWords::reverseLettersInWords($input);
assert($output === $expectedOutput);

echo "Все тесты пройдены успешно!\n";
}

// Запускаем тест
testReverseLettersInWords();