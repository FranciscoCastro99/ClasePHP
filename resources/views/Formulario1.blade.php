<h1>Números Primos - Formulario</h1>

<form action="{{route('curso.store1')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese un numero:
    <br>
    <input type="number" name="num1">
</label>


<button type="submit">Enviar Formulario:</button>
</form>
