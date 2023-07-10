<table class="table" enctype="multipart/form-data">
    <tr>
        <th>STT</th>
        <td><?= $row['id']; ?></td>
    </tr>
    <tr>
        <th>Tên</th>
        <td><?= $row['ten_nhan_su']; ?></td>
    </tr>
    <tr>
        <th>Vị Trí</th>
        <td><?= $row['vi_tri_cong_tac']; ?></td>
    </tr>

    <tr>
        <th>Chi Nhánh</th>
        <td><?= $row['chi_nhanh']; ?></td>
    </tr>
    <tr>
        <th>Tuổi</th>
        <td><?= $row['tuoi']; ?></td>
    </tr>
    <tr>
        <th>Ngày Làm Việc</th>
        <td><?= $row['ngay_bat_dau_cong_tac']; ?></td>
    </tr>
    <tr>
        <th>Lương</th>
        <td><?= $row['muc_luong']; ?></td>
    </tr>
</table>
<a type="button" href="index.php?controller=nhansu&action=index" class="btn btn-secondary">Quay lại</a>
