{{ $name }}
<a href="{{ route('student.dashboard') }}">Dashboard</a>
@foreach($data as $key => $value)
    {{ $key }} : {!! $value."<br>" !!}
@endforeach
{{-- 
@for($i = 0; $i < count($data); $i++)
        {{ $data[$i] }}
@endfor --}}

{{-- 
@include('view')
@auth('admin')
    
@endauth --}}

