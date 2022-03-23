<?php
    $n1 = 7;
    $n2 = 6;
    $n3 = 5;

    if($n1 == $n2 and $n1 == $n3 and $n2 == $n3)
    {
        echo $n1."<br>".$n2."<br>".$n3;
    }
    else
    {
        if($n1 > $n2 and $n1 > $n2)
        {
            if($n2 > $n3)
            {
                echo $n1."<br>".$n2."<br>".$n3;
            }
            else
            {
                echo $n1."<br>".$n3."<br>".$n2;
            }
        }
        else
        {
            if($n2 > $n1 and $n2 > $n3)
            {
                if($n1 > $n3)
                {
                    echo $n2."<br>".$n1."<br>".$n3;
                }
                else
                {
                    echo $n2."<br>".$n3."<br>".$n1;
                }
            }
            else
            {
                if($n3 > $n1 and $n3 > $n2)
                {
                    if($n1 > $n2)
                    {
                        echo $n3."<br>".$n1."<br>".$n2;
                    }
                    else
                    {
                        echo $n3."<br>".$n2."<br>".$n1;
                    }
                }
            }
        }
    }
?>