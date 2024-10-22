<?php

namespace App\Http\Livewire;

use App\Models\Entreprise;
use App\Models\Prestataire;
use App\Models\Role;
use App\Models\TypePrestation;
use Livewire\Component;
use App\Notifications\AccountConfirmation;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class RegisterComponent extends Component
{
    use WithFileUploads;
    public $step = 1;           // Étape actuelle
    public $accountType = null; // Type de compte sélectionné
    public $company_name, $name, $siren, $numero_tva, $type_entreprise, $adresse, $ville, $code_postal, $pays, $telephone, $email, $site_web, $description, $logo, $nombre_employes, $chiffre_affaires, $password, $password_confirmation;
    public $isSubmitting = false;
    public $typeprestation_id;

    public $nom_prestataire, $prenom_prestataire, $type_prestation, $photo ,$identifiant;
    // Validation conditionnelle en fonction des étapes et types de comptes


    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:8|confirmed',
        'company_name' => 'nullable|string|max:255',
        'service_name' => 'nullable|string|max:255',
        'photo' => 'nullable|image|max:1024',  // Validation pour la photo
    ];

    // Validation conditionnelle selon le type de compte et l'étape
    protected function getValidationAttributes()
    {
        return [
            'name' => 'Nom',
            'email' => 'Email',
            'password' => 'Mot de passe',
            'company_name' => 'Nom de l\'entreprise',
            'service_name' => 'Nom de la prestation',
            'photo' => 'Photo',
        ];
    }

    // Validation conditionnelle pour chaque étape
    protected function validateStep()
    {
        // Validation pour l'étape 1 (choix du type de compte)
        if ($this->step === 1) {
            if (!$this->accountType) {
                session()->flash('error', 'Veuillez sélectionner un type de compte avant de continuer.');
                return false;
            }
        }

        // Validation pour l'étape 2 ou 3 (en fonction du type de compte)
        if ($this->step === 2 || $this->step === 3) {
            if ($this->accountType === 'entreprise' && !$this->company_name) {
                session()->flash('error', 'Veuillez entrer le nom de votre entreprise.');
                return false;
            }
            if ($this->accountType === 'prestation' && !$this->service_name) {
                session()->flash('error', 'Veuillez entrer le nom de votre prestation.');
                return false;
            }
        }

        // Validation de l'étape 4 (finalisation)
        if ($this->step === 4) {
            $this->validate();
        }

        return true;
    }

    public function submitForm()
    {

        $this->isSubmitting = true;
        if ($this->accountType === 'entreprise')
        {

           $data=  $this->validate([
                'company_name' => 'required|string|max:255',
                'siren' => 'required|string|max:255',
                'numero_tva' => 'nullable|string|max:255',
                'type_entreprise' => 'required|string|max:255',
                'adresse' => 'required|string|max:255',
                'ville' => 'required|string|max:255',
                'code_postal' => 'required|string|max:255',
                'pays' => 'required|string|max:255',
                'telephone' => 'required|string|max:15',
                'email' => 'required|email|max:255|unique:users,email',
                'site_web' => 'nullable|string|max:255',
                'description' => 'required|string|max:1000',
                'logo' => 'nullable|image|max:1024',
                'nombre_employes' => 'required|integer',
                'chiffre_affaires' => 'required|numeric',
            ]);

            $user = User::create([
                'name' => $this->company_name,
                'email' => $this->email,
                'password' => Hash::make(12345),
                'role_id' => 5,
            ]);

            $prestation = Entreprise::create([
                'nom_entreprise' => $this->company_name,
                'siren' => $this->siren,
                'numero_tva' => $this->numero_tva,
                'type_entreprise' => $this->type_entreprise,
                'adresse' => $this->adresse,
                'ville' =>  $this->ville,
                'code_postal' => $this->code_postal,
                'pays' => $this->pays,
                'telephone' => $this->telephone,
                'email' => $this->email,
                'site_web' => $this->site_web,
                'description'=> $this->description,
                'nombre_employes'=> $this->nombre_employes,
                'chiffre_affaires'=> $this->chiffre_affaires,
                'photo' => $this->photo ? $this->photo->store('prestations_photos', 'public') : null,  // Gestion de la photo
            ]);

            $token = Str::random(60);
            // Envoyer la notification avec le lien de confirmation
            $user->notify(new AccountConfirmation($token));

            return redirect()->route('confirmated.compte');

        } elseif ($this->accountType === 'prestation') {


            $data =$this->validate([
                'nom_prestataire' => 'required|string',
                'prenom_prestataire' => 'required|string',
                'typeprestation_id' => 'required',
                'email' => 'required|email|max:255|unique:users,email',
                'adresse' => 'required|string',
                'ville' => 'required|string',
                'pays' => 'required|string',
                'telephone' => 'required|string',
                'description' => 'required|string',
                'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            $user = User::create([
                'name' => $this->nom_prestataire,
                'email' => $this->email,
                'password' => Hash::make(12345),
                'role_id' => 4,
            ]);

            $prestation = Prestataire::create([
                'nom_prestataire' => $this->nom_prestataire,
                'prenom_prestataire' => $this->prenom_prestataire,
                'typepresatation_id' => $this->typeprestation_id,
                'adresse' => $this->adresse,
                'ville' => $this->ville,
                'pays' =>  $this->pays,
                'telephone' => $this->telephone,
                'email' => $this->email,
                'site_web' => $this->site_web,
                'description' => $this->description,
                'identifiant' => $this->identifiant,
                'photo' => $this->photo ? $this->photo->store('prestations_photos', 'public') : null,  // Gestion de la photo
            ]);

            $token = Str::random(60);
            // Envoyer la notification avec le lien de confirmation
            $user->notify(new AccountConfirmation($token));

            return redirect()->route('confirmated.compte');

        } elseif ($this->accountType === 'particulier') {

            $this->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|string|min:8',
            ]);

            // dd( $this->name, $this->email, $this->password);
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'role_id' => 3,
            ]);

            // Générer un token unique pour la confirmation
            $token = Str::random(60);

            // Envoyer la notification avec le lien de confirmation
            $user->notify(new AccountConfirmation($token));

            return redirect()->route('confirmated.compte');
        }
    }




    // Passer à l'étape suivante
    public function nextStep()
    {
        // Effectuer la validation conditionnelle avant de continuer
        if (!$this->validateStep()) {
            return;
        }

        // Passer à l'étape suivante
        if ($this->step < 4) {
            $this->step++;
        } else {
            // Soumettre le formulaire lorsque l'on est à la dernière étape
            $this->submit();
        }
    }

    // Sélectionner un type de compte
    public function selectAccountType($type)
    {
        // Définir le type de compte sélectionné
        $this->accountType = $type;

        // Flash message pour confirmer la sélection
        session()->flash('message', 'Type de compte sélectionné: ' . $this->accountType);

        // Passer à l'étape suivante après sélection
        $this->nextStep();
    }

    // Revenir à l'étape précédente
    public function previousStep()
    {
        if ($this->step > 1) {
            // Si on revient à l'étape 1, réinitialiser le type de compte
            if ($this->step === 2 || $this->step === 3 || $this->step === 4) {
                $this->accountType = null;  // Réinitialiser le type de compte
            }
            $this->step--;
        }
    }
    public function updatedTypePrestation($value)
    {
        $this->emit('typePrestationUpdated');
    }



    public function render()
    {
        $listeroles = Role::all();
        $listetypeprestations = TypePrestation::all();
        return view('livewire.register-component', compact('listeroles' , 'listetypeprestations'));
    }
}
