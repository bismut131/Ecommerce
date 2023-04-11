<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use function Termwind\render;
use function Termwind\renderUsing;

class RegisteredUserController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Admin/User/UserList', [
            'users' => User::all()
        ]);
    }

    public function show(User $user): Response
    {
        return Inertia::render('Admin/User/UserShow', [
            'user' => $user
        ]);
    }

    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Admin/User/UserCreate');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:' . User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'required|string|max:255',
            'permission' => 'required|string|max:255',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'permission' => $request->permission
        ]);

        return Redirect::route('admin.user.index');
    }

    public function update(User $user, Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore($user->id)],
            'role' => 'required|string|max:255',
            'permission' => 'required|string|max:255',
        ]);

        $user->update($validatedData);

        return Redirect::route('admin.user.show', $user->id);
    }
}
