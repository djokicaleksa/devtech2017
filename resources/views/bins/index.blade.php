@extends('layouts.admin')

@section('content')
@include('components.page_title', ['title'=>'Bins'])
<div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Bins</h4>
                                <h6 class="card-subtitle"></h6>
                                <div class="table-responsive">
                                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Longitude</th>
                                                <th>Latitude</th>
                                                <th>Status</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($bins as $bin)
                                            <tr>
                                                <td>{{$bin->id}}</td>
                                                <td>
                                                    {{$bin->long}}
                                                </td>
                                                <td>{{$bin->lat}}</td>
                                                <td>
                                                	@if($bin->status == 0)
                                                		<span class="label label-danger">Not working</span>
                                                	@else
                                                		<span class="label label-success">Active</span>
                                                	@endif
                                                </td>
                                                <td>
                                                    <button type="button" onclick="event.preventDefault(); document.getElementById('deleteform{{$bin->id}}').submit()" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                                                    {!! Form::model($bin, ['method'=>'delete', 'action'=>['BinController@destroy', $bin->id], 'style'=>'display;', 'id'=>'deleteform'.$bin->id])!!}
                                                    {!! csrf_field() !!}
                                                    {!! Form::close() !!}
                                                </td>
                                            </tr>
                                        @endforeach    
                                        </tbody>
                                        <ul id="links">
                                        {!! $bins->links()!!}
                                        </ul>
                                        <tfoot>
                                            <tr>
                                                <td colspan="2">
                                                    <a href="{{url('/dashboard/bins/create')}}" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add New Bin</button>
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