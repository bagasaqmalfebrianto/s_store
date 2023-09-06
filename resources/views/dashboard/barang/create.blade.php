@extends('dashboard.layout.main')

@section('container')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="">BARANGKU</h1>
      </div>


      <div class="col-lg-8">

          <form method="post" action="/dashboard/barangku">
            @csrf
              <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                  @error('nama')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
              </div>

              <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}">
                @error('slug')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
                @error('harga')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
              @foreach ($categories as $category)
                  @if(old('category_id') == $category->id)
                  <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                  @else
                  <option value="{{ $category->id }}">{{ $category->nama }}</option>
                  @endif

              @endforeach
          </select>
          </div>


            <div class="mb-3">
                <label for="body" class="form-label">Keterangan</label>

                <textarea name="body" id="body" cols="30" rows="10"></textarea>

            </div>





                <button type="submit" class="btn btn-primary">Create Post</button>
            </form>
        </div>
        </main>




{{-- SLUG --}}
<script>
    const nama = document.querySelector("#nama");
const slug = document.querySelector("#slug");

nama.addEventListener("keyup", function() {
    let preslug = nama.value;
    preslug = preslug.replace(/ /g,"-");
    slug.value = preslug.toLowerCase();
    });
</script>





{{-- ckeditr --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
    ClassicEditor
            .create( document.querySelector( '#body' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
@endsection
