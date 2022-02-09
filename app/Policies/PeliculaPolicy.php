<?php

namespace App\Policies;

<<<<<<< HEAD
use App\Models\Movie;
=======
use App\Models\Pelicula;
>>>>>>> 88cc79919dc92192776bb941917e4cca8887f296
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeliculaPolicy
{
    use HandlesAuthorization;

<<<<<<< HEAD
    public function before(User $user, $ability)
    {
        if ($user->esAdministrador()) {
=======

    public function before(User $user, $ability)
    {
        if ($user->esProveedor() && ($ability!='delete' || $ability != 'create')) {
            return false;
        }

        if ($user->esAdministrador()){
>>>>>>> 88cc79919dc92192776bb941917e4cca8887f296
            return true;
        }
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
<<<<<<< HEAD
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Movie $movie)
=======
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Pelicula $pelicula)
>>>>>>> 88cc79919dc92192776bb941917e4cca8887f296
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
<<<<<<< HEAD
        return $user->esProveedor();
=======
        //
>>>>>>> 88cc79919dc92192776bb941917e4cca8887f296
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
<<<<<<< HEAD
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Movie $movie)
=======
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Pelicula $pelicula)
>>>>>>> 88cc79919dc92192776bb941917e4cca8887f296
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
<<<<<<< HEAD
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Movie $movie)
    {
        return $user->esProveedor();
=======
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Pelicula $pelicula)
    {
        //
>>>>>>> 88cc79919dc92192776bb941917e4cca8887f296
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
<<<<<<< HEAD
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Movie $movie)
=======
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Pelicula $pelicula)
>>>>>>> 88cc79919dc92192776bb941917e4cca8887f296
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
<<<<<<< HEAD
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Movie $movie)
=======
     * @param  \App\Models\Pelicula  $pelicula
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Pelicula $pelicula)
>>>>>>> 88cc79919dc92192776bb941917e4cca8887f296
    {
        //
    }
}
