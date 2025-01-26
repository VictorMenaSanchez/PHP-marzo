<!-- Here's how to solve each of the exercises you provided using PHP:

UD2

1. Declare two variables and assign them two different values:

<?php
$variable1 = 10;
$variable2 = 20;
?>


2. Write HTML code inside a PHP code block:

<?php
echo "<h1>This is a heading</h1>";
echo "<p>This is a paragraph.</p>";
?>

---

UD3

1. Calculate factorial of a number:

<?php
function factorial($n) {
    $factorial = 1;
    for ($i = 1; $i <= $n; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

echo factorial(5);  // Output: 120
?>


2. Show the average of even numbers between two numbers:

<?php
function averageEvenNumbers($num1, $num2) {
    $sum = 0;
    $count = 0;
    for ($i = $num1; $i <= $num2; $i++) {
        if ($i % 2 == 0) {
            $sum += $i;
            $count++;
        }
    }
    return $count > 0 ? $sum / $count : 0;
}

echo averageEvenNumbers(1, 10);  // Output: 6 (2+4+6+8+10) / 5
?>


3. Show the prime numbers between two numbers:

<?php
function isPrime($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

function primeNumbersBetween($num1, $num2) {
    $primes = [];
    for ($i = $num1; $i <= $num2; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}

print_r(primeNumbersBetween(10, 30));  // Output: Array ( [0] => 11 [1] => 13 [2] => 17 [3] => 19 [4] => 23 [5] => 29 )
?>


4. Array of subjects and grades, show grade, average, passes, and fails:

<?php
$subjects = ["Math" => 80, "Science" => 65, "History" => 50, "English" => 90];

function subjectGrade($subjects, $subject) {
    return $subjects[$subject] ?? "Subject not found";
}

function averageGrade($subjects) {
    return array_sum($subjects) / count($subjects);
}

function passFailCount($subjects) {
    $pass = $fail = 0;
    foreach ($subjects as $grade) {
        if ($grade >= 60) {
            $pass++;
        } else {
            $fail++;
        }
    }
    return ["pass" => $pass, "fail" => $fail];
}

echo "Grade for Science: " . subjectGrade($subjects, "Science") . "<br>";
echo "Average grade: " . averageGrade($subjects) . "<br>";
$result = passFailCount($subjects);
echo "Pass: " . $result["pass"] . " | Fail: " . $result["fail"];
?>


5. Create an array from elements present in both arrays:

<?php
$array1 = [2, 20, 12, 85, 45];
$array2 = [56, 85, 2, 12, 9, 45];

$arrayResult = array_intersect($array1, $array2);

print_r($arrayResult);  // Output: Array ( [0] => 2 [2] => 12 [3] => 85 [4] => 45 )
?>


6. Find a person's magic number:

<?php
$dob = "02/05/1973";
$numbers = str_replace("/", "", $dob);  // Remove the slashes
$sum = array_sum(str_split($numbers));  // Sum all digits

while ($sum > 9) {
    $sum = array_sum(str_split($sum));  // Reduce to a single digit
}

echo "Magic number: " . $sum;  // Output: 9
?>


7. Count the number of vowels in a sentence:

<?php
function countVowels($sentence) {
    $vowelCounts = array_fill_keys(['a', 'e', 'i', 'o', 'u'], 0);
    $sentence = strtolower($sentence);

    foreach (str_split($sentence) as $char) {
        if (isset($vowelCounts[$char])) {
            $vowelCounts[$char]++;
        }
    }

    return $vowelCounts;
}

print_r(countVowels("Hello World"));  // Output: Array ( [a] => 0 [e] => 1 [i] => 0 [o] => 2 [u] => 0 )
?>


8. Find the most repeated word in a text:

<?php
function mostRepeatedWord($text) {
    $words = str_word_count(strtolower($text), 1);
    $wordCounts = array_count_values($words);
    arsort($wordCounts);
    return array_key_first($wordCounts);
}

echo mostRepeatedWord("This is a test. This test is simple.");  // Output: "test"
?>


9. Replace spaces with '*' in a text:

<?php
$text = "We have a text";
$modifiedText = str_replace(" ", "*", $text);

echo $modifiedText;  // Output: We*have*a*text
?>


10. Convert text into 20-character words:

<?php
$text = "We have a text and a word and we are going to convert it to have 10 character words except the last one";
$words = explode(" ", $text);
$newText = "";

foreach ($words as $word) {
    $newText .= str_pad($word, 20);
}

echo $newText;  // Output with words padded to 20 characters
?>

Let me know if you need further clarification on any of these examples!