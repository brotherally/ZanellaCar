<?php
// Incluir a conexão com o banco de dados
include('db.php');

// Consultar todos os carros no banco de dados
$sql = "SELECT * FROM carros";
$result = $conn->query($sql);

echo '<h1>Carros Disponíveis</h1>';
echo '<div class="grid">';

// Verificar se existem carros no banco de dados
if ($result->num_rows > 0) {
    // Exibe cada carro
    while($row = $result->fetch_assoc()) {
        echo '<div class="coluna">';
        echo '<img src="imagens/' . $row['imagem'] . '" alt="' . $row['nome'] . '" title="' . $row['nome'] . '" style="width:200px;height:150px;">';
        echo '<p>' . $row['nome'] . '</p>';
        echo '<p>';
        echo '<a href="detalhes.php?id=' . $row['id'] . '" title="Detalhes" class="btn">';
        echo '<i class="fas fa-search"></i>';
        echo ' Ver Detalhes';
        echo '</a>';
        echo '</p>';
        echo '</div>';
    }
} else {
    echo "<p>Não há veículos disponíveis no momento.</p>";
}

echo '</div>';

$conn->close();
?>
