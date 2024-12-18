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
    <h1>การเขียนโปรแกรมด้วย php</h1>
    664485021 <br>
    นายปัญญาวัฒน์ ภุมมะดิลก 66/96
    <div class="alert alert-info">
  <strong>yayyyyy!</strong> Indicates a successful or positive action. <br>
    </div>
  <button type="button" class="btn btn-success">YEEEEEE</button>
  <button type="button" class="btn btn-danger">WOOOO</button> <br>
  <div class="card bg-light text-dark">
  <div class="card-body">wassup</div> <br>
</div>
    <!-- card -->
    <div class="card" style="width:400px">
  <img class="card-img-top" src="time.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Panyawat Bhummadilog</h4>
    <p class="card-text">Hello world</p>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&pp=ygUJcmljayByb2xs" class="btn btn-info">get rick roll</a>
</div>
</div>

<div class="d-grid">
  <button type="button" class="btn btn-primary btn-block" id="alert">sweetalert</button> <br>
</div>

<button type="button" class="btn btn-outline-danger" id="test">testsave</button>

<button type="button" class="btn btn-outline-danger" id="test2">are you gay</button>

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
        {
            $('#test').click(function() {
                Swal.fire({
                title: "Do you want to save the changes?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
                }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                Swal.fire("Saved!", "", "success");
                } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
            }
            });
            });
        }; {
            $('#test2').click(function() {
                Swal.fire({
                title: "Are you gay?",
            text: "click yes if you are gay",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes"
        }).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
      title: "YOU ARE GAY!",
      text: "VERY GAY",
      icon: "success"
    });
  }
});
            });
        };

    </script>
</html>