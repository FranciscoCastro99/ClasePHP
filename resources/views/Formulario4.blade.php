<h1>Formulario</h1>

<form action="{{route('curso.store4')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el Valor de A:
    <br>
    <input type="number" name="num1">
</label>
<br><br><br>
<label>
    Ingrese el Valor de B: :
    <br>
    <input type="number" name="num2">
</label>
<br><br><br>
<label>
    Ingrese el Valor de C: :
    <br>
    <input type="number" name="num3">
</label>
<br><br><br>

<button type="submit">Enviar Formulario:</button>
</form>
