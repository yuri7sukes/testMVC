<h1>Список продуктов</h1>
<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Название</th>
        <th>Цена ($)</th>
        <th>Количество</th>
        <th>Категория</th>
    </tr>
    <?php foreach ($products as $id => $product): ?>
        <tr>
            <td><?= htmlspecialchars($id) ?></td>
            <td><?= htmlspecialchars($product['name']) ?></td>
            <td><?= htmlspecialchars($product['price']) ?></td>
            <td><?= htmlspecialchars($product['quantity']) ?></td>
            <td><?= htmlspecialchars($product['category']) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
