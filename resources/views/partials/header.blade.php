{{-- MAIN HEADER --}}

<header class="main-header">
    <div class="container">
        <a href="{{ route('home') }}"><img src="{{ asset('images/dc-logo.png') }}" alt=""></a>
        <nav>
            <ul>
                <li><a href="{{ route('home')}}" class="active">Comics</a></li>
                <li><a href="{{ route('news')}}">News</a></li>
            </ul>
        </nav>
    </div>
</header>