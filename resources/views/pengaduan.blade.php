@extends('layouts.user')

@section('content')
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <header class="section-header">
              {{-- <h2>Contact</h2> --}}
              <p>Pengaduan</p>
            </header>

            <div>
                <form action="forms/contact.php" method="post" class="php-email-form">
                  <div class="row gy-4">
    
                    <div class="col-md-12">
                        <label for="exampleFormControlSelect1">Nama</label>
                      <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>

                    <div class="col-md-12">
                        <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                        <select class="form-control">
                          <option>Laki-laki</option>
                          <option>Perempuan</option>
                        </select>
                    </div>

                    <div class="col-md-12">
                        <label for="exampleFormControlSelect1">Sebagai</label>
                        <select class="form-control">
                          <option>Korban</option>
                          <option>Pihak ke-3</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Upload Bukti</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <div class="col-md-12">
                        <label for="exampleFormControlSelect1">Bukti Berupa</label>
                        <select class="form-control">
                          <option>Foto</option>
                          <option>Video</option>
                        </select>
                    </div>
                    {{-- <div class="col-md-6 ">
                      <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                    </div> --}}
    
                    {{-- <div class="col-md-12">
                      <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div> --}}

                    <div class="col-md-12">
                        <label for="exampleFormControlSelect1">Kategori Perundungan</label>
                        <select class="form-control">
                          <option>Fisik</option>
                          <option>Ciber</option>
                          <option>PSikologis</option>
                          <option>Seksual</option>
                        </select>
                    </div>
    
                    <div class="col-md-12">
                        <label for="exampleFormControlSelect1">Deskripsi</label>
                      <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                    </div>

                    <div class="col-md-12">
                        <label for="exampleFormControlSelect1">Instansi</label>
                        <select class="form-control">
                          <option>SMA N 5 Bukittinggi</option>
                          <option>SMA N 3 Bukittinggi</option>
                          <option>SMA N 1 Bukittinggi</option>
                        </select>
                    </div>
    
                    <div class="col-md-12 text-center">
                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your message has been sent. Thank you!</div>
    
                      <button type="submit">Kirim Pengaduan</button>
                    </div>
    
                  </div>
                </form>
    
              </div>
    </section>
@endsection