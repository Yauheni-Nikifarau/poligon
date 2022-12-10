<form action="/api/redis/incr-by" method="POST" class="mb-5" id="increment-by-form" style="display: none">
    @csrf
    <h2>Increment Form</h2>
    <div class="mb-3">
        <label for="set-form-key" class="form-label">Select key</label>
        <select id="set-form-key" class="form-select" name="key">
            @foreach( $redis_table as $redis_key => $redis_value )
                <option>{{$redis_key}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="expire-form-value" class="form-label">Increment By Value</label>
        <input type="number" class="form-control" id="expire-form-value" name="value">
    </div>
    <button type="submit" class="btn btn-primary">Increment</button>
</form>
