{{ $name }}
{{ $contact }}

@if($name == "ali")
    {{ "ali is here" }}
@else
{{ "ali is  not here" }}
    
@endif

<a href="{{ route('student.welcome') }}">Welcome</a>