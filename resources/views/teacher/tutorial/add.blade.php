@extends('layouts.admin')
@section('content')h

<div class="mb-10">
    <label for="exampleFormControlInput1" class="required form-label">lesson hint </label>
    <input type="email" class="form-control form-control-solid" placeholder="Example input"/>
</div>

<div id="kt_docs_ckeditor_document_toolbar"></div>
<div id="kt_docs_ckeditor_document">
    <h1>Quick and simple CKEditor 5 Integration</h1>
     <p>Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper. Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.</p>
</div>

<script src="{{ asset('assets/plugins/custom/ckeditor/ckeditor-document.bundle.js') }}"></script>


<script>
  DecoupledEditor
    .create(document.querySelector('#kt_docs_ckeditor_document'))
    .then(editor => {
        const toolbarContainer = document.querySelector( '#kt_docs_ckeditor_document_toolbar' );

        toolbarContainer.appendChild( editor.ui.view.toolbar.element );
    })
    .catch(error => {
        console.error(error);
    });
    </script>
@endsection