@extends('admin.layouts.header')
@section('admin-container')
<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="{{Route('admin.index')}}">Home</a>
                </li>
               
            </ul><!-- /.breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div>
        </div>




        <div class="col-md-6 col-md-offset-3">
          @if (session('success'))
              <div class="alert alert-danger">
                  {{ session('success') }}
              </div>
          @endif
          </div> 

 </div>


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="head-title"><h3>View information</h3></div>
                 <table class="table table-bordered table-responsive">
                     <tr>
                         <th>Sl</th>  <th>Name</th> <th>Email</th> <th>Question</th> <th>Description</th><th>Delete</th>
                     </tr>

                     @foreach($feedback AS $value)
                     <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->name}}</td>
                        <td>{{$value->email}}</td>
                    
                        <td>{{$value->question}}</td>
                        <td>{{$value->userInterested}}</td>
                      
                       
                  
                   
                            <td>
                                 <div class="action-buttons">
                                    <!--  <a class="green" href="{{Route('AdminBlog.edit',$value->id)}}">
                                            <span class="glyphicon glyphicon-edit fa-2x"></span>
                                     </a>
 -->
                                     <a class="red" href="{{Route('FeedbackShow.show',$value->id)}}">
                                                            
                                         <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                     </a>
                                </div>

                                                            
                            </td>
                     </tr>
                     @endforeach
                   
                 </table>
            </div>
            {{$feedback->links()}}
        </div>


        


       </div>

@endsection