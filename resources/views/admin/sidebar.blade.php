
    <div class="sidebar">
        <h3>Admin Panel</h3>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{'/show_posts'}}">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/create_post')}}">Add Posts</a>
            </li>
            <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
            </li>
        </ul>
    </div>