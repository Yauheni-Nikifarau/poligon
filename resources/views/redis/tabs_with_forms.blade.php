<ul class="nav nav-tabs mt-2" id="forms-tabs">
    <li class="nav-item">
        <button class="nav-link active" form="set">Set</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" form="rename">Rename</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" form="delete">Delete</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" form="increment">Increment</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" form="decrement">Decrement</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" form="increment-by">Increment By</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" form="decrement-by">Decrement By</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" form="expire">Expire</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" form="push">Push</button>
    </li>
    <li class="nav-item">
        <button class="nav-link" form="pop">Pop</button>
    </li>
</ul>
@include('redis.forms.setForm')
@include('redis.forms.renameForm')
@include('redis.forms.deleteForm')
@include('redis.forms.incrementForm')
@include('redis.forms.decrementForm')
@include('redis.forms.incrementByForm')
@include('redis.forms.decrementByForm')
@include('redis.forms.expireForm')
@include('redis.forms.pushForm')
@include('redis.forms.popForm')
