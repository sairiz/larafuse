<?php namespace Saiffil\Larafuse\Controllers;

use Saiffil\Larafuse\Larafuse;
use View;
use Redirect;
use Input;
use Validator;
use Exception;

class TablesController extends BaseController {

	/**
	 * Larafuse instance
	 *
	 * @var Larafuse
	 */
	protected $larafuse;

	public function __construct(Larafuse $larafuse)
	{
		$this->larafuse = $larafuse;
	}

    /**
     * Instantiate table model
     * @param $table
     * @return mixed
     */
    protected function createInstance($table)
    {
        $inst = '\Saiffil\Larafuse\Tables\\'.ucfirst($table);

        return new $inst;
    }

    /**
     * Display a listing of the resource
     * @param $table
     * @return \Illuminate\View\View
     */
    public function index($table)
	{
		$tableObject = $this->createInstance($table);

		$inst = $tableObject->all();

		$larafuse = $this->larafuse->whereFusetable($table)->lists('Field');

		return View::make('larafuse::table.index', compact('inst','table','larafuse'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('larafuse::table.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Contact::$rules);

		if ($validation->passes())
		{
			$this->contact->create($input);

			return Redirect::route('contacts.index');
		}

		return Redirect::route('contacts.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $Id
	 * @return Response
	 */
	public function show($table,$Id)
	{
		$tableObject = $this->createInstance($table);

		$inst = $tableObject->findOrFail($Id);

		return View::make('larafuse::table.show', compact('inst','table','Id'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $Id
	 * @return Response
	 */
	public function edit($table,$Id)
	{
		$tableObject = $this->createInstance($table);

		$inst = $tableObject->find($Id);

		if (is_null($inst))
		{
			return Redirect::route('larafuse::table.index');
		}

		return View::make('larafuse::table.edit', compact('inst','table','Id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $Id
	 * @return Response
	 */
	public function update($table,$Id)
	{
		$tableObject = $this->createInstance($table);

		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, $tableObject::$rules);

		if ($validation->passes())
		{
			$inst = $tableObject->find($Id);
			$inst->update($input);

			return Redirect::action('Saiffil\Larafuse\Controllers\TablesController@show',[$table,$Id]);
		}

		return Redirect::route('contacts.edit', $Id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $Id
	 * @return Response
	 */
	public function destroy($table,$Id)
	{
		$tableObject = $this->createInstance($table);

		$tableObject->find($Id)->delete();

		return Redirect::action('Saiffil\Larafuse\Controllers\TablesController@index',$table);
	}

}
