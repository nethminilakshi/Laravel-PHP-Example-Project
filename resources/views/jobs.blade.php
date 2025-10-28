<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

  <div class="space-y-4">
    @foreach ($jobs as $job)
       
           <a href="/jobs/{{$job['id']}}" class= "text-gray-500 hover:underline block px-4 border border-black-300 rounded-lg">
            <div class= "font-bold text-blue-600">{{$job->employer->name}}</div>
        <strong>{{$job['title'] }}:</strong> Pays {{$job['salary']}} per year.
        </a> 
   
    @endforeach

    <div>
        {{ $jobs->links() }}
    </div>
  </div>

</x-layout>