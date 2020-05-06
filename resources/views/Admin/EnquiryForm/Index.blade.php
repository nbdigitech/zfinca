@extends('Admin.layouts.Master')

@section('MainSection')
<div class="content">
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary card-header-icon" style="margin-top: -15px;">
              <div style="background-color: #303948; padding: 10px; padding-left: 16px; padding-top:16px; border-radius: 3px;" style="width: 100%;">
                <h4>Manage EnquiryForm
                 </h4>
                </div>
              </div>
              <div class="card-body">
                @if(session()->has('success'))
                <div class="alert alert-success" style="background: #303948; font-size: 18px; box-shadow:none;">
                  {{session()->get('success')}}
                 <a href="#" class="close" data-dismiss="alert" aria-label="close" >X</a>
                </div>
                @endif
                <div class="toolbar">
                </div>
                <div class="material-datatables">
                  <table id="datatables" class="table table-no-bordered" cellspacing="0" width="100%" style="width:100%">
                    <thead>
                      <tr>
                        <th style="font-weight: bold;">#</th>
                        <th style="font-weight: bold;">Name</th>
                        <th style="font-weight: bold;">Mobile</th>
                        <th style="font-weight: bold;">Email</th>
                        <th style="font-weight: bold;">Date</th>
                        <th style="font-weight: bold;" class="disabled-sorting text-right">Actions</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th style="font-weight: bold;">#</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Date</th>
                        <th class="text-right">Actions</th>
                      </tr>
                    </tfoot>
                    <tbody>
              @php $i = 1;  @endphp
              @foreach($data as $row)
                     <tr>
                        <td>{{$i++}}</td>
                        <td>{{$row->Name}}</td>
                        <td>{{$row->Email}}</td>
                        <td>{{$row->Email}}</td>
                         <td>
                          {{$row->created_at}}
                        </td>
                    
                        <form action="{{route('Admin/EnquiryForm/EditSession')}}" method="post">
                          {{csrf_field()}}
                          <td class="td-actions text-right">
                            <input type="hidden" name="Edit" value="{{$row->id}}">
                            <button type="submit" rel="tooltip" class="btn btn-success" style="background-color: #303948; padding:10px; padding-left: 20px; box-shadow: none; margin-right: 10px; padding-right: 20px;">
                              View
                            </button>
                          </form>

                          <button type="button" rel="tooltip" data-toggle="modal" data-target="#myModal" class="btn btn-danger pull-right" onclick="delete_function('{{$row->id}}')" style="background-color: #303948; padding:10px; padding-left: 15px; box-shadow: none; padding-right: 15px;" >
                            Delete
                          </button>
                        </td>
                      </tr>
                  @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header"  style="background-color: #303948; color:white;">
          <h4 class="modal-title" style="margin-top: -10px; margin-bottom: 10px;">Are You Sure Delete It ?</h4>
          <button type="button" class="close" data-dismiss="modal" style="color:white;">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body" style="text-align: center; padding-top: 50px;">
          If you are delete it. you can't get it after
        </div>

        <!-- Modal footer -->
        <div class="row" style="padding-bottom: 50px;">
          <div class="col-sm-2"></div>
          <div class="col-sm-4">
            <form action="{{route('Admin/EnquiryForm/Delete')}}" method="post">
              {{csrf_field()}}
              <input type="hidden" id="delete_id" name="Delete">
              <button type="submit" class="btn btn-success" style="color:white; margin-right: 50px; box-shadow: none; width: 100%; background-color: #303948;">Yes</button>
            </form>
          </div>
          <div class="col-sm-4">
            <button type="button" class="btn btn-danger" data-dismiss="modal" style="color:white; width: 100%; background-color: #303948; box-shadow: none;">No</button>
          </div>
          <div class="col-sm-2"></div>
        </div>
      </div>
    </div>
  </div>

</div>
</div>
<script type="text/javascript">
  function delete_function(id){
    document.getElementById("delete_id").value = id;
  }
</script>

@endsection