<?php
require '../../include/db.php';
require 'include/auth.php';

$result = $conn->query("SELECT * FROM hero_slides ORDER BY sort_order ASC");
?>

<h2>Hero Slides</h2>
<a href="add.php">+เพิ่มสไลด์</a>

<table border="1" cellpadding="8">
    <tr>
        <th>รูป</th>
        <th>หัวข้อ</th>
        <th>สถานะ</th>
        <th>จัดการ</th>
    </tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td>
        <img src="../../รูปภาพ/<?php echo $row['image'];?>" width="120">
    </td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['is_active'] ? 'แสดง' : 'ซ้อน' ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>">แก้ไข</a> |
        <a href="delete.php?id=<?php echo $row['id']; ?>"onclick="reture confirm('ลบ')">ลบ</a>
    </td>
</th>
<?php endwhile; ?>
</table>