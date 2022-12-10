<h2>Redis Table</h2>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Key</th>
        <th>Value</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $redis_table as $redis_key => $redis_value )
        <tr>
            <td>{{$redis_key}}</td>
            <td>{{$redis_value}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
