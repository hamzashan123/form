@php 
    $missing = 'Field is missing';
    $incorrect = 'Incorrect field value';
@endphp


<h3 style="font-size: 20px;
    font-weight: normal;">Hello Dear, We recommended you to please correct the mentioned fields below.</h3>


@if(!empty($fieldsname))

    @foreach( $fieldsname as $index => $data  )
        
        <p><strong style="font-size: 17px; text-decoration: underline;">  {{$data}} </strong>:  @if(empty($fieldsvalue[$index])) <span style="font-size: 17px;"> "N/A" </span> @else  <span style="font-size: 17px;"> {{$fieldsvalue[$index]}}  </span> @endif  </p>
        @if(empty($fieldsvalue[$index]))
        <p>{{$fieldscomments[$index]}}</p>
        @else
            <p>{{$fieldscomments[$index]}}</p>
        @endif
    @endforeach
    
@endif


<h4 style="font-size: 20px;
    font-weight: normal;">Once the form updated please send us an updated email.</h4>
<h3 style="font-size: 20px;
    font-weight: normal;">Thanks </h3>