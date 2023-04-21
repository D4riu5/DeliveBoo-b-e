<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Type;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $types = Type::all();

        return view('auth.register', compact('types'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                // no spaces in regex, no special characters and numbers
                'name' => ['required', 'string', 'min:2', 'max:16', 'regex:/^[a-zA-Z]*$/'],
                // allows for spaces but no special characters and numbers
                'surname' => ['nullable', 'string', 'min:2', 'max:32', 'regex:/^[a-zA-Z\s]*$/'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class, 'regex:/^.+@.+\..+$/'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],

                'restaurant_name' => ['required', 'string', 'min:2', 'max:32'],
                'address' => ['required', 'string', 'max:128', 'regex:/^[a-zA-Z0-9 .,;:-]+$/'],
                'PIVA' => ['required', 'string', 'min:11', 'max:11', 'regex:/^[0-9]*$/'],
                'types' => ['required', 'array', 'exists:types,id']
            ],
            // CUSTOM MESSAGES
            [
                'restaurant_name.required' => 'Il nome dell\'attività è obbligatorio.',
                'restaurant_name.string' => 'Il nome dell\'attività deve essere una stringa.',
                'restaurant_name.min' => 'Il nome dell\'attività deve essere lungo almeno :min caratteri.',
                'restaurant_name.max' => 'Il nome dell\'attività non può essere più lungo di :max caratteri.',
                'address.required' => 'L\'indirizzo dell\'attività è obbligatorio',
                'address.max' => 'L\'indirizzo dell\'attività non può essere più lungo di :max caratteri.',
                'address.regex' => 'L\'indirizzo non ammette caratteri speciali',
                'PIVA.required' => 'La Partita Iva è obbligatoria.',
                'PIVA.max' => 'La Partita IVA deve essere lungo :max numeri.',
                'PIVA.min' => 'La Partita IVA deve essere lungo :min numeri.',
                'PIVA.regex' => 'La Partita IVA deve contenere solo numeri.',
                'types.required' => 'Seleziona almeno una categoria!',
                'types.array' => 'Il campo categorie deve essere un array.',
                'types.exists' => 'Una o più categorie selezionate non sono valide.'
            ]
        );

        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $restaurant = Restaurant::create([
            'name' => $request->restaurant_name,
            'address' => $request->address,
            'PIVA' => $request->PIVA,
            'user_id' => $user->id,
        ]);

        // Types
        foreach ($request->types as $type) {
            $restaurant->types()->attach($type);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
