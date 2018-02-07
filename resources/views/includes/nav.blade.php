<header data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: #171717; border-right:rgba(255,255,255,0.7);">
    <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
       <div class="container-fluid">
           <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </button>
           </div>
           <div class="collapse navbar-collapse" id="myNavbar">
               <div class="banner">
                   <div class="col-lg-12">
                       @include('includes.share')
                   </div>
               </div>
               @include('includes.logo')
               <div class="container navbar">
                   <ul class="nav navbar-nav">
                        @foreach($categories as $category)

                         <li class="{{ Request::is($category->path() ? 'active' : '') }}">
                             <a href="{!!   $category->path() !!}"> {{ $category->name }}</a>
                         </li>
                         @endforeach
                   </ul>
               </div>
           </div>
       </div>
    </nav>
</header>
