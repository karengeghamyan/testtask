<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contracts\CodeTrackingServiceInterface;

class CodeTrackingController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
    public function index(CodeTrackingServiceInterface $code_tracking_service)
    {
    	return view('code_trackings.index', ['data' => $code_tracking_service->getAllTrackingCodes()]);
    }

    /**
     * Display resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id, CodeTrackingServiceInterface $code_tracking_service)
    {    	
    	return view('code_trackings.forms.edit', ['data' => $code_tracking_service->getTrackingCodeById($id)]);
    }

    /**
     * Display resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id, CodeTrackingServiceInterface $code_tracking_service)
    {
    	$code_tracking_service->getTrackingCodeById($id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
    */
    public function store(CodeTrackingServiceInterface $code_tracking_service, Request $request)
    {    	
    	if( null!== $code_tracking_service->store($request->all()) )
    	{
    		return redirect()->back();
    	}
    }

    /**
     * Update resource in storage.
     *
     * @return Response
    */
    public function update($id, CodeTrackingServiceInterface $code_tracking_service, Request $request)
    {    	
    	if( null!== $code_tracking_service->update($id, $request->all()) )
    	{
    		return redirect()->back();
    	}    	
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, CodeTrackingServiceInterface $code_tracking_service)
    {    	
    	if( null!== $code_tracking_service->delete($id) )
    	{
    		return redirect()->back();
    	}       	
    }
}
