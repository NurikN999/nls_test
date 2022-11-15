<?php

$min = (int)(readline('>>>Enter the minimum number: '));
$max = (int)(readline('>>>Enter the maximum number: '));
$half = floor( ($min + $max)/2 );
$yourNumber = (int)(readline('>>>Enter your number: '));


function guessNumber()
{
    global $max, $min, $half, $yourNumber;

    echo 'Are you guess ' . $half . ' number?';
    $choice = strtolower(readline('>>> Enter your choice (lower, higher or correct):'));

    if($choice == 'lower'){
        $max = $half - 1;
        $half = floor( ($min + $max)/2 );
    }elseif($choice == 'higher'){
        $min = $half + 1;
        $half = floor( ($min + $max)/2 );
    }elseif ($choice == 'correct') {
        echo "Yeah, I'm pro";
        exit(-1);
    }
}

while (true){
    guessNumber();
}
