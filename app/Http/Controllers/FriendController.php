<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friend;

class FriendController extends Controller
{
    public function liste_friend()
    {
        $friends = Friend::all();
        return view('friend.liste',compact('friends'));
    }

    public function ajouter_friend()
    {
        return view('friend.ajouter');
    }

    public function ajouter_friend_traitement(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
            
        ]);

        $friend = new Friend();
        $friend->nom =$request->nom;
        $friend->prenom =$request->prenom;
        $friend->email =$request->email;
        $friend->save();

         return redirect('/ajouter')->with('status','L\`frere bien ajouter avec succèes');
    }

    public function update_friend($id){
        $friends = Friend::find($id);

        return view('friend.update', compact('friends'));
    }
    public function update_friend_traitement(Request $request){
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
        ]);
        $friend = Friend::find($request->id);
        $friend->nom =$request->nom;
        $friend->prenom =$request->prenom;
        $friend->email =$request->email;
        $friend->update();
        return redirect('/friend')->with('status','amie bien modifierer avec succèes');

    }
    public function delete_friend($id) {
        $friend = Friend::find($id);
        $friend->delete();
        
        return redirect('/friend')->with('status','L\`amis a ètè bien supprimer avec succèes');
    }
}













