@extends('admin.admin_master')
@section('admin')

<section class="content">

    <!-- Basic Forms -->
    <div class="col-4">
     <div class="box">
       <div class="box-header with-border">
         <h4 class="box-title">Tahrirlash</h4>
        
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">
           <div class="col">
               <form novalidate>
                 <div class="row">
                   <div class="col-12">						
                       <div class="form-group">
                           <h5>Basic Text Input <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"> </div>
                           
                       </div>
                       <div class="form-group">
                           <h5>Email <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                       </div>
                      
                       <div class="form-group">
                           <h5>File Input Field <span class="text-danger">*</span></h5>
                           <div class="controls">
                               <input type="file" name="file" class="form-control" required> </div>
                       </div>
                     
                     
                 
                       <button type="submit" class="btn btn-rounded btn-info">Yangilash</button>
                   </div>
               </form>
           </div>
           </div>
           </div>
           </div>
           </div>
</section>
@endsection