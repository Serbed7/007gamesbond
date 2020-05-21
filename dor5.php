<?php

#set_time_limit(2400);
#ini_set('session.gc_maxlifetime', 2400);

#$keyt='test';


#$poisk = 'https://www.youtube.com/results?search_query='.$keyt.'&sp=EgQYAigB';

#$presult = file_get_contents ($poisk);



#$posp=strpos($presult, 'yt-uix-button-content">2</span></a>')-350;

#$pervv=strpos($presult, 'href="',$posp)+6; $vtorv=strpos($presult, '"',$pervv); $dlv=$vtorv-$pervv;
#$putv='https://www.youtube.com'.substr($presult,$pervv,$dlv);

#$ppresult = file_get_contents ($putv);

#$result=$presult.$ppresult;

#echo $result;

#a href="/watch?v=


$spf=scandir('./');

$scs=0;

while ($spf[$scs]) {

$got=$got.'https://www.007gamesbond.com/'.$spf[$scs]."\r\n";

$scs=$scs+1; }

echo $got;

?>