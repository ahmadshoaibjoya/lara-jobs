<x-layout>
<x-slot:heading>Job List</x-slot:heading>
    <ul role="list" class="divide-y divide-gray-100">
    @foreach($jobs as $job)
        <a href="job/{{ $job['id'] }}" class="text-blue-500 hover:underline">
        <li class="flex justify-between gap-x-6 py-5">{{ $job["title"] }}: {{ $job["salary"] }}</li>
        </a>
    @endforeach
    </ul>
</x-layout>