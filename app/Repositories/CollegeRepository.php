<?php namespace App\Repositories;

use App\College;
use App\State;
use App\Zip;
use Illuminate\Http\Request;

class CollegeRepository implements RepositoryInterface
{

	/**
	 * @var Request
	 */
	private $request;

	/**
	 * CollegeRepository constructor.
	 *
	 * @param Request $request
	 */
	public function __construct(Request $request)
	{
		$this->request = $request;
	}


	/**
	 * Get all records
	 *
	 * @return College|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
	public function getAll()
	{
		$colleges = College::with('users')
		                   ->search($this->request->get('q'))
		                   ->paginate(25)
		                   ->setPath('/admin/colleges');

		return $colleges;
	}

	/**
	 * Get by Id
	 *
	 * @param $id
	 *
	 * @return College|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
	public function getById($id)
	{
		return College::with('state')->findOrFail($id);
	}

	/**
	 * Create Record
	 *
	 * @param array $data
	 *
	 * @return College|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
	public function create($data = [])
	{
		return \DB::transaction(function () use ($data){

			//get the data for creating a college
			$zip   = Zip::whereZipCode($data['zip'])->firstOrFail();
			$state = State::whereAbbr($zip->state_prefix)->firstOrFail();

			//set data for college
			$college           = new College();
			$college->name     = $data['institution'];
			$college->address  = '-';
			$college->city     = $zip->city;
			$college->zip      = $zip->zip_code;
			$college->state_id = $state->id;
			$college->save();

			return  $college;
		});
	}

	/**
	 * Update Record
	 *
	 * @param       $id
	 * @param array $data
	 *
	 * @return College|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
	public function update($id, $data = [])
	{
		return \DB::transaction(function () use ($id, $data){
			$college = $this->getById($id);
			$zip     = Zip::whereZipCode($data['zip'])->firstOrFail();
			$state   = State::whereAbbr($zip->state_prefix)->firstOrFail();

			$college->name     = $data['name'];
			$college->address  = $data['address'];
			$college->city     = $zip->city;
			$college->zip      = $zip->zip_code;
			$college->state_id = $state->id;

			$college->save();

			return $college;
		});
	}

	/**
	 * Delete Record
	 *
	 * @param $id
	 *
	 * @return College|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
	 */
	public function delete($id)
	{
		$college = $this->getById($id);

		return $college->delete();

	}
}