<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;

class UserController extends Controller
{
  protected $userRepository;

  protected $pagination = 10;

  public function __construct(UserRepository $userRepository)
  {
    $this->middleware('auth');
    $this->middleware('admin', ['only' => ['index', 'delete']]);

    $this->userRepository = $userRepository;
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $users = $this->userRepository->getPaginate($this->pagination);
      $links = $users->render();

      return view('back-end.users.index', compact('users', 'links'));
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $user = $this->userRepository->getById($id);

      return view('users.show', compact('user'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $user = $this->userRepository->getById($id);

    return view('users.edit', compact('user'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(UserUpdateRequest $request, $id)
  {
      $this->userRepository->update($id, $request->all());

      return redirect(route($this->userRepository->updateRedirectRoute($request, 'user.index')));
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      $this->userRepository->delete($id);

      return back();
  }

}
