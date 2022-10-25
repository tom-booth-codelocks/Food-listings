<h1> hi there <h2>
@foreach($data as $testvars)
<h2>
    {{$testvars["first_Var"]}}
</h2>
<p>
    {{$testvars["second_var"]}}
</p>
@endforeach