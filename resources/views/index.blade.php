@extends('master')
@section('title','master project')
@section('content title','master project')
@section('content')
    <div class="row g-0 mt-3 ps-5">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">nickname</th>
                                <th scope="col">tanggal</th>
                                <th scope="col">deskripsi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                <form action  method="post"> 
                                <label class="form-label" for="">nickname</label>
                                <input type="text" name="nickname" class="form-control" aria-label="Sizing example input" required>
                                
                                <label class="form-label" for="">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control" required>
                                <label class="form-label" for="">Description</label>
                                <textarea class="form-control" name="deskripsi"></textarea>
                   bv             <div class="form-group">
                                <input type="file" name="gambar" id="gambar" value="gambar" accept="image/*" onchange="preview_image(event)"  required>
                                <br>
                                <br>
                                <img id= "output_image" width="50%" >
                        </div>
                              
                                <button type="submit"name="submit"  class="btn btn-success text-white mt-3">submit</button>
                                <button type="submit" class="btn btn-primary text-white mt-3">cancel</button>
                                
                            </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-aqhidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infoModalLabel">Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    This is some information about the project. You can add more details here.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</main>
</div>

@endsection