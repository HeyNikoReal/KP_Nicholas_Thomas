<?

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;
      

        $user = User::where('email', $email)->first();
        if ($user && Hash::check($password, $user->password)) {
                Auth::login($user);
                return redirect('/dashboard');
        }
        

        Session::flash('error');
        return redirect('/login');
    }
}