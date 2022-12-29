<form action="/api/redis/push" method="POST" class="mb-5" id="push-form" style="display: none">
    @csrf
    <h2>Push Form</h2>
    <div class="mb-3">
        <label for="push-form-key" class="form-label">Select key</label>
        <input type="text" class="form-control" id="push-form-key" name="key">
    </div>
    <div class="mb-3">
        <label for="push-form-value" class="form-label">Push Value</label>
        <input type="text" class="form-control" id="push-form-value" name="value">
    </div>
    <button type="submit" class="btn btn-primary">Push</button>
</form>
