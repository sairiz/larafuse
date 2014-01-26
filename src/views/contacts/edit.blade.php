@extends('layouts.scaffold')

@section('main')

<h1>Edit Contact</h1>
{{ Form::model($contact, array('method' => 'PATCH', 'route' => array('contacts.update', $contact->Id))) }}
	<ul>
        <li>
            {{ Form::label('Id', 'Id:') }}
            {{ Form::input('number', 'Id') }}
        </li>

        <li>
            {{ Form::label('Address1Type', 'Address1Type:') }}
            {{ Form::text('Address1Type') }}
        </li>

        <li>
            {{ Form::label('Address2Street1', 'Address2Street1:') }}
            {{ Form::text('Address2Street1') }}
        </li>

        <li>
            {{ Form::label('Address2Street2', 'Address2Street2:') }}
            {{ Form::text('Address2Street2') }}
        </li>

        <li>
            {{ Form::label('Address2Type', 'Address2Type:') }}
            {{ Form::text('Address2Type') }}
        </li>

        <li>
            {{ Form::label('Address3Street1', 'Address3Street1:') }}
            {{ Form::text('Address3Street1') }}
        </li>

        <li>
            {{ Form::label('Address3Street2', 'Address3Street2:') }}
            {{ Form::text('Address3Street2') }}
        </li>

        <li>
            {{ Form::label('Address3Type', 'Address3Type:') }}
            {{ Form::text('Address3Type') }}
        </li>

        <li>
            {{ Form::label('Anniversary', 'Anniversary:') }}
            {{ Form::text('Anniversary') }}
        </li>

        <li>
            {{ Form::label('AssistantName', 'AssistantName:') }}
            {{ Form::text('AssistantName') }}
        </li>

        <li>
            {{ Form::label('AssistantPhone', 'AssistantPhone:') }}
            {{ Form::text('AssistantPhone') }}
        </li>

        <li>
            {{ Form::label('BillingInformation', 'BillingInformation:') }}
            {{ Form::text('BillingInformation') }}
        </li>

        <li>
            {{ Form::label('Birthday', 'Birthday:') }}
            {{ Form::text('Birthday') }}
        </li>

        <li>
            {{ Form::label('City', 'City:') }}
            {{ Form::text('City') }}
        </li>

        <li>
            {{ Form::label('City2', 'City2:') }}
            {{ Form::text('City2') }}
        </li>

        <li>
            {{ Form::label('City3', 'City3:') }}
            {{ Form::text('City3') }}
        </li>

        <li>
            {{ Form::label('Company', 'Company:') }}
            {{ Form::text('Company') }}
        </li>

        <li>
            {{ Form::label('AccountId', 'AccountId:') }}
            {{ Form::input('number', 'AccountId') }}
        </li>

        <li>
            {{ Form::label('CompanyID', 'CompanyID:') }}
            {{ Form::input('number', 'CompanyID') }}
        </li>

        <li>
            {{ Form::label('ContactNotes', 'ContactNotes:') }}
            {{ Form::text('ContactNotes') }}
        </li>

        <li>
            {{ Form::label('ContactType', 'ContactType:') }}
            {{ Form::text('ContactType') }}
        </li>

        <li>
            {{ Form::label('Country', 'Country:') }}
            {{ Form::text('Country') }}
        </li>

        <li>
            {{ Form::label('Country2', 'Country2:') }}
            {{ Form::text('Country2') }}
        </li>

        <li>
            {{ Form::label('Country3', 'Country3:') }}
            {{ Form::text('Country3') }}
        </li>

        <li>
            {{ Form::label('CreatedBy', 'CreatedBy:') }}
            {{ Form::input('number', 'CreatedBy') }}
        </li>

        <li>
            {{ Form::label('DateCreated', 'DateCreated:') }}
            {{ Form::text('DateCreated') }}
        </li>

        <li>
            {{ Form::label('Email', 'Email:') }}
            {{ Form::text('Email') }}
        </li>

        <li>
            {{ Form::label('EmailAddress2', 'EmailAddress2:') }}
            {{ Form::text('EmailAddress2') }}
        </li>

        <li>
            {{ Form::label('EmailAddress3', 'EmailAddress3:') }}
            {{ Form::text('EmailAddress3') }}
        </li>

        <li>
            {{ Form::label('Fax1', 'Fax1:') }}
            {{ Form::text('Fax1') }}
        </li>

        <li>
            {{ Form::label('Fax1Type', 'Fax1Type:') }}
            {{ Form::text('Fax1Type') }}
        </li>

        <li>
            {{ Form::label('Fax2', 'Fax2:') }}
            {{ Form::text('Fax2') }}
        </li>

        <li>
            {{ Form::label('Fax2Type', 'Fax2Type:') }}
            {{ Form::text('Fax2Type') }}
        </li>

        <li>
            {{ Form::label('FirstName', 'FirstName:') }}
            {{ Form::text('FirstName') }}
        </li>

        <li>
            {{ Form::label('Groups', 'Groups:') }}
            {{ Form::text('Groups') }}
        </li>

        <li>
            {{ Form::label('JobTitle', 'JobTitle:') }}
            {{ Form::text('JobTitle') }}
        </li>

        <li>
            {{ Form::label('LastName', 'LastName:') }}
            {{ Form::text('LastName') }}
        </li>

        <li>
            {{ Form::label('LastUpdated', 'LastUpdated:') }}
            {{ Form::text('LastUpdated') }}
        </li>

        <li>
            {{ Form::label('LastUpdatedBy', 'LastUpdatedBy:') }}
            {{ Form::input('number', 'LastUpdatedBy') }}
        </li>

        <li>
            {{ Form::label('Leadsource', 'Leadsource:') }}
            {{ Form::text('Leadsource') }}
        </li>

        <li>
            {{ Form::label('LeadSourceId', 'LeadSourceId:') }}
            {{ Form::input('number', 'LeadSourceId') }}
        </li>

        <li>
            {{ Form::label('MiddleName', 'MiddleName:') }}
            {{ Form::text('MiddleName') }}
        </li>

        <li>
            {{ Form::label('Nickname', 'Nickname:') }}
            {{ Form::text('Nickname') }}
        </li>

        <li>
            {{ Form::label('OwnerID', 'OwnerID:') }}
            {{ Form::input('number', 'OwnerID') }}
        </li>

        <li>
            {{ Form::label('Password', 'Password:') }}
            {{ Form::text('Password') }}
        </li>

        <li>
            {{ Form::label('Phone1', 'Phone1:') }}
            {{ Form::text('Phone1') }}
        </li>

        <li>
            {{ Form::label('Phone1Ext', 'Phone1Ext:') }}
            {{ Form::text('Phone1Ext') }}
        </li>

        <li>
            {{ Form::label('Phone1Type', 'Phone1Type:') }}
            {{ Form::text('Phone1Type') }}
        </li>

        <li>
            {{ Form::label('Phone2', 'Phone2:') }}
            {{ Form::text('Phone2') }}
        </li>

        <li>
            {{ Form::label('Phone2Ext', 'Phone2Ext:') }}
            {{ Form::text('Phone2Ext') }}
        </li>

        <li>
            {{ Form::label('Phone2Type', 'Phone2Type:') }}
            {{ Form::text('Phone2Type') }}
        </li>

        <li>
            {{ Form::label('Phone3', 'Phone3:') }}
            {{ Form::text('Phone3') }}
        </li>

        <li>
            {{ Form::label('Phone3Ext', 'Phone3Ext:') }}
            {{ Form::text('Phone3Ext') }}
        </li>

        <li>
            {{ Form::label('Phone3Type', 'Phone3Type:') }}
            {{ Form::text('Phone3Type') }}
        </li>

        <li>
            {{ Form::label('Phone4', 'Phone4:') }}
            {{ Form::text('Phone4') }}
        </li>

        <li>
            {{ Form::label('Phone4Ext', 'Phone4Ext:') }}
            {{ Form::text('Phone4Ext') }}
        </li>

        <li>
            {{ Form::label('Phone4Type', 'Phone4Type:') }}
            {{ Form::text('Phone4Type') }}
        </li>

        <li>
            {{ Form::label('Phone5', 'Phone5:') }}
            {{ Form::text('Phone5') }}
        </li>

        <li>
            {{ Form::label('Phone5Ext', 'Phone5Ext:') }}
            {{ Form::text('Phone5Ext') }}
        </li>

        <li>
            {{ Form::label('Phone5Type', 'Phone5Type:') }}
            {{ Form::text('Phone5Type') }}
        </li>

        <li>
            {{ Form::label('PostalCode', 'PostalCode:') }}
            {{ Form::text('PostalCode') }}
        </li>

        <li>
            {{ Form::label('PostalCode2', 'PostalCode2:') }}
            {{ Form::text('PostalCode2') }}
        </li>

        <li>
            {{ Form::label('PostalCode3', 'PostalCode3:') }}
            {{ Form::text('PostalCode3') }}
        </li>

        <li>
            {{ Form::label('ReferralCode', 'ReferralCode:') }}
            {{ Form::text('ReferralCode') }}
        </li>

        <li>
            {{ Form::label('SpouseName', 'SpouseName:') }}
            {{ Form::text('SpouseName') }}
        </li>

        <li>
            {{ Form::label('State', 'State:') }}
            {{ Form::text('State') }}
        </li>

        <li>
            {{ Form::label('State2', 'State2:') }}
            {{ Form::text('State2') }}
        </li>

        <li>
            {{ Form::label('State3', 'State3:') }}
            {{ Form::text('State3') }}
        </li>

        <li>
            {{ Form::label('StreetAddress1', 'StreetAddress1:') }}
            {{ Form::text('StreetAddress1') }}
        </li>

        <li>
            {{ Form::label('StreetAddress2', 'StreetAddress2:') }}
            {{ Form::text('StreetAddress2') }}
        </li>

        <li>
            {{ Form::label('Suffix', 'Suffix:') }}
            {{ Form::text('Suffix') }}
        </li>

        <li>
            {{ Form::label('Title', 'Title:') }}
            {{ Form::text('Title') }}
        </li>

        <li>
            {{ Form::label('Username', 'Username:') }}
            {{ Form::text('Username') }}
        </li>

        <li>
            {{ Form::label('Validated', 'Validated:') }}
            {{ Form::text('Validated') }}
        </li>

        <li>
            {{ Form::label('Website', 'Website:') }}
            {{ Form::text('Website') }}
        </li>

        <li>
            {{ Form::label('ZipFour1', 'ZipFour1:') }}
            {{ Form::text('ZipFour1') }}
        </li>

        <li>
            {{ Form::label('ZipFour2', 'ZipFour2:') }}
            {{ Form::text('ZipFour2') }}
        </li>

        <li>
            {{ Form::label('ZipFour3', 'ZipFour3:') }}
            {{ Form::text('ZipFour3') }}
        </li>

        <li>
            {{ Form::label('_Gender', '_Gender:') }}
            {{ Form::text('_Gender') }}
        </li>

        <li>
            {{ Form::label('_IdentityCard0', '_IdentityCard0:') }}
            {{ Form::text('_IdentityCard0') }}
        </li>

        <li>
            {{ Form::label('_Password0', '_Password0:') }}
            {{ Form::text('_Password0') }}
        </li>

        <li>
            {{ Form::label('_LastLogin', '_LastLogin:') }}
            {{ Form::text('_LastLogin') }}
        </li>

        <li>
            {{ Form::label('_Race', '_Race:') }}
            {{ Form::text('_Race') }}
        </li>

        <li>
            {{ Form::label('_Religion', '_Religion:') }}
            {{ Form::text('_Religion') }}
        </li>

        <li>
            {{ Form::label('_FacebookType', '_FacebookType:') }}
            {{ Form::text('_FacebookType') }}
        </li>

        <li>
            {{ Form::label('_Facebook', '_Facebook:') }}
            {{ Form::text('_Facebook') }}
        </li>

        <li>
            {{ Form::label('_SkypeID', '_SkypeID:') }}
            {{ Form::text('_SkypeID') }}
        </li>

        <li>
            {{ Form::label('_YahooID', '_YahooID:') }}
            {{ Form::text('_YahooID') }}
        </li>

        <li>
            {{ Form::label('_Bank0', '_Bank0:') }}
            {{ Form::text('_Bank0') }}
        </li>

        <li>
            {{ Form::label('_AccountHolder', '_AccountHolder:') }}
            {{ Form::text('_AccountHolder') }}
        </li>

        <li>
            {{ Form::label('_AccountNumber', '_AccountNumber:') }}
            {{ Form::text('_AccountNumber') }}
        </li>

        <li>
            {{ Form::label('_MSNID', '_MSNID:') }}
            {{ Form::text('_MSNID') }}
        </li>

        <li>
            {{ Form::label('_LinkedIn', '_LinkedIn:') }}
            {{ Form::text('_LinkedIn') }}
        </li>

        <li>
            {{ Form::label('_Google', '_Google:') }}
            {{ Form::text('_Google') }}
        </li>

        <li>
            {{ Form::label('_Twitter', '_Twitter:') }}
            {{ Form::text('_Twitter') }}
        </li>

        <li>
            {{ Form::label('_TrackingNo', '_TrackingNo:') }}
            {{ Form::text('_TrackingNo') }}
        </li>

        <li>
            {{ Form::label('_OrderID1', '_OrderID1:') }}
            {{ Form::text('_OrderID1') }}
        </li>

        <li>
            {{ Form::label('_OrderID2', '_OrderID2:') }}
            {{ Form::text('_OrderID2') }}
        </li>

        <li>
            {{ Form::label('_Company0', '_Company0:') }}
            {{ Form::text('_Company0') }}
        </li>

		<li>
			{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
			{{ link_to_route('contacts.show', 'Cancel', $contact->Id, array('class' => 'btn')) }}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
