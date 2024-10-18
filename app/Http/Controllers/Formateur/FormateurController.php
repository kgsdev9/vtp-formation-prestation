<?php

namespace App\Http\Controllers\Formateur;

use App\Models\User;
use App\Models\Project;
use App\Models\Formateur;
use App\Models\Specialite;
use Illuminate\Http\Request;
use App\Services\RoleService;
use Illuminate\Support\Facades\DB;
use App\Mail\WelComeFormateurEmail;
use App\Http\Controllers\Controller;
use App\Mail\AdminNotificationMail;
use App\Mail\UserRegistrationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class FormateurController extends Controller
{
    protected $roleService  ;
    public function __construct(RoleService $roleService)
    {
        $this->roleService  = $roleService ;
        $this->middleware('guest');
    }


    public function createNewFormateur() {


        return view('become.formateurs.becoming', [
            'roleAsFormteur' => $this->roleService->roleFormateur(),
            'allTags'=> Specialite::all()
         ]);
    }
    /**
     * créer un nouveau formateur
     */
    public function createNewFormateure()
    {

        $query =  Formateur::where('id', Auth::user()->prorietaire_id)->exists();

        if($query) {

            return redirect(RouteServiceProvider::HOME);

        } else {
            return view('become.formateurs.becoming', [
                'roleAsFormteur' => $this->roleService->roleFormateur(),
             ]);
        }




    }



     public function verificationNameExiste($username)
     {
       $user =  User::where('name', $username)->exists();
       return $user;
     }

    public function generateUniqueUsername()
    {
        $prefix = "VTP";
        $number = 1;

        // Générer un nom d'utilisateur unique
        do {
            // Générer le nom avec le préfixe et un numéro à 4 chiffres, ex: VTP0001
            $username = $prefix . str_pad($number, 4, '0', STR_PAD_LEFT);

            // Incrémenter le numéro pour la prochaine tentative
            $number++;
        } while ($this->verificationNameExiste($username));

        return $username;
    }


//     public function store(Request $request)
//     {


//     $photopath = "";

//     if ($request->hasFile('avatar')) {
//         $file = $request->file('avatar');
//         $photopath = time() . '_' . $file->getClientOriginalName();
//         $file->move(\public_path("formateurs/images"), $photopath);
//     }

//     $user = User::create([
//         'name' => $this->generateUniqueUsername(),
//         'email' => $request->email,
//         'password' => Hash::make($request->password),
//         'role_id' => $this->roleService->roleFormateur(),
//     ]);

//     $formateur = Formateur::create([
//         'fullname' => $request->input('fullname'),
//         'slug' => $request->input('fullname'),
//         'telephone' => $request->input('telephone'),
//         'whattsapp' => $request->input('whattsapp'),
//         'anneexperience' => $request->input('anneeexperience'),
//         'description' => $request->input('description'),
//         'poste' => $request->input('poste'),
//         'avatar' => $photopath,
//         'user_id' => $user->id,
//     ]);

//     $formateur->specialites()->sync($request->skills);



//     foreach ($request->projects as $projectData) {
//         Project::create([
//             'title' => $projectData['title'],
//             'slug' => \Str::slug($projectData['title']),
//             'description' => $projectData['description'],
//             'formateur_id' => $formateur->id,
//         ]);
//     }

//     // Envoi d'un email à l'utilisateur
//     // Mail::to($user->email)->send(new UserRegistrationMail($user));

//     // // Envoi d'un email à l'administrateur
//     // $adminEmail = 'kgsdev8@gmail.com'; // Remplace par l'email de l'administrateur
//     // Mail::to($adminEmail)->send(new AdminNotificationMail($formateur));

//     return view('actions.sucessTeacher');
// }


public function store(Request $request)
{

        $photopath = "";
        if ($request->hasFile('avatar')) {
            $file = $request->file('avatar');
            $photopath = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path("formateurs/images"), $photopath);
        }

        // Création de l'utilisateur
        $user = User::create([
            'name' => $this->generateUniqueUsername(),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $this->roleService->roleFormateur(),
        ]);

        $slug = Formateur::generateUniqueSlug($request->input('fullname'));

        // Création du formateur
        $formateur = Formateur::create([
            'fullname' => $request->input('fullname'),
            'slug' => $slug,
            'telephone' => $request->input('telephone'),
            'whattsapp' => $request->input('whattsapp'),
            'anneexperience' => $request->input('anneexperience'),
            'description' => $request->input('description'),
            'poste' => $request->input('poste'),
            'avatar' => $photopath,
            'user_id' => $user->id,
        ]);

        // Synchronisation des spécialités
        $formateur->specialites()->sync($request->skills);

        // Création des projets
        foreach ($request->projects as $projectData) {
            Project::create([
                'title' => $projectData['title'],
                'slug' => \Str::slug($projectData['title']),
                'description' => $projectData['description'],
                'formateur_id' => $formateur->id,
            ]);
        }

        // Mail::to($user->email)->send(new UserRegistrationMail($user));
        // $adminEmail = 'kgsdev8@gmail.com'; // Remplace par l'email de l'administrateur
        // Mail::to($adminEmail)->send(new AdminNotificationMail($formateur));
        return response()->json(['success' => true, 'message' => 'Formateur créé avec succès.']);



}




    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
