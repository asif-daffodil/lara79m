<x-layout>
    <x-slot:title>Single Student</x-slot:title>
    <x-slot:heading>
        {{ $student->name }}
    </x-slot:heading>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias, ad illo eum et quibusdam voluptatum,
        perspiciatis in architecto provident omnis numquam cumque distinctio qui sequi? Suscipit similique officiis quos
        necessitatibus.
    </p>
    <a href={{ URL::previous() }} class="btn btn-sm btn-primary">Back</a>
</x-layout>
