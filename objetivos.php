<!DOCTYPE html>
<html>
<head>
    <title>Formulario Tipo de Objetivo</title>
    <!-- Agregar los enlaces a los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados */
        .form-container {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group textarea {
            resize: none;
        }

        .form-btn-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="form-container">
            <h2 class="form-title">Formulario Tipo de Objetivo</h2>
            <form action="procesar_tipo_objetivo.php" method="post">
                <div class="form-group">
                    <label for="tipo_objetivo">Tipo de Objetivo:</label>
                    <select class="form-control" id="tipo_objetivo" name="tipo_objetivo" required>
                        <option value="">Seleccione un tipo de objetivo</option>
                        <option value="Objetivos Laborales">Objetivos Laborales</option>
                        <option value="Plan de Mejora">Plan de Mejora</option>
                        <option value="Objetivos Personales">Objetivos Personales</option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="objetivo">Objetivo del Colaborador:</label>
                    <textarea class="form-control" id="objetivo" name="objetivo" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="indicador_logro">Indicador de Logro (%):</label>
                    <input type="number" class="form-control" id="indicador_logro" name="indicador_logro" required>
                </div>
                <div class="form-btn-container">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Agregar el enlace al archivo de scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
