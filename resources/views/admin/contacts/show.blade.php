@extends('layouts.admin')
@section('content')
<div class="main-card">
    <div class="header">
        {{ trans('global.show') }} Contacts
    </div>

    <div class="body">
        <div class="block pb-4">
            <a class="btn-md btn-gray" href="{{ route('admin.contacts.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
        <table class="striped bordered show-table">

            <tbody>
                {{-- @foreach ($kategori as $key => $kategori) --}}
                <tr>
                    <th>
                        ID
                    </th>
                    <td>
                        {{ $contact->id }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Name
                    </th>
                    <td>
                        {{ $contact->name }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Email
                    </th>
                    <td>
                        {{ $contact->email }}
                    </td>
                </tr>
                <tr>
                    <th>
                        Message
                    </th>
                    <td>
                        {!! $contact->message !!}
                    </td>
                </tr>

                {{-- @endforeach --}}
            </tbody>
        </table>
        <div class="block pt-4">
            <a class="btn-md btn-gray" href="{{ route('admin.contacts.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>
@endsection
