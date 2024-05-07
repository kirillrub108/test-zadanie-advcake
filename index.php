<?php

require_once 'ReverseWords.php';

// Запуск метода
$input = "Cat Мышь houSe домИК elEpHant cat, Зима: is 'cold' now это «Так» \"просто\"";
$output = ReverseWords::reverseLettersInWords($input);
echo $output;