<x-layout>
    <x-slot:title>Add Student</x-slot:title>
    <x-slot:heading>Add Student</x-slot:heading>
    <div class="row">
        <div class="col-md-6">
            <form action={{ route('student.store') }} method="post" class="mb-3">
                @csrf
                <div class="mb-3">
                    <input type="text" placeholder="Student Name" class="form-control" name="sname"
                        value={{ old('sname') }}>
                </div>
                <input type="submit" value="Add Student" class="btn btn-primary">
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
        <div class="col-md-6">
            <img src="https://source.unsplash.com/random/600x300" class="img-fluid" alt="">
        </div>
    </div>
</x-layout>
