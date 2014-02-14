<?php namespace Sairiz\Larafuse\Controllers;

use Sairiz\Larafuse\Tables\Contact;
use View;
use Redirect;
use Input;
use Validator;
use Config;

class ContactsController extends BaseController {

	/**
	 * Contact Repository
	 *
	 * @var Contact
	 */
	protected $contact;

	public function __construct(Contact $contact)
	{
		$this->contact = $contact;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contacts = $this->contact->all();

		return View::make('larafuse::contacts.index', compact('contacts'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('contacts.create');
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
	public function show($Id)
	{
		$contact = $this->contact->findOrFail($Id);

		return View::make('contacts.show', compact('contact'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $Id
	 * @return Response
	 */
	public function edit($Id)
	{
		$contact = $this->contact->find($Id);

		if (is_null($contact))
		{
			return Redirect::route('contacts.index');
		}

		return View::make('contacts.edit', compact('contact'));
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
		$validation = Validator::make($input, Contact::$rules);

		if ($validation->passes())
		{
			$contact = $this->contact->find($Id);
			$contact->update($input);

			return Redirect::route('contacts.show', $Id);
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
	public function destroy($Id)
	{
		$this->contact->find($Id)->delete();

		return Redirect::route('contacts.index');
	}

}
