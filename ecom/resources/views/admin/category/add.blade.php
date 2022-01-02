@extends('admin.master)

@section('title')
Add new Category
    @endsection

@section('body')
<div class="col-md-12 row">
    <div class="col-md-6">
        <div class="ibox">
            <div class="ibox-head">
                <div class="ibox-title">Add category From</div>
                <div class="ibox-tools">
                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                </div>
            </div>
            <div class="ibox-body">
                <form class="form-horizontal">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category Name</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" placeholder="Email address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category Description</label>
                        <div class="col-sm-10">
                            <textarea  name="description" class="form-control" placeholder="category description"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category Image</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="image" accept="image/*" name="image">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">publication Status</label>
                        <div class="col-sm-10">
                            <label><input  type="radio" name="status" value="1"></label>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button class="btn btn-info" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

