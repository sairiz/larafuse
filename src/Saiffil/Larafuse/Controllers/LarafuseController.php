<?php namespace Saiffil\Larafuse\Controllers;

use Larafuse;
use Fetch;
use Sync;
use View;
use Redirect;
use Input;
use Cache;
use Config;

class LarafuseController extends BaseController {

	/**
	 * Larafus Repository
	 *
	 * @var Larafuse
	 */
	protected $larafuse;

	public function __construct(Larafuse $larafuse)
	{
		$this->larafuse = $larafuse;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$larafuse = $this->larafuse->all();

		return View::make('larafuse::larafuse.index', compact('larafuse'));
	}

	/**
	 * Fetch all data according to table. If no table define
	 * all defined table will be fetched
	 *
	 * @return Response
	 */
	public function fetch($table = null)
	{
		if($table === null)
		{
			if(Cache::has('tables'))
			{

			} 
			else 
			{
				$tables = Fetch::getTables();
				Cache::put('tables',$tables,5000);
			}

			$newTable = Cache::get('tables');			

			$n = count($newTable);

			if (Cache::has('fetch'))
			{
				$i = Cache::get('fetch');
			    $i = $i + 1;
			}
			else 
			{
				$i = 0;

				Cache::put('fetch',$i,100);
			}

			if($i === ($n-1))
			{
				$done = true;
				Cache::forget('fetch');
				Cache::forget('tables');
			}
			else 
			{
				$data = Fetch::fetch(ucfirst($newTable[$i]));
				$done = false;
				$tab = $newTable[$i];
				Cache::put('fetch',$i,100);
			}
		} 
		else
		{
			$data = Fetch::fetch(ucfirst($table));
		}

		return View::make('larafuse::larafuse.fetch', compact('data','tab','done'));
		/*
		$data = Fetch::fetch($table);

		return $data;

		return View::make('larafuse::larafuse.fetch', ['data' => $data,'table' => $table]); */
	}

	/**
	 * Fetch data from a single table accoring to given id
	 *
	 * @return Response
	 */
	public function fetchId($table, $Id)
	{
		$data = Fetch::fetchId($table,$Id);

		return $data;

		return View::make('larafuse::larafuse.fetch', ['data' => $data,'table' => $table]);
	}

	/**
	 * Sync all data according to table. If no table define
	 * all defined table will be synced
	 *
	 * @return Response
	 */
	public function sync($table = null, $limit = null)
	{
		$data = Sync::sync($table,$limit);

		return $data;

		return View::make('larafuse::larafuse.sync', ['data' => $data,'table' => $table]);
	}

	/**
	 * Sync data from a single table accoring to given id
	 *
	 * @return Response
	 */
	public function syncId($table, $Id)
	{
		$data = Sync::syncId($table,$Id);

		return $data;

		return View::make('larafuse::larafuse.sync', ['data' => $data,'table' => $table]);
	}

    /**
     * Sync missing data
     * @param null $table
     * @return array|\Illuminate\View\View
     */
    public function syncMissing($table = null)
	{
		$data = Sync::syncMissing($table);

		return $data;

		return View::make('larafuse::larafuse.sync', ['data' => $data,'table' => $table]);
	}

	 /**
     * Sync Order Group data
     * @param null $table
     * @return array|\Illuminate\View\View
     */
    public function syncOrderGroup($limit = null)
	{
		$data = Sync::syncOrderGroup($limit);

		return $data;

		return View::make('larafuse::larafuse.sync', ['data' => $data]);
	}

	 /**
     * Sync main data
     * @param null $table
     * @return array|\Illuminate\View\View
     */
    public function syncMain($limit = null)
	{
		$data = Sync::syncMain($limit);

		return $data;

		return View::make('larafuse::larafuse.sync', ['data' => $data]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('larafuse::larafuse.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Larafuse::$rules);

		if ($validation->passes())
		{
			$this->larafuse->create($input);

			return Redirect::route('larafuse.index');
		}

		return Redirect::route('larafuse.create')
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
	public function show($Id)
	{
		$larafuse = $this->larafuse->findOrFail($Id);

		return View::make('larafuse::larafuse.show', compact('larafuse'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $Id
	 * @return Response
	 */
	public function edit($Id)
	{
		$larafuse = $this->larafuse->find($Id);

		if (is_null($larafuse))
		{
			return Redirect::route('larafuse.index');
		}

		return View::make('larafuse::larafuse.edit', compact('larafuse'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $Id
	 * @return Response
	 */
	public function update($Id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Larafuse::$rules);

		if ($validation->passes())
		{
			$larafuse = $this->larafuse->find($Id);
			$larafuse->update($input);

			return Redirect::route('larafuse.show', $Id);
		}

		return Redirect::route('larafuse.edit', $Id)
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
	public function destroy($Id)
	{
		$this->larafuse->find($Id)->delete();

		return Redirect::route('larafuse.index');
	}

}
