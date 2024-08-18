@extends('layoutfb.backend')
@section('content')
<a class="btn btn-outline-success btn-sm" href="{{ url('/category/create') }}">New</a>

<br>
<br>
    @if (count($categories) > 0)
        <table class="table table-bordered">
                                
            <thead> 
                <th>ID</th>
                 <th>Name</th>
                 <th>Create Date</th>
                 <th>Edit</th>
                 <th>Delete</th>
            </thead>
            <tbody>
                                    
                @foreach ($categories as $category)
                                        <tr>
                                            <td>
                                                {!! $category->id !!}
                                            </td>
                                          
                                            <td>
                                            <a href="{{ url('/category/' . $category->id) }}">{!! $category->name !!}</a>
                                            </td>
                                            <td>
                                             {!! $category->created_at !!}
                                            </td>
                                            <td><a class="btn btn-info btn-sm" href="{!! url('/category/' . $category->id."/edit" ) !!}">Edit</a></td>
                                            <td>
                                                    {{ Html::form('DELETE','category/'. $category->id)->open()}}
                                                        <button class="btn btn-outline-danger btn-sm delete">Delete</button>
                                                     
                                                    {{ Html::form()->close() }}
                                            </td>
                                        </tr>   
                @endforeach
            </tbody>
           
        </table>
     @endif
  

<script>
    $(".delete").click(function() {
        var form = $(this).closest('form');
        $('<div></div>').appendTo('body')
            .alert("Are you sure?")
            .dialog({
                modal: true,
                title: 'Delete !',
                zIndex: 10000,
                autoOpen: true,
                width: 'auto',
                resizable: false,
                buttons: {
                    Yes: function() {
                        $(this).dialog('close');
                        form.submit();
                    },
                    No: function() {
                        $(this).dialog("close");
                        return false;
                    }
                },
                close: function(event, ui) {
                    $(this).remove();
                }
            });
        return false;
    });
</script>
    
 @endsection
 
 
 