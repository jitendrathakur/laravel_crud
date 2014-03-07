<?php

class HostnamesController extends BaseController {

	/**
	 * Hostname Repository
	 *
	 * @var Hostname
	 */
	protected $hostname;

	public function __construct(Hostname $hostname)
	{
		$this->hostname = $hostname;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hostnames = $this->hostname->all();

		return View::make('hostnames.index', compact('hostnames'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('hostnames.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Hostname::$rules);

		if ($validation->passes())
		{
			$this->hostname->create($input);

			return Redirect::route('hostnames.index');
		}

		return Redirect::route('hostnames.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$hostname = $this->hostname->findOrFail($id);

		return View::make('hostnames.show', compact('hostname'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hostname = $this->hostname->find($id);

		if (is_null($hostname))
		{
			return Redirect::route('hostnames.index');
		}

		return View::make('hostnames.edit', compact('hostname'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Hostname::$rules);

		if ($validation->passes())
		{
			$hostname = $this->hostname->find($id);
			$hostname->update($input);

			return Redirect::route('hostnames.show', $id);
		}

		return Redirect::route('hostnames.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->hostname->find($id)->delete();

		return Redirect::route('hostnames.index');
	}

}
