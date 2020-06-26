@extends('layouts.admin')
    
@section('content')
@if (session()->has('message'))
    <div class="alert alert-".{{color}} role="alert">
        <strong>{{message}}</strong>{{session()->get('message')}}
    </div>
@endif
@csrf
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Verify {{ trans($state) }} {{ trans($role) }}</h1>
<p class="mb-4">This is a list of {{ trans($role) }}s which needs to be verified.</a>.</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Users Table</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Website</th>
            <th scope="col">Logo</th>
            <th scope="col">Document</th>
            @if($state === 'rejected' || $state === 'pending')
            <th scope="col">Accept</th>
            @endif
            @if($state === 'accepted' || $state === 'pending')
            <th scope="col">Reject</th>
            @endif
        </tr>
    </thead>
    <tbody>
        @forelse ($pending_users as $user)
            <tr>
            <th class="align-middle" scope="row">{{$loop->iteration}}</th>
                <td class="align-middle">{{$user->name}}</td>
                <td class="align-middle">{{$user->email}}</td>
                <td class="align-middle">{{$user->website}}</td>
                <td class="align-middle"><img class="img-thumbnail" style="width: 300px; height:200px" src={{asset('storage/'.$user->image)}} alt="" srcset=""></td>
                <td class="align-middle">
                    <a target="_blank" href="{{route('admin.view_user_document',$user->id)}}" class="btn btn-success ">Preview Document</a>
                </td>
                @if($state === 'rejected' || $state === 'pending')
                    <td class="align-middle">
                        <button type="button" class="btn btn-primary" onclick="change_verification(this,{{$user->id}},'accepted')">Accept</button>
                    </td>
                @endif
                @if($state === 'accepted' || $state === 'pending')
                    <td class="align-middle">
                         <button type="button" class="btn btn-danger"  data-toggle="modal" data-target="#RejectionModal{{ $user->id }}" id="{{ $user->id }}">Reject</button>
                    </td>
                @endif
            </tr>
            <!-- Rejection Modal -->
            <div class="modal fade" id="RejectionModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Profile Confirmation </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                               
                        <div class="modal-body">
                            <div class="alert alert-danger" style="display:none"></div>
                            <form class="form-horizontal" role="form"  method="post" action="#">
                                @csrf
                                            
                                <input type="text" placeholder="To" name="To" value="{{ $user->email }}" class="form-control  reciever" autofocus>
                                <input type="text" placeholder="Subject" name="Subject"  class="form-control mt-2 Subject" autofocus>
                                <input type="hidden" value="{{$user->id}}" id="user_id">
                                <textarea  name="Message" placeholder="Message" class="form-control mb-2 mt-2 Message" rows="4" cols="50" autofocus></textarea>
                                              
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" type="submit" onclick="change_verification($('#'+{{ $user->id }}),{{$user->id}},'rejected')" >Send</button>
                                </div>
                             </form>
                        </div>
                    </div>
                </div>
            </div>  
            @empty
            <tr>
                <td colspan="8">
                    <div class="alert alert-danger" role="alert">
                        <strong>No {{$state}} {{$role}} yet</strong>
                    </div>
                </td>
            </tr>
            @endforelse
        </tbody>
</table>
{{ $pending_users->links() }}

</div>

@endsection
@push('scripts')
    <script>
        function change_verification(btn,user_id,status) {
            let reciever=$('.reciever').val();
            if(status == 'rejected')
            {
                Subject=$('.Subject').val();
                Message=$('.Message').val();
            }
            else if(status == 'accepted')
            {
                Subject= "Profile confirmation";
                Message="Your profile has been accepted ."
            }
            console.log(btn);
            console.log(Message);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            answer = confirm('are you sure ?')
            if(answer){
                $.ajax({
                    type:'POST',
                    data:{
                        user_id,
                        status, 
                        reciever,
                        Subject,
                        Message
                    },success:function (data) {
                        if(data.errors)
                        {
                            $('.alert-danger').html('');

                            $.each(data.errors, function(key, value){
                                $('.alert-danger').show();
                                $('.alert-danger').append('<li>'+value+'</li>');
                            });
                        }
                        else
                        {
                            $('.alert-danger').hide();
                            $('#RejectionModal'+user_id).modal('hide');
                            $(btn).parents('tr').hide('1000'); 
                        }
                    },error:function (responseJSON){
                        alert(responseJSON.responseText);
                    }
                })
            }
        }
    </script>
@endpush