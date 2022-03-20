<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ env('APP_URL') }}" class="brand-link">
        <img src="{{asset('admin-panel/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin') }}" class="nav-link {{findActive(['admin.dashboard', 'admin'])}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if(checkPermissions('organization'))
                <li class="nav-item">
                    <a href="{{ route('admin.organization') }}" class="nav-link {{findActive('admin.organization')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Organization</p>
                    </a>
                </li>
                @endif
                @if(checkPermissions(['category_create', 'category_read']))
                <li class="nav-item {{menuOpen('category.*')}}">
                    <a href="#" class="nav-link {{findActive('category.*')}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Categories<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('category.index')}}" class="nav-link {{findActive('category.index')}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('category.create')}}" class="nav-link {{findActive('category.create')}}">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(checkPermissions(['author_create', 'author_read']))
                <li class="nav-item {{menuOpen('author.*')}}">
                    <a href="#" class="nav-link {{findActive('author.*')}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Authors<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('author.index')}}" class="nav-link {{findActive('author.index')}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('author.create')}}" class="nav-link {{findActive('author.create')}}">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(checkPermissions(['author_create', 'author_read']))
                <li class="nav-item {{menuOpen('post.*')}}">
                    <a href="#" class="nav-link {{findActive('post.*')}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Posts<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('post.index')}}" class="nav-link {{findActive('post.index')}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('post.create')}}" class="nav-link {{findActive('post.create')}}">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(checkPermissions(['book_create', 'book_read']))
                <li class="nav-item {{menuOpen('book.*')}}">
                    <a href="#" class="nav-link {{findActive('book.*')}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Books<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('book.index')}}" class="nav-link {{findActive('book.index')}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('book.create')}}" class="nav-link {{findActive('book.create')}}">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(checkPermissions(['tag_create', 'tag_read']))
                <li class="nav-item {{menuOpen('tag.*')}}">
                    <a href="#" class="nav-link {{findActive('tag.*')}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Tag<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('tag.index')}}" class="nav-link {{findActive('tag.index')}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('tag.create')}}" class="nav-link {{findActive('tag.create')}}">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(checkPermissions(['comment_create', 'comment_read']))
                <li class="nav-item {{menuOpen('comment.*')}}">
                    <a href="#" class="nav-link {{findActive('comment.*')}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Comments<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('comment.index')}}" class="nav-link {{findActive('comment.index')}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('comment.create')}}" class="nav-link {{findActive('comment.create')}}">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(checkPermissions(['role_create', 'role_read']))
                <li class="nav-item {{menuOpen('role.*')}}">
                    <a href="#" class="nav-link {{findActive('role.*')}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Role<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('role.index')}}" class="nav-link {{findActive('role.index')}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('role.create')}}" class="nav-link {{findActive('role.create')}}">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(checkPermissions(['user_create', 'user_read']))
                <li class="nav-item {{menuOpen('user.*')}}">
                    <a href="#" class="nav-link {{findActive('user.*')}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>User<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('user.index')}}" class="nav-link {{findActive('user.index')}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user.create')}}" class="nav-link {{findActive('user.create')}}">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(checkPermissions(['menu_create', 'menu_read']))
                <li class="nav-item {{menuOpen('menu.*')}}">
                    <a href="#" class="nav-link {{findActive('menu.*')}}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Menu<i class="fas fa-angle-left right"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('menu.index')}}" class="nav-link {{findActive('menu.index')}}">
                                <i class="far fa-circle nav-icon"></i><p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('menu.create')}}" class="nav-link {{findActive('menu.create')}}">
                                <i class="far fa-circle nav-icon"></i><p>Create</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                @if(checkPermissions('about'))
                <li class="nav-item">
                    <a href="{{ route('admin.about') }}" class="nav-link {{findActive('admin.about')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>About</p>
                    </a>
                </li>
                @endif
                @if(checkPermissions('contact'))
                <li class="nav-item">
                    <a href="{{ route('admin.contact') }}" class="nav-link {{findActive('admin.contact')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Contact</p>
                    </a>
                </li>
                @endif
                @if(checkPermissions('footer'))
                <li class="nav-item">
                    <a href="{{ route('admin.footer') }}" class="nav-link {{findActive('admin.footer')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Footer</p>
                    </a>
                </li>
                @endif
                @if(checkPermissions('donation'))
                <li class="nav-item">
                    <a href="{{ route('admin.donation') }}" class="nav-link {{findActive('admin.donation')}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Donation</p>
                    </a>
                </li>
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
