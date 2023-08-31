<x-layout>
    <x-slot:title>
        Add File
    </x-slot:title>
    <x-slot:heading>
    </x-slot:heading>
    <div class="row">
        <div class="col-md-6 border rounded shadow p-5 my-3">
            <h3 class="">Add New Image</h3>
            <form action={{ route('files.store') }} method="POST" enctype="multipart/form-data" class="mb-3">
                @csrf
                <div class="mb-3">
                    <input type="file" name="imgfile" class="form-control my-6">
                </div>
                <button type="submit" class="btn btn-primary">Add Image</button>
            </form>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                        {{ $error }}
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endforeach
            @endif
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</x-layout>
