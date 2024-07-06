<table class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
            <th>UUID</th>
            <th>Title</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody id="userTable" class="fw-bold text-gray-600 draggable-zone">
        @foreach ($data as $index => $each)
            <tr class="draggable w-100">
                <td>{{ $each->uuid }}</td>
                <td>{{ $each->name['title'] }}</td>
                <td>{{ $each->name['first'] }}</td>
                <td>{{ $each->name['last'] }}</td>
                <td>{{ $each->gender }}</td>
                <td>{{ $each->age }}</td>
                <td>{{ $each->location['city'] }}, {{ $each->location['country'] }}</td>
                <td>
                    <div class="d-flex justify-content-end flex-shrink-0">
                        <a href="#" class="btn btn-icon btn-icon-danger btn-sm" data-kt-users-table-filter="delete_row" data-id="{{$each->id}}" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $each->id }}">
                            <span class="svg-icon svg-icon-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                    <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                    <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="modal fade" id="deleteModal{{ $each->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body border-0 mx-auto text-center">
                                        <form action="{{ route('users.destroy',$each) }}" method="POST">
                                            <input type="hidden" name="delete_id" id="delete_id" value="{{$each->id}}">
                                            @csrf @method('delete')
                                            <h5 class="mb-4" style="letter-spacing: 1px;">Are you sure you want to delete this？</h5>
                                            <p class="mb-5">This action cannot be undone.</p>
                                            <button type="button" data-bs-dismiss="modal" class="btn btn-sm btn-secondary">
                                                <i class="bi bi-x-lg"></i>Cancel</button>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash text-white"></i>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex mt-4 justify-content-end">
    {{ $data->links('Components.pagination') }}
</div>