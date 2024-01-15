@extends('Customers.layout')
@section('content')    

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    First Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Secnond Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone Number
                </th>
                <th scope="col" class="px-6 py-3">
                    Company
                </th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php $editButtonRow = -1; $editMode = false; @endphp 
            @foreach ( $data as $key => $row) 
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $row->email }}
                </th>
                <td class="px-6 py-4">
                    {{ $row->firstname }}
                </td>
                <td class="px-6 py-4">
                    {{ $row->lastname }}
                </td>
                <td class="px-6 py-4">
                    {{ $row->phone_number }}
                </td>
                <td>
                    {{ $row-> company}}
                </td>
                @if ( $editMode == true && $editButtonRow == $key )
                    <td><button type="submit" class="btn-primary" onclick="{{ $editButtonRow = -1 }}{{ $editMode = false }}" >Submit</button></td>
                @else
                {{-- <form action="/form/edit" method="POST"> --}}
                    <td><button type="submit" class="btn-primary" onclick="{{ $editButtonRow = $key}}{{ $editMode = true }}{{ $key }}" >Edit</button></td>
                {{-- </form> --}}
                @endif
                <form action="/form/edit" method="POST">
                    <td><button type="submit" class="btn-danger">Delete</button></td>
                    @csrf
                    @method('DELETE')
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection