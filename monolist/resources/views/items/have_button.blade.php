@if (Auth::user()->is_having($item->code))
    {!! Form::open(['route' => 'item_user2.dont_have', 'method' => 'delete']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Have', ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => 'item_user2.have']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Have it', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endif