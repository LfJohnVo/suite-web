@extends('layouts.admin')
@section('content')

    @can('carpetum_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <!--<a class="btn btn-success" href="{{ route('admin.carpeta.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.carpetum.title_singular') }}
            </a>-->
        </div>
    </div>
@endcan


              <div class="card mt-5">
                  <div class="col-md-10 col-sm-9 py-3 card card-body bg-primary align-self-center " style="margin-top:-40px; ">
                      <h3 class="mb-2  text-center text-white"><strong>Carpetas</strong></h3>
                  </div>



                  <div class="card-body">
                      <div style="height: 600px;">
                          <div id="fm"></div>
                      </div>
                  </div>
              </div>



@endsection
@section('scripts')

@endsection
