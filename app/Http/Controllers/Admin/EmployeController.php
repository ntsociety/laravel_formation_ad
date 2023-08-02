<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function employes()
   {
        $employe = Employe::all();
        // dd($employe);
        return view('admin.employes.employe', compact('employe'));
   }
   public function add_employe()
   {
    return view('admin.employes.ajout-employe');
   }
   public function store(Request $request)
   {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'f_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:8'],
            'age' => ['required', 'numeric', 'digits:2'],
            'adresse' => ['required', 'string', 'max:255'],
            'salaire' => ['required', 'numeric'],
        ], [
          'required' => 'Ce champ est obligatoire.',
            'string' => 'Uniquement les chaines de caractères.',
            'max' => 'Ce champ ne va pas dépassé 225 caractères',
            'numeric' => 'Uniquement les chiffres',
            'phone.digits' => 'ce Champ doit être à 8 chiffres',
            'age.digits' => 'ce Champ doit être à 2 chiffres',
        ]);
        // dd($data);
        Employe::create($data);
        return redirect()->route('list-employes');
   }
   public function show($id)
   {
    $single_employe = Employe::findOrFail($id);
    // dd($single_employe);
    return view('admin.employes.view', compact('single_employe'));
   }
   public function edit($id)
   {
    $single_employe = Employe::findOrFail($id);
    // dd($single_employe);
    return view('admin.employes.edit', compact('single_employe'));
   }
   public function update(Request $request, $id)
   {
        $single_employe = Employe::findOrFail($id);
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'f_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:8'],
            'age' => ['required', 'numeric', 'digits:2'],
            'adresse' => ['required', 'string', 'max:255'],
            'salaire' => ['required', 'numeric'],
        ], [
          'required' => 'Ce champ est obligatoire.',
            'string' => 'Uniquement les chaines de caractères.',
            'max' => 'Ce champ ne va pas dépassé 225 caractères',
            'numeric' => 'Uniquement les chiffres',
            'phone.digits' => 'ce Champ doit être à 8 chiffres',
            'age.digits' => 'ce Champ doit être à 2 chiffres',
        ]);
        $single_employe->update($data);
        return redirect()->route('list-employes');
   }
   public function destroy($id)
   {
      $single_employe = Employe::findOrFail($id);
      $single_employe->delete();
      return redirect()->route('list-employes');
   }
}
