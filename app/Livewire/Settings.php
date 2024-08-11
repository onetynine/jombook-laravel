<?

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Settings extends Component
{
    public $name;
    public $email;

    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function saveSettings()
    {
        // Validation logic

        // Save settings to the database

        session()->flash('message', 'Settings saved successfully.');
    }

    public function render()
    {
        return view('livewire.settings');
    }
}
