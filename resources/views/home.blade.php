@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create/Add</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="panel-item">
                       <a href="/categories/create">
                       Add new category
                       </a>
                   </div>
                        <div class="panel-item">
                            <a href="/posts/create">
                                Add new Post
                            </a>
                        </div>

                </div>
                <div class="panel-body">
                    <a href="/profiles/{$user->name}">update my profile
                    </a>
                </div>


                <div class="panel-heading">View and Edit</div>
                <div class="panel-body">
                    <div class="panel-item">
                        @foreach($categories as $category)
                            <p>{{ $category->name }} - with coef. {{ $category->importance }}</p>

                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
