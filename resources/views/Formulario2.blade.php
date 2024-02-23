<h1>Numeros Amigos - Formulario</h1>

<form action="{{route('curso.store2')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Ingrese el numero 1:
    <br>
    <input type="number" name="num1">
</label>
<br><br><br>
<label>
    Ingrese el numero 2: :
    <br>
    <input type="number" name="num2">
</label>
<br><br><br>

<button type="submit">Enviar Formulario:</button>
</form>
