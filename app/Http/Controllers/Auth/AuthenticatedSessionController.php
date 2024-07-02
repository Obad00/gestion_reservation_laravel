<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // Authentifie l'utilisateur avec les informations de connexion fournies
        $request->authenticate();

        // Regénère la session pour prévenir les attaques de fixation de session
        $request->session()->regenerate();

        // Récupère l'utilisateur authentifié
        $user = $request->user();

        // Vérifie le rôle de l'utilisateur et redirige en conséquence
        if ($user->hasRole('super_admin|admin') ) {
            return redirect()->intended(route('dashboard.admin', [], false));
        } elseif ($user->hasRole('association')) {
            return redirect()->intended(route('association.dashboard', [], false));
        } else {
            return redirect()->intended(route('dashboard', [], false));
        }
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
