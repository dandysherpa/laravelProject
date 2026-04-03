<x-Layout>
    <section class="py-16">
        <div class="container">
            <div class="pb-5 flex justify-between items-center ">
                <h1 class="text-3xl font-bold">Booking list</h1>
                <a class="bg-[#f06204] px-4 py-2 rounded-[16px] text-amber-100 " href="/booking/create">Add new +</a>

            </div>
            <div>
                <table class="w-full text-sm text-left">
                    <thead class="bg-gray-50 text-xs text-gray-500 uppercase tracking-wider">
                        <tr>
                            <th class="px-4 py-3 font-medium">SN</th>
                            <th class="px-4 py-3 font-medium">Name</th>
                            <th class="px-4 py-3 font-medium">Phone</th>
                            <th class="px-4 py-3 font-medium">Subject</th>
                            <th class="px-4 py-3 font-medium">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach ($bookings as $i => $booking)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-gray-400">{{ ++$i }}</td>
                                <td class="px-4 py-3 font-medium text-gray-800">{{ $booking->name }}</td>
                                <td class="px-4 py-3 text-gray-500">{{ $booking->phone }}</td>
                                <td class="px-4 py-3 text-gray-500">{{ $booking->subject }}</td>
                                <td class="px-4 py-3">
                                    <div class="flex gap-2">
                                        <a href="#"
                                            class="px-3 py-1 text-xs rounded-md bg-blue-50 text-blue-600 border border-blue-200 hover:bg-blue-100">Edit</a>
                                        <button
                                            class="px-3 py-1 text-xs rounded-md bg-red-50 text-red-600 border border-red-200 hover:bg-red-100">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>



    </section>
</x-Layout>
