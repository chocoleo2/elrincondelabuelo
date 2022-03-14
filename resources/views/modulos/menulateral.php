@extends('plantilla')
@section('titulo','PUNTO VENTA')
@section('menulateral')

<nav class="mt-2">
   
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">    
    <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
              </p>
            </a>
          </li>    
    <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
            <i class="fa-solid fa-table-list"></i>
              <p>
                VENTAS
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
        </li>
    </ul>
 </nav>

 @endsection

@push('scripts')
	<script type="text/javascript" src="js/vue-resource.js"></script>
@endpush
<input type="hidden" name="route" value="{{url('/')}}">