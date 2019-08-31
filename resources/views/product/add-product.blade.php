

<div class="row">
    <div  class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center text-success"></h3>

            {{Form::open(['route' =>'new-product','method' =>'POST','class'=>'form-horizontal','enctype' =>'mutipart/form-data'])}}
            <!--< class="form-group">
                    {{//Form::label('brand-name','Brand-name',['class' => 'col-md-3'])}}
                    <div class="col-md-9">
{{//Form::text('brand-name','',['class' => 'form-control'])}}
                    </div>

             </div>
-->
                <div class="form-group">
                    <label class="control-label col-md-3">Category Name</label>
                    <div class="col-md-9">
                       <select class="form-control" name="category-id">
                           <option>---Select a Name</option>
                           @foreach($categories as $category)
                           <option value="{{$category->category-id}}">{{$category->category-name}}</option>

                               @endforeach
                       </select>
                        <span class="text-denger">{{$error->has('brand-name')?$error->first('brand-name'):''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Brand Name</label>
                    <div class="col-md-9">
                        <select class="form-control" name="brand-id">
                            <option>---Select a Name</option>
                            @foreach($brands as $brand)
                                <option value="{{$brand->brand-id}}">{{$brand->brand-name}}</option>

                            @endforeach
                        </select>
                        <span class="text-denger">{{$error->has('brand-name')?$error->first('brand-name'):''}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">product Name</label>
                    <div class="col-md-9">
                        <input type="text" name="product-name" class="form-control"/>
                        <span class="text-denger">{{$error->has('brand-description')?$error->first('brand-description'):''}}</span>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3">product Price</label>
                    <div class="col-md-9">
                        <input type="number" name="product-price" class="form-control"/>
                        <span class="text-denger">{{$error->has('brand-description')?$error->first('brand-description'):''}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">product Quantity</label>
                    <div class="col-md-9">
                        <input type="number" name="product-quantity" class="form-control"/>
                        <span class="text-denger">{{$error->has('brand-description')?$error->first('brand-description'):''}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">short Description</label>
                    <div class="col-md-9">
                        <input type="text" name="short-description" class="form-control"/>
                        <span class="text-denger">{{$error->has('brand-description')?$error->first('brand-description'):''}}</span>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">long Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" name="long-description"></textarea>
                        <span class="text-denger">{{$error->has('long-description')?$error->first('long-description'):''}}</span>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3">product image</label>
                    <div class="col-md-9">
                        <input type="file" name="product-image" accept="image/*">
                        <span class="text-denger">{{$error->has('long-description')?$error->first('long-description'):''}}</span>
                    </div>
                </div>




                <div class="form-group">
                    <label class="control-label col-md-3">publication status</label>
                    <div class="col-md-9">
                        <label> <input type="radio" name="publication-status" value="1"/></label>
                        <label> <input type="radio" name="publication-status" value="0"/></label><br>
                        <span class="text-denger">{{$error->has('publication-status')?$error->first('publication-status'):''}}</span>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9">
                        <input type="submit" name="btn" value="Save Blog Info">

                    </div>
                </div>



                {{Form::close()}}


            </div>
        </div>
    </div>
</div>