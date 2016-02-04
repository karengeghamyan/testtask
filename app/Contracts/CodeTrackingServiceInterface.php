<?php

namespace App\Contracts;

interface CodeTrackingServiceInterface {	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	*/
	public function store($inputs);

	/**
	 * Update resource in storage.
	 *
	 * @return Response
	*/
	public function update($id, $inputs);	

	/**
	 * Delete a newly created resource in storage.
	 *
	 * @return Response
	*/
	public function delete($id);
}