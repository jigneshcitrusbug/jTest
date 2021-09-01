<div class="form-group ">
    <label for="profilephoto" class="">{{ $title }}</label>
    <input type="file" id="inputImage" name="profilephoto" class="form-control" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
    <input type="hidden" id="outputImage" name="_base64" class="form-control">
		
	<img src="" class="signature-preview" height="100" />
		
	<div class="clearfix cropping_tool cropping_tool-container" style="width:100%;display:none">
        
      <div class="col-md-12 " style="width:100%">
        <!-- <h3>Demo:</h3> -->
        <div class="img-container" style="width:100%">
          <img id="image" src="" alt="Picture" style="width:100%">
        </div>
      </div>
	  <a href="#" class="btn btn-raised btn-secondary  crop_btn" data-method="getCroppedCanvas" style="width:100%" > Crop Image</a>
    </div>

</div>
		
		
@push('scripts')

<script src="{{ getasset('/app-assets/cropper/cropper.js') }}" type="text/javascript"></script>
<script src="{{ getasset('/app-assets/cropper/main.js') }}" type="text/javascript"></script>



@endpush		