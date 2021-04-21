@section('css-script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.css" integrity="sha512-CmjeEOiBCtxpzzfuT2remy8NP++fmHRxR3LnsdQhVXzA3QqRMaJ3heF9zOB+c1lCWSwZkzSOWfTn1CdqgkW3EQ==" crossorigin="anonymous" />

<style>
    .postImage-container input {
        display:none;
    }
    .postImage-container label {
        color: green;
        font-size: 11px;
        font-weight: 600;
        cursor: pointer;
    }
    .postImage-container label img {
        width: 20px;
    }
    .postImage-container .preview {
        position: relative;
        width:25%;
        display:none;
        margin-top:10px;
    }
    .postImage-container .preview span {
        position: absolute;
        top: 3px;
        right: 3px;
        cursor: pointer;
        padding: 2px;
        border-radius: 50%;
        color: green;
        font-size: 10px;
    }
</style>
@endsection
    <div class="border border-green-400 bg-white rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/posts" class="" style="border: none !important; padding: 0" enctype="multipart/form-data">
@csrf 

 <textarea name="body" class="w-full font-mono" placeholder="Text something..." required autofocus
 >{{ old('body') }}</textarea>

        <div class="postImage-container">
            <label for="postImage">
                <img src="{{ asset('images/upload-image-icon.svg') }}" alt="">
            </label>
            <input type="file" id="postImage" name="postImage" onchange="showPreview(event);">
            <div class="preview" id="postImage-preview">
                <span onclick="removeImage()">&#10006;</span>
                <img src="">
            </div>
        </div>
 <hr class="my-4">

 <footer class="flex justify-between ">
 <img src="{{auth()->user()->avatar}}" width="40" alt="" class="rounded-full mr-2">
 
 <button type="submit"         class="bg-green-500 hover:bg-green-600 rounded-lg shadow px-5 text-base text-white h-8 justify-self-end">Post</button>
 </footer>


 </form>


 @error('body')
<p class="text-green-500 text-sm mt-2">{{$message}}</p>
 @enderror
 @error('postImage')
        <p class="text-green-700 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>

@section('js-script')
<script>
    function showPreview(event){
        if(event.target.files.length > 0){
            var src = URL.createObjectURL(event.target.files[0]);
            var preview = document.getElementById("postImage-preview");
            var img = document.querySelector("#postImage-preview img");
            preview.style.display = "block";
            img.src = src;
        }
    }
    function removeImage() {
        var preview = document.getElementById("postImage-preview");
        preview.style.display = "none";
        var input = document.querySelector(".postImage-container input");
        input.value = '';
    }
</script>
@endsection