<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            // Credenciales de prueba
            $user = "admin";
            $pass = "1234";
            
            if ($username === $user && $password === $pass) {
                echo "<p style='color: green;'>Acceso concedido</p>";
            } else {
                echo "<p style='color: red;'>Usuario o contraseña incorrectos</p>";
            }
        }
        ?>
