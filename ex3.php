<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่างภาษาphpและbootstrap</title>
    <!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- sweetalert -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Sans+Thai:wght@100..900&display=swap" rel="stylesheet">


<style>
    body{
        font-family: "Noto Sans Thai", serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
  font-variation-settings:
    "wdth" 100;
    margin-left:100px;
}

</style>

</head>
<body>
    <h1>โปรแกรมบันทึกข้อมูลการ์ดจอ</h1>
    
    <form class="row g-3">
  <div class="col-md-3">
    <label for="inputgpuid" class="form-label">GPU_ID</label>
    <input type="text" class="form-control" id="inputgpuid">
  </div>
  <div class="col-md-3">
    <label for="inputbrand" class="form-label">Brand</label>
    <input type="text" class="form-control" id="inputbrand">
  </div>
  <div class="col-md-6">
    <label for="inputmodel" class="form-label">Model</label>
    <input type="text" class="form-control" id="inputmodel">
  </div>
  <div class="col-3">
    <label for="inputChipset" class="form-label">Chipset</label>
    <input type="text" class="form-control" id="inputChipset">
  </div>
  <div class="col-3">
    <label for="inputMemory" class="form-label">Memory</label>
    <input type="text" class="form-control" id="inputMemory">
  </div>
  <div class="col-6">
    <label for="inputMemory_Type" class="form-label">Memory Type</label>
    <input type="text" class="form-control" id="inputMemory_Type">
  </div>
  <div class="col-3">
    <label for="inputInterface" class="form-label">Interface</label>
    <input type="text" class="form-control" id="inputInterface">
  </div>
  <div class="col-md-2">
    <label for="inputPrice" class="form-label">Price</label>
    <input type="text" class="form-control" id="inputPrice">
  </div>
  <div class="col-6">
    <label for="inputSpecifications" class="form-label">Specifications</label>
    <input type="text" class="form-control" id="inputSpecifications">
  </div>
  <div class="row g-1">
  <div class="col-1">
    <label for="inputRelease_Date" class="form-label">Release Date</label>
    <input id="inputRelease_Date1" class="form-control" placeholder="Day">
    </div>

    <div class="row g-1">
    <div class="col-1">
    <input id="inputRelease_Date2" class="form-control" placeholder="Month">
    </div>
    <div class="row g-1">
    <div class="col-1">
    <input id="inputRelease_Date3" class="form-control" placeholder="Year">
    </div>
    </div>
    </div>
    </div>
    
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Confirm
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" id="save">บันทึก</button>
    <button type="submit" class="btn btn-danger">Reset</button>
  </div>
</form>


664485021 <br>
นายปัญญาวัฒน์ ภุมมะดิลก 66/96

</body>
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- sweetalert js -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
        });
        $('#save').on('click', function(e) {
      e.preventDefault();
      var form = $('.pt_upld_page_frm');
      swal.fire({
        title: "คุณต้องการบันทึกข้อมูลหรือไม่?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "ใช่ทำการบันทึกข้อมูล!",
        closeOnConfirm: false
      }, function(isConfirm) {
        console.log("sdfsf");
        if (isConfirm) form.submit();
      });
    });


    </script>
</html>