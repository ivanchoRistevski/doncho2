<form action="{{ route('homePage') }}" method="get" class="form-inline">

    <div class="form-group">

        <input type="text" class="form-control" name="s" placeholder="Search..." value="{{ isset($s) ? $s : '' }}">

    </div>

    <div class="form-group">

        <button class="btn btn-info" type="submit">Search</button>

    </div>
</form>