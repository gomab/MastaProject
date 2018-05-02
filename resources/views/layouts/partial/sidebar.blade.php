<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            BRAZZA HIP-HOP
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('admin/dashboard*') ? 'active' : '' }} ">
                <a class="nav-link" href="#">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/slider*') ? 'active' : '' }}">
                <a class="nav-link" href="#">
                    <i class="material-icons">slideshow</i>
                    <p>PUBLICITES</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('admin/category*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('category.index') }}">
                    <i class="material-icons">content_paste</i>
                    <p>CATEGORIES</p>
                </a>
            </li>

            <li class="nav-item {{ Request::is('admin/tag*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('tag.index') }}">
                    <i class="material-icons">turned_in_not</i>
                    <p>TAGS</p>
                </a>
            </li>

            <li class="nav-item {{ Request::is('admin/post*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('post.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>ARTICLES</p>
                </a>
            </li>

            <li class="nav-item {{ Request::is('admin/user*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class="material-icons">group</i>
                    <p>UTILISATEURS</p>
                </a>
            </li>

            <li class="nav-item {{ Request::is('admin/setting*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('settings') }}">
                    <i class="material-icons">settings</i>
                    <p>CONFIGURATION</p>
                </a>
            </li>


        </ul>
    </div>
</div>