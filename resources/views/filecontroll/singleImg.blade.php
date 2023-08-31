<x-layout>
    <x-slot:title>
        Add File
    </x-slot:title>
    <x-slot:heading>
    </x-slot:heading>
    <div class="row">
        <div class="col-md-6 border rounded shadow p-5 my-3">
            <img src={{ '/uploads/' . $fileCrud->name }} alt="" class="img-fluid">
            <a href={{ URL::previous() }} class="btn btn-primary mt-3">Back</a>
        </div>
    </div>
</x-layout>
