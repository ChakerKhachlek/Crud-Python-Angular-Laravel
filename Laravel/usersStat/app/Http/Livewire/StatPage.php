<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\DB;


class StatPage extends Component
{
     
  

    public function render()
    {
        
        $users = User::all();
        $adultesCount=User::where('age', '>', 24)->count();
        $jeunesCount=User::where('age', '>', 14)->where('age', '<=', 24)->count();
        $enfantCount=User::where('age', '<=', 14)->count();
        $countries=User::distinct()->get(['country'])->toArray();
        $countriesOccu=[];
        foreach($countries as $key=>$country){
            array_push($countriesOccu,(User::where('country',$country[0])->count()));
        }

        $femaleCount=User::where('sexe','Female')->count();
        $maleCount=User::where('sexe','Male')->count();

        function random_color(){
            return 'rgba(' . rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255) .', ' . rand(0, 255). ')';
        }

        $randomColors=[];
        foreach($countries as $key=>$country){
            array_push($randomColors,random_color());
        }
        
        return view('livewire.stat-page',['users'=>$users,
        'adultesCount'=>$adultesCount,
        'jeunesCount'=>$jeunesCount,
        'enfantCount'=>$enfantCount,
        'countries'=>$countries,
        'countriesOccu'=>$countriesOccu,
        'femaleCount'=>$femaleCount,
        'maleCount'=>$maleCount,
        'randomColors'=>$randomColors
        ])
        ->layout('layouts.app')
        ->slot('main');
    }
}
