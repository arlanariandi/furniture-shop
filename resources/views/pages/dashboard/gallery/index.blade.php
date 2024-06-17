<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product &raquo; {{ $product->name }} &raquo; Gallery
        </h2>
    </x-slot>

    <x-slot name='script'>
        <script>
            // AJAX DataTable
            const dataTable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [
                    {
                        data: null,
                        name: 'number',
                        orderable: false,
                        searchable: false,
                        width: '5%',
                        render: function (data, type, row, meta) {
                            return meta.row + 1;
                        }
                    },
                    {data: 'url', name: 'url'},
                    {data: 'is_featured', name: 'is_featured'},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false,
                        width: '20%'
                    }
                ]
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{route('dashboard.product.gallery.create', $product->id)}}"
                   class="px-4 py-2.5 font-bold text-white bg-teal-500 rounded shadow-lg hover:bg-teal-800">+
                    Upload Photos</a>
            </div>

            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <table id="crudTable" class="w-full">
                        <thead class="text-left">
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Featured</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
