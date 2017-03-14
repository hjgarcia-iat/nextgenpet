<?php namespace App\Repositories;

use App\College;
use App\User;
use Illuminate\Http\Request;

class NextGenPetUserRepository implements RepositoryInterface
{

	/**
	 * @var Request
	 */
	private $request;

	/**
	 * UserRepository constructor.
	 *
	 * @param Request $request
	 */
	public function __construct(Request $request)
	{
		$this->request = $request;
	}

	/**
	 * @return User|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
	public function getAll()
	{

		$users = User::search($this->request->get('id'))
		             ->joinRelations('account')
		             ->whereHas('roles', function ($query){
			             $query->where('name', 'nextgen_pet_user');
		             })->orderBy('first_name', 'asc')
		             ->where('users.id', '<>', auth()->id())
		             ->paginate(25, ['users.id', 'first_name', 'last_name', 'email','account_status'])
		             ->appends([
			             'search' => $this->request->get('search'),
		             ]);

		return $users;
	}

	/**
	 * Get by Id
	 *
	 * @param $id
	 *
	 * @return User|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
	public function getById($id)
	{
		return User::with(['colleges','account'])->findOrFail($id);
	}

	/**
	 * Create Record
	 *
	 * @param array $data
	 *
	 * @return User|bool|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
	public function create($data = [])
	{
		return $user = User::createNextGenPetUser($this->request->all());
	}

	/**
	 * Update Record
	 *
	 * @param       $id
	 * @param array $data
	 *
	 * @return User|bool|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
	public function update($id, $data = [])
	{
		return \DB::transaction(function () use ($id, $data) {
			$user    = $this->getById($id);
			$college = College::findOrFail($data['college']);

			$user->update($data);
			$user->account->update($data);
			$user->colleges()->sync([$college->id]);

			return $user;
		});
	}

	/**
	 * Delete Record
	 *
	 * @param $id
	 *
	 * @return User|bool|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
	public function delete($id)
	{
		return \DB::transaction(function () use ($id){
			$user = $this->getById($id);

			$user->account->delete();

			if ($user->roles()){
				$user->roles()->detach();
			}

			if ($user->permissions()){
				$user->permissions()->detach();
			}

			if ($user->colleges()){
				$user->colleges()->detach();
			}

			return $user->delete();
		});
	}
}

