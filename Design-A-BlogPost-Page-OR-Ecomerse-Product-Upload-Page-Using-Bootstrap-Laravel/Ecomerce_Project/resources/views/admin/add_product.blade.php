@extends('admin_layout')
@section('admin_content')
<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="index.html">Home</a>
        <i class="icon-angle-right"></i> 
    </li>
    <li>
        <i class="icon-edit"></i>
        <a href="#">Add Product</a>
    </li>
</ul>

<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Add Product</h2>

        </div>
        <p class="alert-success">
            <?php
            $message=Session::get('message');
            if ($message) {
                echo $message;
                Session::put('message','Data null');
            }
            ?>
        </p>
        <div class="box-content">
            <form class="form-horizontal" action="{{url('')}}" method="post">
                {{csrf_field()}}
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="date01">Product Name</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="product_name" required="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Product Category</label>
                        <div class="controls">
                            <select id="selectError3">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Manufacture Name</label>
                        <div class="controls">
                            <select id="selectError3">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                                <option>Option 4</option>
                                <option>Option 5</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Product Short Discription</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_short_description" rows="3" required=""></textarea>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea3">Product Long Discription</label>
                        <div class="controls">
                            <textarea class="cleditor" name="product_long_description" rows="3" required=""></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="date01">Product Price</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="product_price" required="">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="fileInput">Image</label>
                        <div class="controls">
                            <input class="input-file uniform_on" id="fileInput" type="file">
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="date01">Product Size</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="product_size" required="">
                        </div>
                    </div>
                     <div class="control-group">
                        <label class="control-label" for="date01">Product Color</label>
                        <div class="controls">
                            <input type="text" class="input-xlarge" name="product_color" required="">
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea2">Publication Status</label>
                        <div class="controls">
                            <input type="checkbox" name="publication_status" value="1">
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Add Product</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   
        </div>
    </div><!--/span-->
</div><!--/row-->
@endsection
