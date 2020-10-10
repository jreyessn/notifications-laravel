<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Countries\CityRepositoryEloquent;
use App\Repositories\Countries\CountryRepositoryEloquent;
use App\Repositories\Countries\StateRepositoryEloquent;
use App\Criteria\CountriesCriteria;

class CountriesController extends Controller
{

    private $repositoryCountry;
    private $repositoryState;
    private $repositoryCity;

    function __construct(
        CountryRepositoryEloquent $repositoryCountry,
        StateRepositoryEloquent $repositoryState,
        CityRepositoryEloquent $repositoryCity
    ){
        $this->repositoryCountry = $repositoryCountry;
        $this->repositoryState = $repositoryState;
        $this->repositoryCity = $repositoryCity;
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getCountries()
    {
        return $this->repositoryCountry->paginate();
    }

    public function getStates()
    {
        $this->repositoryState->pushCriteria(app(CountriesCriteria::class));
        
        return $this->repositoryState->paginate();
    }
    
    public function getCities()
    {
        $this->repositoryCity->pushCriteria(app(CountriesCriteria::class));

        return $this->repositoryCity->paginate();
    }
}
