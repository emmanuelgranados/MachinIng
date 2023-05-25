@section('lefsidebar')
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" style="background-color: #5e5a56;">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav" style="background-color: #5e5a56;">
                    <li class="sidebar-item">
                        <a href="{{ route('inicio') }}" class="sidebar-link  waves-dark profile-dd" href="javascript:void(0)"
                            aria-expanded="false"><img src="../../assets/images/users/userworking.png" class="rounded-circle ms-2"
                                width="30" /><span class="hide-menu">Sección de {{auth()->user()->name}} </span>
                        </a>
                    </li>
                    @if ( Auth::user()->fk_id_roles == 1 || Auth::user()->fk_id_roles == 2 )
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account"></i><span class="hide-menu">Administración</span></a>
                            <ul aria-expanded="false" class="collapse first-level">
                                <li class="sidebar-item">
                                    <a href="{{ route('usuarios') }}" class="sidebar-link">
                                        <i class="mdi mdi-adjust"></i>
                                        <span class="hide-menu"> Usuarios </span>
                                    </a>
                                </li>
                     <!--            <li class="sidebar-item">
                                    <a href="{{ route('grupos') }}" class="sidebar-link">
                                        <i class="mdi mdi-cards-variant"></i>
                                        <span class="hide-menu"> Grupos </span>
                                    </a>
                                </li> -->

                            </ul>
                        </li>
                    @endif





                @if ( Auth::user()->fk_id_roles == 1 || Auth::user()->fk_id_roles == 2 )
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-linux"></i><span class="hide-menu">Facturación</span>

                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('clientes_contabilidad')}}" class="sidebar-link">
                                <i class="mdi mdi-box-shadow"></i>
                                <span class="hide-menu"> Clientes </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('maquinasProductos')}}" class="sidebar-link">
                                <i class="mdi mdi-box-shadow"></i>
                                <span class="hide-menu"> Facturas </span>
                            </a>
                        </li>


                    </ul>
                </li>

            @endif

            @if ( Auth::user()->fk_id_roles == 1 || Auth::user()->fk_id_roles == 2 )
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-linux"></i><span class="hide-menu">Manufactura</span>

                    </a>
                    <ul aria-expanded="false" class="collapse first-level">
                        <li class="sidebar-item">
                            <a href="{{route('maquinasProductos')}}" class="sidebar-link">
                                <i class="mdi mdi-box-shadow"></i>
                                <span class="hide-menu"> Seguimiento de piezas </span>
                            </a>
                        </li>

                    </ul>
                </li>

            @endif


                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!-- ============================================================== -->
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
@endsection
