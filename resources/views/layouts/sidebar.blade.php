<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">STORE MANAGMENT</li>
            <br/>


            <li class="treeview {{ (Route::currentRouteName() == 'property_view')||(Route::currentRouteName() == 'property_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                    <span>{{__('Property')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'property_view')? 'active': '' }}"><a href="{{route("property_view")}}">
                            {{__('All Property')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'property_add')? 'active': '' }}"><a href="{{route("property_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>

            <li class="treeview {{ (Route::currentRouteName() == 'bedroom_view')||(Route::currentRouteName() == 'bedroom_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-certificate" aria-hidden="true"></i>
                    <span>{{__('Bedroom')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'bedroom_view')? 'active': '' }}"><a href="{{route("bedroom_view")}}">
                            {{__('All Bedroom')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'bedroom_add')? 'active': '' }}"><a href="{{route("bedroom_add")}}">
                            {{__('Create new')}}</a></li>
                </ul>
            </li>

            <li class="treeview {{ (Route::currentRouteName() == 'bathroom_view')||(Route::currentRouteName() == 'bathroom_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-certificate" aria-hidden="true"></i>
                    <span>{{__('Bathroom')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'bathroom_view')? 'active': '' }}"><a href="{{route("bathroom_view")}}">
                            {{__('All Bathroom')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'bathroom_add')? 'active': '' }}"><a href="{{route("bathroom_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>

            <li class="treeview {{ (Route::currentRouteName() == 'price_view')||(Route::currentRouteName() == 'price_add')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-certificate" aria-hidden="true"></i>
                    <span>{{__('Price Range')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'price_view')? 'active': '' }}"><a href="{{route("price_view")}}">
                            {{__('All Price Range')}}</a></li>
                    <li class="{{ (Route::currentRouteName() == 'price_add')? 'active': '' }}"><a href="{{route("price_add")}}">
                            {{__('Add new')}}</a></li>
                </ul>
            </li>
            <li class="treeview {{ (Route::currentRouteName() == 'data_view')? 'active': '' }} ">
                <a href="#">
                    <i class="fa fa-certificate" aria-hidden="true"></i>
                    <span>{{__('Data')}}</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Route::currentRouteName() == 'data_view')? 'active': '' }}"><a href="{{route("data_view")}}">
                            {{__('All Data')}}</a></li>

                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
