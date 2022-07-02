<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Traits\SwapiTraits;
use GuzzleHttp\Client;
use GuzzleHttp\Promise;
class PeopleController extends Controller
{
    private $viewsPath='pages.';
    use SwapiTraits;
    /**
     * Display a listing first 10 people.
     *
     * @return array 
     */
    public function ShowPeople()
    {
        // get first 10 people
        $persons=$this->getPeopleSwapi();
        // get 10 homeworld for every people
        $homeworldList = array_column($persons, 'homeworld');
        $homeworlds=$this->getHomeWorldsSwapi($homeworldList);
        // show view
        return view($this->viewsPath.'peoples',compact('persons','homeworlds'));        
    }
    /** 
     * Display a people details.
     *
     * @return \Illuminate\Http\Response
     */
    public function ShowPeopleDetail($id)
    {
        // get people details
         $person=$this->getPeopleDetailsSwapi($id);
         // get people films
         $films=$this->getFilmsSwapi($person->films);
         // get people star ships
         $starships=$this->getStarShipsSwapi($person->starships);
         // show view
         return view($this->viewsPath.'peoples-details',compact('person','films','starships'));
    }
    
}
