<x-layout>
    <x-slot:title>Student</x-slot:title>
    <x-slot:heading>Student List</x-slot:heading>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-dark table-striped">
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
                @foreach ($allStudent as $std)
                    <tr>
                        <td>{{ $allStudent->firstItem() + $loop->index }}</td>
                        <td>{{ $std->name }}</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $allStudent->links() }}
        </div>
    </div>
</x-layout>
