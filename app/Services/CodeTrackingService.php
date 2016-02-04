<?php

namespace App\Services;

use App\Models\TrackingCode;
use App\Contracts\CodeTrackingServiceInterface;

class CodeTrackingService implements CodeTrackingServiceInterface {
	public function __construct(TrackingCode $tracking_code) {
		$this->tracking_code = $tracking_code;
	}

	public function store($inputs)
	{
		return $this->tracking_code->create($inputs);
	}

	public function update($id, $inputs)
	{
		return $this->getTrackingCodeById($id)->update($inputs);
	}

	public function delete($id)
	{
		return $this->getTrackingCodeById($id)->delete();
	}

	public function getTrackingCodeById($id)
	{
		return $this->tracking_code->find($id);
	}

	public function getAllTrackingCodes()
	{
		return $this->tracking_code->get();
	}
}