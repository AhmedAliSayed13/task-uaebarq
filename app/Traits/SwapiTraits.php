<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\Client\Pool;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
// API Base URL
define('BASE_URL_SWAPI', 'https://swapi.dev/api/'); // Base URL for working another chat-api features as sending messages
/**
 * This trait for connect with SWAPI APIs 
 */
trait SwapiTraits
{

   
    /**
     * Get a listing of 10 People.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPeopleSwapi()
    {
        // Send request
        $peopleGroup=$this->sendSwapiRequest(BASE_URL_SWAPI, 'people/?page=1', 'get')->results;
        return $peopleGroup;
    }
    /**
     * Get a listing of HomeWorlds for People.
     *
     * @return \Illuminate\Http\Response
     */
    public function getHomeWorldsSwapi($HomeWorlds)
    {
        $client = new Client();
        //Initiate each request but do not block
        $promises = [];
        foreach($HomeWorlds as $key =>$HomeWorld){
            $promises[$key]= $client->getAsync($HomeWorld);
        }
        //Initiate a competitive race between multiple promises
        $responses = Promise\settle($promises)->wait();
        $HomeWorldsInformation=[];
        for($i=0;$i<count($HomeWorlds);$i++){
            $HomeWorldsInformation[]=json_decode($responses[$i]['value']->getBody())->name;
        }
        
        return $HomeWorldsInformation;
    }
    /**
     * Get a listing of StarShips for People.
     *
     * @return \Illuminate\Http\Response
     */
    public function getStarShipsSwapi($starships)
    {
        $client = new Client();
        //Initiate each request but do not block
        $promises = [
        ];
        foreach($starships as $key =>$starship){
            $promises[$key]= $client->getAsync($starship);
        }
        //Initiate a competitive race between multiple promises
        $responses = Promise\settle($promises)->wait();
        $starshipsInformation=[];
        for($i=0;$i<count($starships);$i++){
            $starshipsInformation[]=json_decode($responses[$i]['value']->getBody())->name;
        }
        return $starshipsInformation;

        
    }
    /**
     * Get a listing of Films for People.
     *
     * @return \Illuminate\Http\Response
     */
    public function getFilmsSwapi($films)
    {
        $client = new Client();
        //Initiate each request but do not block
        $promises = [
        ];
        foreach($films as $key =>$film){
            $promises[$key]= $client->getAsync($film);
        }
        //Initiate a competitive race between multiple promises
        $responses = Promise\settle($promises)->wait();
        $filemsInformation=[];
        for($i=0;$i<count($films);$i++){
            $filemsInformation[]=json_decode($responses[$i]['value']->getBody())->title;
        }
        
        return $filemsInformation;

        
    }
    /**
     * Get People Details.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPeopleDetailsSwapi($id)
    {
        $people=$this->sendSwapiRequest(BASE_URL_SWAPI, "people/{$id}/", 'get');
        return $people;
        
    }

    

    

    /**
     * Helper function to handle sending request.
     *
     * @param  \string  $URL
     * @param  \string  $method
     * @param  \array  $bodyData
     * @return \Illuminate\Http\Response
     */
    public function sendSwapiRequest($domain, $path, $method, $bodyData = [])
    {
       
        $client = new Client();
        $response = $client->request($method,$domain . $path,$bodyData);

        return json_decode($response->getBody());
        // if($response->failed()){
        //     return $response;
        // }
        // if (property_exists($response, 'results')==false) {
        //     // alert()->error('من فضلك اعد المحاولة مرة أخرى', 'نأسف');
        //         // return redirect()->route('error')->with('redirect', true);
        //         return 'من فضلك اعد المحاولة مرة أخرى';
        // }
       
    }

    






 

}
