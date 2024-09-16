@extends('layouts.admin')

@section('content')

@include('includes.tinyeditor')

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">{{clean( trans('instep-backend.edit_page') , array('Attr.EnableID' => true))}}</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{clean( trans('instep-backend.create_page') , array('Attr.EnableID' => true))}}</h6>
        </div>
        <div class="card-body">

                <a href="{{route('page.index') . '?language=' . request()->input('language')}}" class="btn btn-primary btn-back">{{clean( trans('instep-backend.back_pages') , array('Attr.EnableID' => true))}}</a>

                @if ($message = Session::get('page_success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times"></i></button>    
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


                @include('includes.form-errors')

                <div class="row">

                	<div class="col-md-12">

                		<form action="{{route('page.update', $page->id)}}" method="POST" enctype="multipart/form-data">
					        @csrf
					        @method('PUT')

					        <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="title" class="form-control" placeholder="" value="{{$page->title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.link') , array('Attr.EnableID' => true))}}</strong>
                                                <div class="slug-container"><span>{{URL::to('/')}}/</span><input type="text" name="slug" class="form-control" placeholder="" value="{{$page->slug}}"></div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="form-group">
                                        <img class="img-fluid pb-4" width="100" height="100" src="{{$page->photo ? '/public/images/media/' . $page->photo->file : '/public/img/200x200.png'}}">
                                        <p><strong>{{clean( trans('instep-backend.photo') , array('Attr.EnableID' => true))}}</strong></p>
                                        <input type="file"  name="photo_id" class="form-control-file"  id="photo_id">
                                    </div>

                                    <div class="form-group">
                                        <strong>{{clean( trans('instep-backend.body') , array('Attr.EnableID' => true))}}</strong>
                                        <textarea name="body" class="form-control" id="body" rows="25">{{clean( $page->body , array('Attr.EnableID' => true))}}</textarea>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.meta_title') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="meta_title" class="form-control" placeholder="" value="{{$page->meta_title}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>{{clean( trans('instep-backend.meta_description') , array('Attr.EnableID' => true))}}</strong>
                                                <input type="text" name="meta_description" class="form-control" placeholder="" value="{{$page->meta_description}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong>Full Width</strong>
                                                <input type="radio" name="page_full_width" value="1" @if($page->page_full_width == 1) checked @endif > Yes &nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="page_full_width" value="0" @if($page->page_full_width == 0) checked @endif > No 
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <strong> Header Banner</strong>
                                                <input type="radio" name="header_banner_view" value="1" @if($page->header_banner_view == 1) checked @endif > Yes &nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="header_banner_view" value="0" @if($page->header_banner_view == 0) checked @endif > No 
                                            </div>
                                        </div>

                                    </div>

                                </div>
					   
	                           
                   

					            <div class="col-xs-12 col-sm-12 col-md-12 text-right">
					                <button type="submit" class="btn btn-primary">{{clean( trans('instep-backend.update') , array('Attr.EnableID' => true))}}</button>
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

