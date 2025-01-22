@extends('master')
@section('title','master service')
@section('content title','master service')
@section('home')

<div class="col-md-10 text-dark" style="height:100vh;">
    <div class="row g-0 mt-3 ps-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">From</th>
                                <th scope="col">Description</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1.</th>
                                <td>@kebalserangan</td>
                                <td>Liked your video 💗</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success" style="background-color: rgb(31, 255, 87);">View</a>
                                    <a href="" class="btn btn-sm btn-danger">Block</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2.</th>
                                <td>@westalfaa_</td>
                                <td>Liked you 💗</td>
                                <td>
                                    <button class="btn btn-sm btn-info"><i class="bi bi-info-circle"></i></button>
                                    <a href="" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3.</th>
                                <td>@alexandriarr_</td>
                                <td>Liked you 💗</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success" style="background-color: rgb(31, 255, 87);">View</a>
                                    <a href="" class="btn btn-sm btn-danger">Block</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4.</th>
                                <td>@riveannughraha_</td>
                                <td>Just Followed You 🗿</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-success" style="background-color: rgb(31, 255, 87);">View</a>
                                    <a href="" class="btn btn-sm btn-danger">Block</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5.</th>
                                <td>@mshofiann</td>
                                <td>Liked your video 💗</td>
                                <td>
                                    <button class="btn btn-sm btn-info"><i class="bi bi-info-circle"></i></button>
                                    <a href="" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Form Input</div>
                <div class="card-body">
                    <form id="projectForm" novalidate>
                        <div class="mb-3">
                            <label class="form-label">Project Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Project Category</label>
                            <select class="form-control" required>
                                <option value="" disabled selected>Select category</option>
                                <option value="Web Design">Web Design</option>
                                <option value="Web Dev">Web Dev</option>
                                <option value="SEO">SEO</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Project Date</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Project File</label>
                            <input type="file" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea class="form-control" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Buang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Your project has been successfully saved!
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>

<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteModalLabel">Buang Confirmation</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apa kamu yakin ingin menghapus ini?!
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </div>
    </div>
</div>
</div>
@endsection