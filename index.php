<?php

class Text{
    public $line;
    function __construct($line)
    {
        $this->line = $line;
    }
     
    function checkLine(){
        $counter = 0;
        foreach (str_split($this->line) as $key => $val) {
            //exit the function if the bracket closes before it opens
            if ($counter < 0) {return 'incorrect';}
            if ($val == '{'){$counter += 1;}
            elseif ($val == '}'){$counter -= 1;}
        }
    
        if ($counter == 0){return 'correct';}
        else{return 'incorrect';}
    }
}
$txt = new Text(readline("Enter the text: "));
echo $txt -> checkLine();
?>