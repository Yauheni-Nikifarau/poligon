<form action="/api/redis/decr-by" method="POST" class="mb-5" id="decrement-by-form" style="display: none">
    @csrf
    <h2>Decrement Form</h2>
    <div class="mb-3">
        <label for="set-form-key" class="form-label">Select key</label>
        <select id="set-form-key" class="form-select" name="key">
            @foreach( $redis_table as $redis_key => $redis_value )
                <option>{{$redis_key}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="expire-form-value" class="form-label">Decrement By Value</label>
        <input type="number" class="form-control" id="expire-form-value" name="value">
    </div>
    <button type="submit" class="btn btn-primary">Decrement</button>
</form>
