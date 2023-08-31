<x-layout>
    <x-slot:title>
        All Files
    </x-slot:title>
    <x-slot:heading>
        All Images
    </x-slot:heading>
    <table class="table table-dark table-hover table-striped">
        <tr>
            <th>S.N.</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach ($images as $image)
            <tr valign="middle">
                <td>1</td>
                <td>
                    <img src={{ '/uploads/' . $image->name }} class="img-fluid object-fit-cover "
                        style="height: 60px; width: 60px;" alt="">
                </td>
                <td>
                    <a href={{ route('files.show', $image->id) }} class="btn btn-sm btn-primary">View</a>
                    <a href="" class="btn btn-sm btn-warning">Edit</a>
                    <a href="" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $images->links() }}
</x-layout>
