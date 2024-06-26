<?php

namespace App\Policies;

use App\Models\Log;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LogPolicy
{
  use HandlesAuthorization;

  /**
   * Determine whether the user can view any models.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function viewAny(User $user)
  {

    return $user->hasPermissionTo('Visualizar Logs');
  }

  /**
   * Determine whether the user can view the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\Log $register
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function view(User $user, Log $register)
  {

    return $user->hasPermissionTo('Visualizar Logs');
  }

  /**
   * Determine whether the user can create models.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function create(User $user)
  {

    return $user->hasPermissionTo('Cadastrar Logs');
  }

  /**
   * Determine whether the user can update the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\Log $register
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function update(User $user, Log $register)
  {

    return $user->hasPermissionTo('Editar Logs');
  }

  /**
   * Determine whether the user can delete the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\Log $register
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function delete(User $user, Log $register)
  {

    return $user->hasPermissionTo('Remover Logs');
  }

  /**
   * Determine whether the user can restore the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\Log $register
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function restore(User $user, Log $register)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\Log $register
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function forceDelete(User $user, Log $register)
  {
    //
  }
}
