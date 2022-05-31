<?php

declare(strict_types=1);

function getAward(int $score):string
{
return $score >= 100 ? 'gold medal' : null;
}

echo getAward(150) . PHP_EOL;
echo getAward(40) . PHP_EOL;