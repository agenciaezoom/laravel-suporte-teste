<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DistributorPolicy
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

    return $user->hasPermissionTo('Visualizar Distribuidor');
  }

  /**
   * Determine whether the user can view the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\User  $userRegister
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function view(User $user, User $userRegister)
  {

    return $user->hasPermissionTo('Visualizar Distribuidor');
  }

  /**
   * Determine whether the user can create models.
   *
   * @param  \App\Models\User  $user
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function create(User $user)
  {

    return $user->hasPermissionTo('Cadastrar Distribuidor');
  }

  /**
   * Determine whether the user can update the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\User  $userRegister
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function update(User $user, User $userRegister)
  {

    return $user->hasPermissionTo('Editar Distribuidor');
  }

  /**
   * Determine whether the user can delete the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\User  $userRegister
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function delete(User $user, User $userRegister)
  {

    return $user->hasPermissionTo('Remover Distribuidor');
  }

  /**
   * Determine whether the user can restore the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\User  $userRegister
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function restore(User $user, User $userRegister)
  {
    //
  }

  /**
   * Determine whether the user can permanently delete the model.
   *
   * @param  \App\Models\User  $user
   * @param  \Spatie\Permission\Models\User  $userRegister
   * @return \Illuminate\Auth\Access\Response|bool
   */
  public function forceDelete(User $user, User $userRegister)
  {
    //
  }
}
