@include('admin.header')




@include('admin.sidebar')

<div class="row mt-4">
                <!-- Data Table -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Recent Campaigns</div>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                             {{session()->get('message')}}
                         @endif
                   
                         <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Name</th>
                                        <th>image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($posts as $post)
                                    <tr>
                                        <td>{{$post->user_id}}</td>
                                        <td>{{$post->title}}</td>
                                        <td>{{$post->description}}</td>
                                        <td>{{$post->post_status}}</td>
                                        <td>{{$post->name}}</td>
                                        <td>
                                            <img class="img_deg" src="post_images/{$post->image}" alt=""> 
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{url('/delete_post',$post->id)}}" onclick="return confirm('Are you Sure?')" class="btn btn-danger btn-sm">Delete</a>
                                            
                                        </td>
                                    </tr>
                                   @endforeach
                                    <!-- More rows can be added here -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

@include('admin.js')