<?php

class LarafuseInitialSeeder extends Seeder {

	public function run()
	{
		DB::table('Larafuse')->truncate();

		$columns = Fetch::getColumns();

		foreach($columns as $column) {
			Larafuse::create($column);
		}

		// Duplicated 'ContactId' in RecurringOrderWithContact table
		// manually deleted from Table Documentation
		// Id rearrange : Company,Contact,DataFormField,User
	}

}
