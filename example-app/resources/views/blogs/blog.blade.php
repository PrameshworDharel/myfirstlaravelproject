@extends('dashboard.index')

@section('content')
<div class="p-10">

    <div class="flex justify-end mb-4">
        <a href="/createblogs" class="bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add Blog
        </a>
    </div>

    <div class="bg-white shadow-lg rounded-lg p-6">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        S.N
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Image
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Title
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Description
                    </th>
                    <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                    </td>
                    <td class="px-5 py-5 bg-white text-sm">
                        <img src=" " alt="" class="w-20 h-20 object-cover">
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">

                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <p class="text-gray-900 whitespace-no-wrap">

                        </p>
                    </td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded mr-2">
                            <a href="/editblogs">Edit</a> </button>
                        <button class="bg-red-500 text-white font-bold py-2 px-4 rounded">
                            <!-- <a href="/deleteblogs">Delete</a> -->
                            Delete
                        </button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
@endsection