@extends('layout')
@section('content')

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Full Name
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
            @foreach ( $customers as $customer) 
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $customer->email }}
                </th>
                <td class="px-6 py-4">
                    {{ $customer->fullname }}
                </td>
                <td class="px-6 py-4">
                    {{ $customer->phone_number }}
                </td>
                <td>
                    {{ $customer->company}}
                </td>
                {{-- workaround --}}
                <form action="{{ route('form.edit', $customer->id)}}" method="POST">
                    @method('GET')
                    <td>
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button>
                    </td>
                </form>
                <form action="{{ route('form.edit.destroy', $customer->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <td>
                    <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                </td>
                </form>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection