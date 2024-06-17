<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Upload Photos Product Gallery &raquo; {{ $product->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div>
                {{-- Error Handling --}}
                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-rose-500 text-white font-bold rounded-t px-4 py-2">
                            There's something wrong!
                        </div>
                        <div class="border border-t-0 border-rose-400 rounded-b bg-rose-100 px-4 py-3 text-rose-700">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif
            </div>

            <form action="{{ route('dashboard.product.gallery.store', $product->id) }}" class="w-full" method="post"
                  enctype="multipart/form-data">
                @csrf

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="files">Files
                            <span class="text-red-500">*</span></label>
                        <input name="files[]" id="files" type="file" multiple accept="image/*" required
                               class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    </div>
                </div>

                <div class="flex flex-wrap -mx-3 mb-6">
                    <div class="w-full px-3">
                        <button type="submit"
                                class="bg-teal-500 hover:bg-teal-800 text-white font-bold py-2 px-10 rounded-md shadow-lg">
                            Save
                        </button>

                        <a href="{{ route('dashboard.product.gallery.index', $product->id) }}"
                           class="bg-rose-500 hover:bg-rose-800 text-white font-bold py-2.5 px-10 ml-3 rounded-md shadow-lg">
                            Cancel
                        </a>
                    </div>
                </div>
            </form>

        </div>
    </div>

</x-app-layout>
