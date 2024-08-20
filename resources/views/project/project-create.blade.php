

@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('instep-backend.create_project') , array('Attr.EnableID' => true))}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{clean( trans('instep-backend.create_project') , array('Attr.EnableID' => true))}}</h6>
        </div>
        <div class="card-body">

                

                <div class="row">
                    <div class="col-lg-6">
                        <a href="{{route('project.index') . '?language=' . request()->input('language')}}" class="btn btn-primary btn-back">{{clean( trans('instep-backend.back_projectpage') , array('Attr.EnableID' => true))}}</a>
                    </div>

                    <div class="col-lg-6 text-right">
                        @if (!empty($langs))
                            <select name="language" class="form-control language-control" onchange="window.location='{{url()->current() . '?language='}}'+this.value">
                                <option value="" selected disabled>{{clean( trans('instep-backend.select_language') , array('Attr.EnableID' => true))}}</option>
                                @foreach ($langs as $lang)
                                    <option value="{{$lang->code}}" {{$lang->code == request()->input('language') ? 'selected' : ''}}>{{$lang->name}}</option>
                                @endforeach
                            </select>
                        @endif
                    </div>
                </div>



                @if ($message = Session::get('project_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
   

                @include('includes.form-errors')

                <div class="row">
                    <div class="col-md-12">

                        <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">

                      

                                    <input type="hidden" name="language_id" value="{{$lang_id}}">
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.link') , array('Attr.EnableID' => true))}}</strong>
                                                <div class="slug-container"><span>{{URL::to('/')}}/{{clean( trans('instep-backend.project') , array('Attr.EnableID' => true))}}/</span><input type="text" name="slug" class="form-control" placeholder=""></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.photo') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="file"  name="photo_id" class="form-control-file"  id="photo_id">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.photo') , array('Attr.EnableID' => true))}} <span>{{clean( trans('instep-backend.upload_image') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.create')}}"> {{clean( trans('instep-backend.here') , array('Attr.EnableID' => true))}} </a> {{clean( trans('instep-backend.then_copy_url') , array('Attr.EnableID' => true))}} <a target="_blank" href="{{route('media.index')}}"> {{clean( trans('instep-backend.here') , array('Attr.EnableID' => true))}} </a></span></strong>
                                                <input type="text" name="image_featured2" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <strong>{{clean( trans('instep-backend.categories') , array('Attr.EnableID' => true))}}</strong>
                                        <select name="project_category_id" id="project_category_id" class="form-control">
                                            <option>{{clean( trans('instep-backend.choose_category') , array('Attr.EnableID' => true))}}</option>
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @endforeach 
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <strong>{{clean( trans('instep-backend.body') , array('Attr.EnableID' => true))}}</strong>
                                        <textarea name="body" class="form-control" id="body" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <strong>{{clean( trans('instep-backend.description') , array('Attr.EnableID' => true))}}</strong>
                                        <textarea name="excerpt" class="form-control" id="excerpt" rows="10"></textarea>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.photo') , array('Attr.EnableID' => true))}} 1</strong>
                                                <input type="text" name="img_gal1" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.photo') , array('Attr.EnableID' => true))}} 2</strong>
                                                <input type="text" name="img_gal2" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.photo') , array('Attr.EnableID' => true))}} 3 </strong>
                                                <input type="text" name="img_gal3" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.photo') , array('Attr.EnableID' => true))}}4 </strong>
                                                <input type="text" name="img_gal4" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.duration_project') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="date" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.client') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="client" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.button_text') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="button_text" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.button_link') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="button_link" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                     <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.meta_title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="meta_title" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.meta_description') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="meta_description" class="form-control" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                </div>
  

                                <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">{{clean( trans('instep-backend.create') , array('Attr.EnableID' => true))}}</button>
                                </div>
                            </div>

                        </form>
                        
                    </div>
                </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection

