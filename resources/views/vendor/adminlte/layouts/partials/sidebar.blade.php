<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menú Principal</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('Home/index') }}"><span>Inicio</span></a></li>

            @if(Session::has('funciones'))
                @foreach(Session::get('funciones') as $funcion)
                    @if(\App\Perfiles::find(Session::get('perfil'))->subfunciones($funcion->id_funcion)->get())
                        <li class="treeview">
                            <a href="javascript:void(0);"><span>{{ $funcion->gl_nombre_funcion }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                @foreach(\App\Perfiles::find(Session::get('perfil'))->subfunciones($funcion->id_funcion)->get() as $subfuncion)
                                <li><a href="{{ url($subfuncion->gl_url_funcion) }}">{{ $subfuncion->gl_nombre_funcion }}</a></li>
                                @endforeach
                            </ul>
                        </li>

                    @else
                        <li><a href="{{ $funcion->gl_url_funcion }}" >{{ $funcion->gl_nombre_funcion }}</a></li>
                    @endif
                @endforeach
            @endif

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
