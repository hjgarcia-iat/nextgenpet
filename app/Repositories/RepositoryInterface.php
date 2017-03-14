<?php namespace App\Repositories;

use Illuminate\Http\Request;

interface RepositoryInterface
{

	/**
	 * Get all records
	 *
	 *
	 * @return mixed
	 */
	public function getAll();

	/**
	 * Get by Id
	 * @param $id
	 *
	 * @return mixed
	 */
	public function getById($id);

	/**
	 * Create Record
	 * @param array $data
	 *
	 * @return mixed
	 */
	public function create($data = []);

	/**
	 * Update Record
	 *
	 * @param       $id
	 * @param array $data
	 *
	 * @return mixed
	 */
	public function update($id, $data = []);

	/**
	 * Delete Record
	 * @param $id
	 *
	 * @return mixed
	 */
	public function delete($id);
}
