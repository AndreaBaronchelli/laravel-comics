{{-- MAIN HEADER --}}

<header class="main-header">
    <div class="container">
        <a href="{{ route('home') }}"><img src="{{ asset('images/dc-logo.png') }}" alt=""></a>
        <nav>
            <ul>
                <li><a href="{{ route('home')}}" class="
                    @if (url()->full() == 'http://127.0.0.1:8000')
                        {{ 'active' }}
                    @endif">Comics</a></li>
                <li><a href="{{ route('news')}}" class="
                    @if (url()->full() == 'http://127.0.0.1:8000/news')
                        {{ 'active' }}
                    @endif">News</a></li>
            </ul>
        </nav>
    </div>
</header>