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
                            <a href={{ route('student.show', $std->id) }} class="btn btn-primary btn-sm">View</a>
                            <a href={{ route('student.edit', $std->id) }} class="btn btn-warning btn-sm">Edit</a>
                            <form action={{ route('student.destroy', $std->id) }} method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
            @if (session()->get('smsg'))
                <div class="alert alert-danger alert-dismissible">
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                    {{ session('smsg') }}
                </div>
            @endif
            {{ $allStudent->links() }}
        </div>
    </div>
</x-layout>
