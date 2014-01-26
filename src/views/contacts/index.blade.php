@extends('larafuse::layouts.scaffold')

@section('main')

<h1>All Contacts</h1>

<p>{{ link_to_route('contacts.create', 'Add new contact') }}</p>

@if ($contacts->count())
	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Address1Type</th>
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
			@foreach ($contacts as $contact)
				<tr>
					<td>{{{ $contact->Id }}}</td>
					<td>{{{ $contact->Address1Type }}}</td>
					<td>{{{ $contact->Address2Street1 }}}</td>
					<td>{{{ $contact->Address2Street2 }}}</td>
					<td>{{{ $contact->Address2Type }}}</td>
					<td>{{{ $contact->Address3Street1 }}}</td>
					<td>{{{ $contact->Address3Street2 }}}</td>
					<td>{{{ $contact->Address3Type }}}</td>
					<td>{{{ $contact->Anniversary }}}</td>
					<td>{{{ $contact->AssistantName }}}</td>
					<td>{{{ $contact->AssistantPhone }}}</td>
					<td>{{{ $contact->BillingInformation }}}</td>
					<td>{{{ $contact->Birthday }}}</td>
					<td>{{{ $contact->City }}}</td>
					<td>{{{ $contact->City2 }}}</td>
					<td>{{{ $contact->City3 }}}</td>
					<td>{{{ $contact->Company }}}</td>
					<td>{{{ $contact->AccountId }}}</td>
					<td>{{{ $contact->CompanyID }}}</td>
					<td>{{{ $contact->ContactNotes }}}</td>
					<td>{{{ $contact->ContactType }}}</td>
					<td>{{{ $contact->Country }}}</td>
					<td>{{{ $contact->Country2 }}}</td>
					<td>{{{ $contact->Country3 }}}</td>
					<td>{{{ $contact->CreatedBy }}}</td>
					<td>{{{ $contact->DateCreated }}}</td>
					<td>{{{ $contact->Email }}}</td>
					<td>{{{ $contact->EmailAddress2 }}}</td>
					<td>{{{ $contact->EmailAddress3 }}}</td>
					<td>{{{ $contact->Fax1 }}}</td>
					<td>{{{ $contact->Fax1Type }}}</td>
					<td>{{{ $contact->Fax2 }}}</td>
					<td>{{{ $contact->Fax2Type }}}</td>
					<td>{{{ $contact->FirstName }}}</td>
					<td>{{{ $contact->Groups }}}</td>
					<td>{{{ $contact->JobTitle }}}</td>
					<td>{{{ $contact->LastName }}}</td>
					<td>{{{ $contact->LastUpdated }}}</td>
					<td>{{{ $contact->LastUpdatedBy }}}</td>
					<td>{{{ $contact->Leadsource }}}</td>
					<td>{{{ $contact->LeadSourceId }}}</td>
					<td>{{{ $contact->MiddleName }}}</td>
					<td>{{{ $contact->Nickname }}}</td>
					<td>{{{ $contact->OwnerID }}}</td>
					<td>{{{ $contact->Password }}}</td>
					<td>{{{ $contact->Phone1 }}}</td>
					<td>{{{ $contact->Phone1Ext }}}</td>
					<td>{{{ $contact->Phone1Type }}}</td>
					<td>{{{ $contact->Phone2 }}}</td>
					<td>{{{ $contact->Phone2Ext }}}</td>
					<td>{{{ $contact->Phone2Type }}}</td>
					<td>{{{ $contact->Phone3 }}}</td>
					<td>{{{ $contact->Phone3Ext }}}</td>
					<td>{{{ $contact->Phone3Type }}}</td>
					<td>{{{ $contact->Phone4 }}}</td>
					<td>{{{ $contact->Phone4Ext }}}</td>
					<td>{{{ $contact->Phone4Type }}}</td>
					<td>{{{ $contact->Phone5 }}}</td>
					<td>{{{ $contact->Phone5Ext }}}</td>
					<td>{{{ $contact->Phone5Type }}}</td>
					<td>{{{ $contact->PostalCode }}}</td>
					<td>{{{ $contact->PostalCode2 }}}</td>
					<td>{{{ $contact->PostalCode3 }}}</td>
					<td>{{{ $contact->ReferralCode }}}</td>
					<td>{{{ $contact->SpouseName }}}</td>
					<td>{{{ $contact->State }}}</td>
					<td>{{{ $contact->State2 }}}</td>
					<td>{{{ $contact->State3 }}}</td>
					<td>{{{ $contact->StreetAddress1 }}}</td>
					<td>{{{ $contact->StreetAddress2 }}}</td>
					<td>{{{ $contact->Suffix }}}</td>
					<td>{{{ $contact->Title }}}</td>
					<td>{{{ $contact->Username }}}</td>
					<td>{{{ $contact->Validated }}}</td>
					<td>{{{ $contact->Website }}}</td>
					<td>{{{ $contact->ZipFour1 }}}</td>
					<td>{{{ $contact->ZipFour2 }}}</td>
					<td>{{{ $contact->ZipFour3 }}}</td>
					<td>{{{ $contact->_Gender }}}</td>
					<td>{{{ $contact->_IdentityCard0 }}}</td>
					<td>{{{ $contact->_Password0 }}}</td>
					<td>{{{ $contact->_LastLogin }}}</td>
					<td>{{{ $contact->_Race }}}</td>
					<td>{{{ $contact->_Religion }}}</td>
					<td>{{{ $contact->_FacebookType }}}</td>
					<td>{{{ $contact->_Facebook }}}</td>
					<td>{{{ $contact->_SkypeID }}}</td>
					<td>{{{ $contact->_YahooID }}}</td>
					<td>{{{ $contact->_Bank0 }}}</td>
					<td>{{{ $contact->_AccountHolder }}}</td>
					<td>{{{ $contact->_AccountNumber }}}</td>
					<td>{{{ $contact->_MSNID }}}</td>
					<td>{{{ $contact->_LinkedIn }}}</td>
					<td>{{{ $contact->_Google }}}</td>
					<td>{{{ $contact->_Twitter }}}</td>
					<td>{{{ $contact->_TrackingNo }}}</td>
					<td>{{{ $contact->_OrderID1 }}}</td>
					<td>{{{ $contact->_OrderID2 }}}</td>
					<td>{{{ $contact->_Company0 }}}</td>
                    <td>{{ link_to_route('contacts.edit', 'Edit', array($contact->Id), array('class' => 'btn btn-info')) }}</td>
                    <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('contacts.destroy', $contact->Id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no contacts
@endif

@stop
