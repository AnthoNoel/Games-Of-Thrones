<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\House;
use Illuminate\Support\Facades\View;

class CharacterController extends Controller
{

    public function read($id){
         // Get item or send 404 response if not
         $character = Character::find($id);



         // Si on a un résultat
         if (!empty($character)) {
             // Return JSON of this list
             return view ('character', ['character' => ($character)]);
         } else { // Sinon
             // HTTP status code 404 Not Found
             return response('', 404);
         }
    }
    public function list(){



        // On aurais pu aussi tout simplement faire :
        $characters =  Character::with("title", "mother", "father", "houses")->get();

        $characters->load("houses");


        return view ('home', ['characters' => ($characters), 'houseName' => '']);
    }

    // public function readCollectionWithHouseId($houseId)
    // {
    //     // Utilisation de la méthode all() grâce à l'héritage
    //     $characters = Character::whereHas('houses', function ($query) use($houseId){
    //         $query->where('house_id', $houseId);
    //     })->get();

    //     if (!$characters) {
    //         return response()->json(['message' => 'Personnages non trouvés'], 404);
    //     }

    //     $house = House::find($houseId);

    //     if (!$house) {
    //         return response()->json(['message' => 'Maison non trouvée'], 404);
    //     }


    //     return view('home', [
    //         'characters' => $characters,
    //         'houseName' => $house->name]);

    // }

}
