<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Solicitud de Edición</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <style>
    body {
      font-family: arial;
      color: #3c4858;
    }

    a:hover {
      text-decoration: none;
    }

    .content-body {
      background: #fbfbfb;
      padding: 10px;
      min-height: 26vh;
    }

    .container {
      width: 40%;
      display: block;
      margin: 0 auto;
    }

    .coral {
      color: #ff6e1a;
    }

    .creece {
      text-align: center;
      font-style: italic;
      font-weight: 600;
    }

    .bg-light {
      background-color: #f2f2f2;
    }

    .footer {
      background-color: #f2f2f2;
      padding: 1em;
      text-align: center;
      color: #b5b5b5;
    }

    .social {
      color: #b5b5b5;
      text-decoration: none;
      font-size: larger;
    }

    .email {
      color: rgba(78, 78, 78, 0.87);
      text-decoration: underline;
    }

    .mt-15 {
      margin-top: 15px;
    }

    .button-footer {
      background: #fbfbfb;
      padding: 1em;
    }

    .image {
      width: 30%;
    }

    .column {
      display: flex;
      align-items: center;
      padding: 5px 0;
    }
    .col{
      width: 50%;
    }
    .m-0{
      margin: 0;
    }
  </style>
</head>

<body style="margin: 0; padding: 0;">
  <div class="container">
    <div style="border: 1px solid #ccc;">
      <div class="content-body">
        <hr style="border: 2px solid #2a416c;">
        <div class="" style="margin-top: 28px;">
          <p>
            El proveedor {{ $data->provider->business_name }} ha solicitado modificar su información.
          </p>

          <hr>

        <a href="{{ $aproved_edit }}{{ $data->id }}" class="btn btn-success">Aprobar</a>
          <a href="{{ $reject_edit }}{{ $data->id }}" class="btn btn-danger">Rechazar</a>
        </div>

      </div>

    </div>
  </div>
</body>

</html>