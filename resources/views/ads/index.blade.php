@extends('layouts.admin')

@section('content')
@include('components.page_title', ['title'=>'Ads'])
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Ads</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Image link</th>
                                                <th>Owner</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($ads as $ad)
                                            <tr>
                                                <td>{{$ad->id}}</td>
                                                <td>
                                                    {{$ad->name}}
                                                </td>
                                                <td><img src="{{ Cloudder::secureShow($ad->image) }}" width="130"></td>
                                                <td><a href="{{url('dashboard/users/' . $ad->user->id)}}" >{{$ad->user->name}}</a></td>
                                                <td>
                                                    <button type="button" onclick="event.preventDefault(); document.getElementById('deleteform{{$ad->id}}').submit()" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" ><i class="ti-close" aria-hidden="true"></i></button>
                                                    {!! Form::model($ad, ['method'=>'delete', 'action'=>['AdsController@destroy', $ad->id], 'style'=>'display;', 'id'=>'deleteform'.$ad->id])!!}
                                                    {!! csrf_field() !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach    
                                        </tbody>
                                        <ul id="links">
                                        {!! $ads->links()!!}
                                        </ul>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <a href="{{url('/dashboard/ads/create')}}" class="btn btn-info btn-rounded" >Add New ad</button>
                                                </td>
                                                <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                <h4 class="modal-title" id="myModalLabel">Add New Contact</h4> </div>
                                                            <div class="modal-body">
                                                                <from class="">
                                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                            </div>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <td colspan="7">
                                                    <div class="text-right">
                                                        <ul class="pagination"> </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                      
                      


                    </div>
                </div>
@endsection