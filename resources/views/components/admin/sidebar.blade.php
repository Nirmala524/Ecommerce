<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar"
            src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name">John Doe</p>
            <p class="app-sidebar__user-designation">Frontend Developer</p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item active" href="{{ url('admin/index') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span
                    class="app-menu__label">{{ __('dashboard.title') }}</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/slider') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Slidebar</span></a></li>

        <li><a class="app-menu__item active" href="{{ url('admin/skill') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Skills</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/product') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Product</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/category') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">category</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/tag') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Tag</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/team') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Team</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/testimonial') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Client</span></a></li>

        <li><a class="app-menu__item active" href="{{ url('admin/about') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">About</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/ourteam') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Ourteam</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/ourclient') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">ourclient</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/follow') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Follow</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/multiimage') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">MultiImage</span></a></li>
        <li><a class="app-menu__item active" href="{{ url('admin/customlogin') }}"><i
                    class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">CustomLogin</span></a></li>
    </ul>
</aside>
