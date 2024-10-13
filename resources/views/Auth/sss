namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function submitForm()
    {
        // Validation des données
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        // Envoi de l'email de confirmation
        $user->sendEmailVerificationNotification();

        // Rediriger vers la page de demande de vérification
        return redirect()->route('verification.notice'); // Redirige vers la page de vérification
    }

    public function render()
    {
        return view('livewire.register');
    }
}
