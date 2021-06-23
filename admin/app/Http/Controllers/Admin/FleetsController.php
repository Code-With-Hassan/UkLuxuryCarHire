<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Schema;
use App\Fleets;
use App\Http\Requests\CreateFleetsRequest;
use App\Http\Requests\UpdateFleetsRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\FileUploadTrait;


class FleetsController extends Controller {

	/**
	 * Display a listing of fleets
	 *
     * @param Request $request
     *
     * @return \Illuminate\View\View
	 */
	public function index(Request $request)
    {
        $fleets = Fleets::all();

		return view('admin.fleets.index', compact('fleets'));
	}

	/**
	 * Show the form for creating a new fleets
	 *
     * @return \Illuminate\View\View
	 */
	public function create()
	{
	    
	    
	    return view('admin.fleets.create');
	}

	/**
	 * Store a newly created fleets in storage.
	 *
     * @param CreateFleetsRequest|Request $request
	 */
	public function store(CreateFleetsRequest $request)
	{
	    $request = $this->saveFiles($request);
		Fleets::create($request->all());

		return redirect()->route(config('quickadmin.route').'.fleets.index');
	}

	/**
	 * Show the form for editing the specified fleets.
	 *
	 * @param  int  $id
     * @return \Illuminate\View\View
	 */
	public function edit($id)
	{
		$fleets = Fleets::find($id);
	    
	    
		return view('admin.fleets.edit', compact('fleets'));
	}

	/**
	 * Update the specified fleets in storage.
     * @param UpdateFleetsRequest|Request $request
     *
	 * @param  int  $id
	 */
	public function update($id, UpdateFleetsRequest $request)
	{
		$fleets = Fleets::findOrFail($id);

        $request = $this->saveFiles($request);

		$fleets->update($request->all());

		return redirect()->route(config('quickadmin.route').'.fleets.index');
	}

	/**
	 * Remove the specified fleets from storage.
	 *
	 * @param  int  $id
	 */
	public function destroy($id)
	{
		Fleets::destroy($id);

		return redirect()->route(config('quickadmin.route').'.fleets.index');
	}

    /**
     * Mass delete function from index page
     * @param Request $request
     *
     * @return mixed
     */
    public function massDelete(Request $request)
    {
        if ($request->get('toDelete') != 'mass') {
            $toDelete = json_decode($request->get('toDelete'));
            Fleets::destroy($toDelete);
        } else {
            Fleets::whereNotNull('id')->delete();
        }

        return redirect()->route(config('quickadmin.route').'.fleets.index');
    }

}
