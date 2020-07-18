<?php
 
 try{
    $client = new SoapClient('https://footballpool.dataaccess.eu/info.wso?WSDL');
    $result = $client->TopGoalScorers(
        ['iTopN' => 1]
    );
 }catch(SoapClient $e){

 }

 $topScorer = $result->TopGoalScorersResult->tTopGoalScorer;
 echo $topScorer->sName;