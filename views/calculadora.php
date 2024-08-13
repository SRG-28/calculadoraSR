<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CalculadoraSR</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <div id="app">
        <h1>CalculadoraSR</h1>
        <form @submit.prevent="calcular">
            <input type="number" v-model.number="numero1" placeholder="Número 1" required>
            <select v-model="operacion">
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
                <option value="dividir">Dividir</option>
            </select>
            <input type="number" v-model.number="numero2" placeholder="Número 2" required>
            <button type="submit">Calcular</button>
        </form>

        <div v-if="resultado !== null">
            <h2>Resultado: {{ resultado }}</h2>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="public/js/app.js"></script>
</body>
</html>


