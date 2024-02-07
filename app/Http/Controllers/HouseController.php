<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use Illuminate\Support\Facades\View;

class HouseController extends Controller
{


public function list(){

    // On aurais pu aussi tout simplement faire :
    $houses =  House::all();
    return view ('houses', ['houses' => ($houses)]);
    }

public function read($id){
    // Get item or send 404 response if not
    $house = House::with('characters')->find($id);


    // Si on a un résultat
    if (!empty($house)) {

        // Return JSON of this list
        return view ('home', ['house' => ($house), 'characters'=>$house['characters'], 'houseName' => $house->name]);
    } else { // Sinon
        // HTTP status code 404 Not Found
        return response('', 404);
    }
}
}

