<?php

class NetworksController extends BaseController {

	/**
	 * Network Repository
	 *
	 * @var Network
	 */
	protected $network;

	public function __construct(Network $network)
	{
		$this->network = $network;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$networks = $this->network->all();

		return View::make('networks.index', compact('networks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('networks.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Network::$rules);

		if ($validation->passes())
		{
			$this->network->create($input);

			return Redirect::route('networks.index');
		}

		return Redirect::route('networks.create')
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
		$network = $this->network->findOrFail($id);

		return View::make('networks.show', compact('network'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$network = $this->network->find($id);

		if (is_null($network))
		{
			return Redirect::route('networks.index');
		}

		return View::make('networks.edit', compact('network'));
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
		$validation = Validator::make($input, Network::$rules);

		if ($validation->passes())
		{
			$network = $this->network->find($id);
			$network->update($input);

			return Redirect::route('networks.show', $id);
		}

		return Redirect::route('networks.edit', $id)
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
		$this->network->find($id)->delete();

		return Redirect::route('networks.index');
	}

}
