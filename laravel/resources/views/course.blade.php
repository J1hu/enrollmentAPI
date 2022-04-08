@extends('structure')
@section('title','Course')
@section('formModal')
<!-- Button trigger modal -->
<div id="errorMessage" class="alert alert-danger d-none" role="alert">
      Please enter all the required fields
</div>
<div id="testJehu" class="alert alert-danger d-none" role="alert"></div>
<div class="container">

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      Launch demo modal
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Manage Courses</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div>
                <div class="mb-3">
                    <label for="course" class="form-label">Course</label>
                    <input required type="text" class="form-control" id="course" placeholder="Enter the course name">
                    
                </div>
                <div class="mb-3">
                    <label for="years" class="form-label">Years</label>
                    <input required type="number" class="form-control" id="years" placeholder="Enter the Years">
                </div>
                <div class="form-floating">
                    <textarea id = "description" class="form-control" placeholder="description" ></textarea>
                    <label for="floatingTextarea">Description</label>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button"  id="closeModal" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" id="saveChanges" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
@section('formCourse')

    
<table class="table">
  <thead>
    <tr>
      <th scope="col">Course Name</th>
      <th scope="col">Years</th>
      <th scope="col">Description</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody id="courseContent">
    
  </tbody>
</table>
@endsection

