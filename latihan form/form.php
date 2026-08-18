<?php include 'navbar.php' ?>

<!-- awal container -->
<div class="container">
    
    <!-- awal column -->
    <div class="container text-center">
        <h1 class="fw-normal display-4">Form Tambah Siswa</h1>
        <hr class="border border-dark border-2 opacity-100">
        <div class="row align-items-start">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <!-- awal card-->
                <div class="card">
                    <div class="card-body">
                        <!-- awal form -->
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <!-- akhir form -->
                    </div>
                </div>
                <!-- akhir card -->
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
    <!-- akhir column-->

</div>
<!-- akhir container -->

<?php include 'footer.php' ?>