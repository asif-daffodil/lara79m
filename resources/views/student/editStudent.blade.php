<x-layout>
    <x-slot:title>Edit Student</x-slot:title>
    <x-slot:heading></x-slot:heading>
    <div class="row">
        <div class="col-md-6">
            <h2>Update Student</h2>
            <form action={{ route('student.update', $student->id) }} method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <input type="text" placeholder="Student Name" name="sname" value="{{ $student->name }}"
                        class="form-control ">
                </div>
                <button type="submit" class="btn btn-primary">Update Info</button>
            </form>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                        {{ $error }}
                        <button class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endforeach
            @endif
            @if (session()->get('smsg'))
                <div class="alert alert-success alert-dismissible">
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                    {{ session('smsg') }}
                </div>
            @endif
        </div>
    </div>
</x-layout>
