<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                
            }
        </style>
    </head>
    <body>
        <div class='container'>
<!--  -->
            <h1>1. Write a PHP program to print alphabet pattern 'A'.</h1>
       <?php
echo "<pre>";
for ($row = 0;$row <= 10;$row++)
{
    for ($column = 0;$column <= 10;$column++)
    {
        if ((($column == 1 or $column == 10) and $row != 0) or (($row == 0 or $row == 5) and ($column > 1 and $column < 10)))
        {
            echo "*";
        }
        else
        {
            echo "&nbsp;";
        }
    }
    echo "<br>";
}
echo "</pre>";
?>

<!--  -->
    <h1>2. Write a PHP script to get JSON representation of a value from an array.</h1>
<?php
$arra = array(
    "uglify-js" => "1.3.4",
    "jshint" => "0.9.1",
    "recess" => "1.1.8",
    "connect" => "2.1.3",
    "hogan.js" => "2.0.0"
);
$myarray = array(
    'red',
    'green',
    'white'
);
var_dump(json_encode($arra));
echo "\n";
var_dump(json_encode($myarray));
?>


<!--  -->
    <h1>4. Write a PHP program to find a missing number(s) from an array.</h1>
<?php
function missing_number($num_list)
{

    $new_arr = range($num_list[0], max($num_list));

    return array_diff($new_arr, $num_list);
}
print_r(missing_number(array(
    1,
    2,
    3,
    6,
    7,
    8
)));
print_r(missing_number(array(
    10,
    11,
    12,
    14,
    15,
    16,
    17
)));
?>


<!--  -->
<h1>5. Write a PHP program to find three numbers from an array such that the sum of three consecutive numbers equal to zero.</h1>
<?php
function three_Sum_zero($arr)
{
    $count = count($arr) - 2;
    $result = [];
    for ($x = 0;$x < $count;$x++)
    {
        if ($arr[$x] + $arr[$x + 1] + $arr[$x + 2] == 0)
        {
            array_push($result, "{$arr[$x]} + {$arr[$x + 1]} + {$arr[$x + 2]} = 0");
        }
    }
    return $result;
}
$nums1 = array(-1,
    0,
    1,
    2, -1, -4
);
$nums2 = array(-25, -10, -7, -3,
    2,
    4,
    8,
    10
);

print_r(three_Sum_zero($nums1));
print_r(three_Sum_zero($nums2));
?>

<!--  -->
<h1>6. Write a PHP program to compute and return the square root of a given number</h1>
<?php
function my_sqrt($n)
{
    $x = $n;
    $y = 1;
    while ($x > $y)
    {
        $x = ($x + $y) / 2;
        $y = $n / $x;
    }
    return $x;
}
print_r(my_sqrt(16) . "\n");
print_r(my_sqrt(14) . "\n");
?>

<!--  -->

<h1>7. Write a PHP program to find the single element in an array where every element appears three times except for one.</h1>
<?php
function single_number($arr)
{
    $ones = 0;
    $twos = 0;
    $common_one_two = 0;
    for ($i = 0;$i < sizeof($arr);$i++)
    {
        $twos = $twos | ($ones & $arr[$i]);

        $ones = $ones ^ $arr[$i];
        $common_one_two = ~ ($ones & $twos);
        $ones &= $common_one_two;
        $twos &= $common_one_two;
    }
    return $ones;
}
$arr1 = array(
    5,
    3,
    4,
    3,
    5,
    5,
    3
);
$arr2 = array(-1,
    1,
    1, -1, -1,
    1,
    0
);
print_r($arr1);
print_r('Single Number: ' . single_number($arr1) . "\n");
print_r($arr2);
print_r('Single Number: ' . single_number($arr2) . "\n");
?>  

<!--  -->
<h1>8. Write a PHP program to check whether a sequence of numbers is an arithmetic progression or not.</h1>
<?php
function is_arithmetic($arr)
{
    $delta = $arr[1] - $arr[0];
    for ($index = 0;$index < sizeof($arr) - 1;$index++)
    {
        if (($arr[$index + 1] - $arr[$index]) != $delta)
        {

            return "Not an arithmetic sequence";
        }
    }
    return "An arithmetic sequence";
}
$my_arr1 = array(
    6,
    7,
    9,
    11
);
$my_arr2 = array(
    5,
    7,
    9,
    11
);

print_r(is_arithmetic($my_arr1) . "\n");
print_r(is_arithmetic($my_arr2) . "\n");
?>

<!--  -->
<h1>9. Write a PHP program to reverse the bits of an integer (32 bits unsigned). </h1>
<?php
function reverse_integer($n)
{
    $result = 0;
    for ($i = 0;$i < 32;$i++)
    {
        $result <<= 1;
        $result |= ($n & 1);
        $n >>= 1;
    }
    return $result;

}
print_r(reverse_integer(1234) . "\n");
?>

<h1>10. Write a PHP program to add the digits of a positive integer repeatedly until the result has a single digit.</h1>
<?php
function add_digits($num)
{
    if ($num > 0)
    {
        return ($num - 1) % 9 + 1;
    }
    else
    {
        return 0;
    }
}

print_r(add_digits(48) . "\n");
print_r(add_digits(59) . "\n");
?>

        </div>
        
       
    </body>
</html>


<!-- RANDOM TEXT -->