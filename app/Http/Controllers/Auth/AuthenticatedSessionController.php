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
        // Proses autentikasi standar Breeze
        $request->authenticate();
        $request->session()->regenerate();

        // 🔹 Ambil user yang login
        $user = Auth::user();

        // 🔹 Ambil role aktif dari relasi roleUser
        $roleUser = $user->roleUser()->where('status', 1)->first();

        if ($roleUser && $roleUser->role) {
            $roleName = $roleUser->role->nama_role;

            // 🔹 Redirect sesuai role
            switch ($roleName) {
                case 'Administrator':
                    return redirect()->route('dashboard.admin');
                case 'Dokter':
                    return redirect()->route('dashboard.dokter');
                case 'Perawat':
                    return redirect()->route('dashboard.perawat');
                case 'Resepsionis':
                    return redirect()->route('dashboard.resepsionis');
                case 'Pemilik':
                    return redirect()->route('dashboard.pemilik');
                default:
                    Auth::logout();
                    return redirect()->route('login')->withErrors(['role' => 'Role tidak dikenali.']);
            }
        }

        // Jika user tidak punya role aktif
        Auth::logout();
        return redirect()->route('login')->withErrors(['role' => 'Role tidak ditemukan.']);
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
