
<?php
$num = rand(1, 5);
switch ($num) {
    case 1:
        $quote = "Learn from yesterday, live for today, hope for tomorrow. The important thing is not to stop questioning.";
        break;
    case 2:
        $quote = "Only two things are infinite, the universe and human stupidity, and I'm not sure about the former.";
        break;
    case 3:
        $quote = "The difference between stupidity and genius is that genius has its limit.";
        break;
    case 4:
        $quote = "Try not to become a man of success, but rather try to become a man of value.";
        break;
    case 5:
        $quote = "Any man who can drive safely while kissing a pretty girl is simply not giving the kiss the attention it deserves.";
        break;
}
echo $quote;
?>