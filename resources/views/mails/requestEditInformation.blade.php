El proveedor {{ $data->provider->applicant_name }} ha solicitado modificar su información. 

<a href="{{ getenv('APP_FRONTEND').$routeRedirect }}/{{ $data->id }}">Aceptar</a>