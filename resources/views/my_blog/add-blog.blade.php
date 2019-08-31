
<html>
<head>




    <script src="{{asset('/')}}myhome/ckeditor/ckeditor.js"></script>
    <script src="{{asset('/')}}myhome/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="{{asset('/')}}myhome/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="{{asset('/')}}myhome/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">
</head>
<body>


<div class="row">
    <div  class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="text-center text-success"></h3>

            {{Form::open(['route' =>'new-brand','method' =>'POST','class'=>'form-horizontal'])}}
            <!--< class="form-group">
                    {{//Form::label('brand-name','Brand-name',['class' => 'col-md-3'])}}
                    <div class="col-md-9">
{{//Form::text('brand-name','',['class' => 'form-control'])}}
                    </div>

             </div>
-->
                <div class="form-group">
                    <label class="control-label col-md-3">Brand Name</label>
                    <div class="col-md-9">
                        <input type="text" name="brand-name" class="form-control"/>
                        <span class="text-denger">{{$error->has('brand-name')?$error->first('brand-name'):''}}</span>
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-md-3">Brand Description</label>
                    <div class="col-md-9">
                        <input type="text" name="brand-description" class="form-control"/>
                        <span class="text-denger">{{$error->has('brand-description')?$error->first('brand-description'):''}}</span>
                    </div>
                </div>



                <div class="form-group">
                    <label class="control-label col-md-3">long Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="editor" name="long-description"></textarea>
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
<script>
    initSample();
</script>
</body>
</html>

