<?PHP

//Example 1

	$test = "hello world";
	$a = "test";
	echo $$a;

//Example 2

$a = "amount";
$$a =1000;
echo $amount;

//Example 3

$test = "hello world";
$a = "test";
echo $$a;

//Example 4

$test = 'Anushka';
$$test = 'I am changing Anushka\'s value!';

echo $test."<br/>"; // asdf
echo $$test."<br/>"; // I am changing asdf's value!

echo $Anushka."<br/>"; // I am changing asdf's value!



?>