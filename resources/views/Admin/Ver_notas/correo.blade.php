<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enviando</title>

    <style>

        table, th, td {
            border: 1px solid;
            border-collapse: collapse;
            padding: 10px;
        }

    </style>
    
</head>
<body>

    <center><h3><strong>Notas de {{ $data[0]->nombres }} {{ $data[0]->apellidos }} </strong></h3>

    <p><strong>C.I.: </strong>{{ $data[0]->cedula_identidad }} </p><br>

    <table>
            <tr>
              <th>Curso</th>
              <th>Clase</th>
              <th>Lapso 1</th>
              <th>Lapso 2</th>
              <th>Lapso 3</th>
              <th>Final</th>
        
        
            </tr>
        
            @foreach ($data as $key => $value)
                
              <tr>

                <td>{{ $value->curso }}</td>
        
                <td>{{ $value->clase }}</td>
        
                <td>{{ $value->lapso_1 }}</td>
        
                <td>{{ $value->lapso_2 }}</td>
        
                <td>{{ $value->lapso_3 }}</td>
        
                <td>{{ $value->final }}</td>
            
              </tr>
            
            @endforeach
        
            </table></center>

    
</body>
</html>