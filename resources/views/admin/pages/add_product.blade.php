@extends('admin.admin_master')
@section('admin_content')


<script type="text/javascript">
    function add_more(){
        var image_file = "<input type='file' name='product_image[]' class='form-control'>";
        document.getElementById('more_images').innerHTML = image_file;

        return false;
    }
</script>

<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Add Products</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                <li><i class="icon_document_alt"></i>Forms</li>
                <li><i class="fa fa-file-text-o"></i>Add Products</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <h3 style="color:green;">
                <?php
$message = Session::get('message');
if ($message) {
	echo $message;
	Session::put('message', null);
}

?>
            </h3>
            <section class="panel">
                <header class="panel-heading">
                    Add Products
                </header>
                <div class="panel-body">
                        <form action="{{ URL::to('save-product')}}" method="POST" role="form" enctype="multipart/form-data">
                        {{ csrf_field()}}
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input type="text" class="form-control" name="product_name"  placeholder="Enter Product name">
                        </div>

                        <div class="form-group">
                            <label for="name">Parent Category</label>
                            <select class="form-control" name="category_id">
                                <option value="0">Select Parent</option>
                                @foreach($category_info as $c_info)
                                    @if($c_info->parent_id == 0)
                                        <option value="{{ $c_info->category_id}}">
                                            {{$c_info->category_name}}
                                        </option>
<?php
$sub_cat = DB::table('category')
	->where('parent_id', $c_info->category_id)
	->get();
?>
                                        @foreach($sub_cat as $v_sub_cat)
                                            <option value="{{ $v_sub_cat->category_id}}">---{{$v_sub_cat->category_name}}</option>
                                        @endforeach

                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Add Manufacturer</label>
                            <select class="form-control" name="manufacturer_id">
                                <option value="0">Select Manufacturer</option>
                                @foreach($manu_info as $m_info)
                                <option value="{{ $m_info->manufacturer_id}}">
                                    {{$m_info->manufacturer_name}}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Product description </label>
                            <textarea class="form-control ckeditor" name="product_description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="name">Product Price</label>
                            <input type="number" class="form-control" name="product_price">
                        </div>
                        <div class="form-group">
                            <label for="name">Product Quantity</label>
                            <input type="number" class="form-control" name="product_quantity">
                        </div>
                        <div class="form-group">
                            <label for="name">Is Featured</label> &nbsp;
                            <input type="checkbox"  name="is_featured">
                        </div>
                        <div class="form-group">
                            <label for="status">Publication Status</label>
                            <select class="form-control" name="publication_status">
                                <option>Select Status</option>
                                <option value="1">Published</option>
                                <option value="0">Unpublished</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Product image</label>
                            <input type="file" class="form-control" name="product_image">
                            <br>
                            <button class="btn btn-danger pull-right " onclick="return add_more()">Add more</button>
                            <br>
                            <span id=more_images></span>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ">Save Changes</button>
                            <!-- <button type="submit" class="btn btn-danger ">Cancel</button> -->
                        </div>

                    </form>

                </div>
            </section>
        </div>
    </div>
</section>


@endsection