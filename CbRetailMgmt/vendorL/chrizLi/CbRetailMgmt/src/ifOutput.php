<?php

interface   ifOutput 
{
    public  fnHeadAppend    (string $s);
    public  fnHeadSet       (string $s);
    public  fnHeadGet       ();
    public  fnBodyAppend    (string $s);
    public  fnBodySet       (string $s);
    public  fnBodyGet       ();
    public  fnRedirectSet   (string $s);
}

?>
