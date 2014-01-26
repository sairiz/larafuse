@extends('larafuse::layouts.scaffold')

@section('main')

<h1>Show {{ $table }}</h1>

<p>{{ link_to_action('Saiffil\Larafuse\Controllers\TablesController@index', 'Return to all '.$table, [$table]) }}</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr>
			<th>Address1Type</th>
				<th>Id</th>
				<th>Address2Street1</th>
				<th>Address2Street2</th>
				<th>Address2Type</th>
				<th>Address3Street1</th>
				<th>Address3Street2</th>
				<th>Address3Type</th>
				<th>Anniversary</th>
				<th>AssistantName</th>
				<th>AssistantPhone</th>
				<th>BillingInformation</th>
				<th>Birthday</th>
				<th>City</th>
				<th>City2</th>
				<th>City3</th>
				<th>Company</th>
				<th>AccountId</th>
				<th>CompanyID</th>
				<th>ContactNotes</th>
				<th>ContactType</th>
				<th>Country</th>
				<th>Country2</th>
				<th>Country3</th>
				<th>CreatedBy</th>
				<th>DateCreated</th>
				<th>Email</th>
				<th>EmailAddress2</th>
				<th>EmailAddress3</th>
				<th>Fax1</th>
				<th>Fax1Type</th>
				<th>Fax2</th>
				<th>Fax2Type</th>
				<th>FirstName</th>
				<th>Groups</th>
				<th>JobTitle</th>
				<th>LastName</th>
				<th>LastUpdated</th>
				<th>LastUpdatedBy</th>
				<th>Leadsource</th>
				<th>LeadSourceId</th>
				<th>MiddleName</th>
				<th>Nickname</th>
				<th>OwnerID</th>
				<th>Password</th>
				<th>Phone1</th>
				<th>Phone1Ext</th>
				<th>Phone1Type</th>
				<th>Phone2</th>
				<th>Phone2Ext</th>
				<th>Phone2Type</th>
				<th>Phone3</th>
				<th>Phone3Ext</th>
				<th>Phone3Type</th>
				<th>Phone4</th>
				<th>Phone4Ext</th>
				<th>Phone4Type</th>
				<th>Phone5</th>
				<th>Phone5Ext</th>
				<th>Phone5Type</th>
				<th>PostalCode</th>
				<th>PostalCode2</th>
				<th>PostalCode3</th>
				<th>ReferralCode</th>
				<th>SpouseName</th>
				<th>State</th>
				<th>State2</th>
				<th>State3</th>
				<th>StreetAddress1</th>
				<th>StreetAddress2</th>
				<th>Suffix</th>
				<th>Title</th>
				<th>Username</th>
				<th>Validated</th>
				<th>Website</th>
				<th>ZipFour1</th>
				<th>ZipFour2</th>
				<th>ZipFour3</th>
				<th>_Gender</th>
				<th>_IdentityCard0</th>
				<th>_Password0</th>
				<th>_LastLogin</th>
				<th>_Race</th>
				<th>_Religion</th>
				<th>_FacebookType</th>
				<th>_Facebook</th>
				<th>_SkypeID</th>
				<th>_YahooID</th>
				<th>_Bank0</th>
				<th>_AccountHolder</th>
				<th>_AccountNumber</th>
				<th>_MSNID</th>
				<th>_LinkedIn</th>
				<th>_Google</th>
				<th>_Twitter</th>
				<th>_TrackingNo</th>
				<th>_OrderID1</th>
				<th>_OrderID2</th>
				<th>_Company0</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $inst->Address1Type }}}</td>
					<td>{{{ $inst->Id }}}</td>
					<td>{{{ $inst->Address2Street1 }}}</td>
					<td>{{{ $inst->Address2Street2 }}}</td>
					<td>{{{ $inst->Address2Type }}}</td>
					<td>{{{ $inst->Address3Street1 }}}</td>
					<td>{{{ $inst->Address3Street2 }}}</td>
					<td>{{{ $inst->Address3Type }}}</td>
					<td>{{{ $inst->Anniversary }}}</td>
					<td>{{{ $inst->AssistantName }}}</td>
					<td>{{{ $inst->AssistantPhone }}}</td>
					<td>{{{ $inst->BillingInformation }}}</td>
					<td>{{{ $inst->Birthday }}}</td>
					<td>{{{ $inst->City }}}</td>
					<td>{{{ $inst->City2 }}}</td>
					<td>{{{ $inst->City3 }}}</td>
					<td>{{{ $inst->Company }}}</td>
					<td>{{{ $inst->AccountId }}}</td>
					<td>{{{ $inst->CompanyID }}}</td>
					<td>{{{ $inst->ContactNotes }}}</td>
					<td>{{{ $inst->ContactType }}}</td>
					<td>{{{ $inst->Country }}}</td>
					<td>{{{ $inst->Country2 }}}</td>
					<td>{{{ $inst->Country3 }}}</td>
					<td>{{{ $inst->CreatedBy }}}</td>
					<td>{{{ $inst->DateCreated }}}</td>
					<td>{{{ $inst->Email }}}</td>
					<td>{{{ $inst->EmailAddress2 }}}</td>
					<td>{{{ $inst->EmailAddress3 }}}</td>
					<td>{{{ $inst->Fax1 }}}</td>
					<td>{{{ $inst->Fax1Type }}}</td>
					<td>{{{ $inst->Fax2 }}}</td>
					<td>{{{ $inst->Fax2Type }}}</td>
					<td>{{{ $inst->FirstName }}}</td>
					<td>{{{ $inst->Groups }}}</td>
					<td>{{{ $inst->JobTitle }}}</td>
					<td>{{{ $inst->LastName }}}</td>
					<td>{{{ $inst->LastUpdated }}}</td>
					<td>{{{ $inst->LastUpdatedBy }}}</td>
					<td>{{{ $inst->Leadsource }}}</td>
					<td>{{{ $inst->LeadSourceId }}}</td>
					<td>{{{ $inst->MiddleName }}}</td>
					<td>{{{ $inst->Nickname }}}</td>
					<td>{{{ $inst->OwnerID }}}</td>
					<td>{{{ $inst->Password }}}</td>
					<td>{{{ $inst->Phone1 }}}</td>
					<td>{{{ $inst->Phone1Ext }}}</td>
					<td>{{{ $inst->Phone1Type }}}</td>
					<td>{{{ $inst->Phone2 }}}</td>
					<td>{{{ $inst->Phone2Ext }}}</td>
					<td>{{{ $inst->Phone2Type }}}</td>
					<td>{{{ $inst->Phone3 }}}</td>
					<td>{{{ $inst->Phone3Ext }}}</td>
					<td>{{{ $inst->Phone3Type }}}</td>
					<td>{{{ $inst->Phone4 }}}</td>
					<td>{{{ $inst->Phone4Ext }}}</td>
					<td>{{{ $inst->Phone4Type }}}</td>
					<td>{{{ $inst->Phone5 }}}</td>
					<td>{{{ $inst->Phone5Ext }}}</td>
					<td>{{{ $inst->Phone5Type }}}</td>
					<td>{{{ $inst->PostalCode }}}</td>
					<td>{{{ $inst->PostalCode2 }}}</td>
					<td>{{{ $inst->PostalCode3 }}}</td>
					<td>{{{ $inst->ReferralCode }}}</td>
					<td>{{{ $inst->SpouseName }}}</td>
					<td>{{{ $inst->State }}}</td>
					<td>{{{ $inst->State2 }}}</td>
					<td>{{{ $inst->State3 }}}</td>
					<td>{{{ $inst->StreetAddress1 }}}</td>
					<td>{{{ $inst->StreetAddress2 }}}</td>
					<td>{{{ $inst->Suffix }}}</td>
					<td>{{{ $inst->Title }}}</td>
					<td>{{{ $inst->Username }}}</td>
					<td>{{{ $inst->Validated }}}</td>
					<td>{{{ $inst->Website }}}</td>
					<td>{{{ $inst->ZipFour1 }}}</td>
					<td>{{{ $inst->ZipFour2 }}}</td>
					<td>{{{ $inst->ZipFour3 }}}</td>
					<td>{{{ $inst->_Gender }}}</td>
					<td>{{{ $inst->_IdentityCard0 }}}</td>
					<td>{{{ $inst->_Password0 }}}</td>
					<td>{{{ $inst->_LastLogin }}}</td>
					<td>{{{ $inst->_Race }}}</td>
					<td>{{{ $inst->_Religion }}}</td>
					<td>{{{ $inst->_FacebookType }}}</td>
					<td>{{{ $inst->_Facebook }}}</td>
					<td>{{{ $inst->_SkypeID }}}</td>
					<td>{{{ $inst->_YahooID }}}</td>
					<td>{{{ $inst->_Bank0 }}}</td>
					<td>{{{ $inst->_AccountHolder }}}</td>
					<td>{{{ $inst->_AccountNumber }}}</td>
					<td>{{{ $inst->_MSNID }}}</td>
					<td>{{{ $inst->_LinkedIn }}}</td>
					<td>{{{ $inst->_Google }}}</td>
					<td>{{{ $inst->_Twitter }}}</td>
					<td>{{{ $inst->_TrackingNo }}}</td>
					<td>{{{ $inst->_OrderID1 }}}</td>
					<td>{{{ $inst->_OrderID2 }}}</td>
					<td>{{{ $inst->_Company0 }}}</td>
                    <td>{{ link_to_action('Saiffil\Larafuse\Controllers\TablesController@edit', 'Edit', [$table,$Id], array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('contacts.destroy', $inst->Id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
