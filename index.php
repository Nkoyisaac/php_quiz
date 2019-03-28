<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styling.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <title>My quiz app</title>
</head>
<body>
    

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
<div class="app">
<h1>Welcome to my quiz</h1>
<?php
$quiz[] = [
    'question' => 'what is the largest living animal',
    'answer' => [
        'elephant',
        'blue_whale',
        'giraffe',
        'buffalo'
    ]

];
$quiz[] = [
    'question' => 'Against which illness do you use insuline',
    'answer' => [
        'high_blood_pressure',
        'adiposity',
        'diabetes',
        'cardiac_infection'
    ]

];
$quiz[] = [
    'question' => 'what is the biggest city in USA according to the mass of metropolitan area?',
    'answer' => [
        'Los Angeles',
        'New york',
        'chicago',
        'san diego'
    ]

];

$quiz[] = [
    'question' => 'which word does the "e" in e-mail stand for?',
    'answer' => [
        'explain',
        'electronic',
        'execute',
        'exact'
        ]
    ];

$quiz[] = [
    'question' => 'how much % of the world is covered with water?',
    'answer' => [
        '92%',
        '63%',
        '37%',
        '71%'
    ]

];
$quiz[] = [
    'question' => 'which is the longest river in the world' ,
    'answer' => [
        'nil',
        'congo',
        'mississipi',
        'amazon'
    ]
    
];
$quiz[] = [
    'question' => 'how many teeth does an adult human usualy have?' ,
    'answer' => [
        '12-16',
        '28-32',
        '16-24',
        '32-36'
    ]
    
];
$quiz[] = [
    'question' => 'who developed the theory of evolution?' ,
    'answer' => [
        'Isaac Newton',
        'Chareles Darwin',
        'Pythagore',
        'Davinci'
    ]
    
];
$quiz[] = [
    'question' => 'which one of this animal is a fish?' ,
    'answer' => [
        'Shark',
        'Whale',
        'Dolphin',
        'Seal'
    ]
    
];
$quiz[] = [
    'question' => 'which one of these numbers is without rest dividable through the numbers : 1,2,3,4,5,6?' ,
    'answer' => [
        '42',
        '40',
        '60',
        '128'
    ]
   
];
$answerName = array('question1','question2','question3','question4','question5','question6','question7','question8','question9','question10');
$number = array('1','2','3','4','5','6','7','8','9','10');

for($i = 0; $i < count($quiz); ++$i){
    $outputquestion = "<h3>".$number[$i].')'.$quiz[$i]['question']."</h3>";
    echo $outputquestion;

    foreach($quiz[$i]['answer'] as $value ){
        $outputanswer =  "<input required type=\"radio\" name=".$answerName[$i]." 
        value=".$value.">"."<span>$value</span>";
        echo $outputanswer;
        }

}


if(isset($_POST)){
$score = 0;

if($_POST['question1'] == 'blue_whale' ){
$score++;

}

if($_POST['question2'] == 'diabetes' ){
$score++;

}

if($_POST['question3'] == 'New_york' ){
 $score++;   

}
if($_POST['question4'] == 'electronic' ){
    $score++;   
   
}
if($_POST['question5'] == '71%'){ 
    $score++;   
   
}
if($_POST['question6'] == 'amazon'){ 
    $score++;   
   
}
if($_POST['question7'] == '28-32'){ 
    $score++;   
   
}
}if($_POST['question8'] == 'Chareles Darwin'){ 
    $score++;   
   
}
if($_POST['question9'] == 'Shark'){ 
    $score++;   
   
}
if($_POST['question10'] == '60'){ 
    $score++;   
   
}


echo "<p>"."Your score is ".$score. " / 10"."</p>";

if($score === 10){
    echo "well done";
}











?>

<input type="submit">
</div>
</form>


 



</body>
</html>